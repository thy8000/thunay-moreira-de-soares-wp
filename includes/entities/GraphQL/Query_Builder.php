<?php

class GraphQL_Query_Builder
{
   protected $query_name;
   protected $arguments = [];
   protected $fields = [];

   public function set_query_name(string $query_name)
   {
      $this->reset();

      $this->query_name = $query_name;

      return $this;
   }

   public function set_arguments(array $arguments)
   {
      $this->arguments = $arguments;

      return $this;
   }

   public function add_field($field)
   {
      if (is_array($field) && isset($field['name'])) {
         $field_name = $field['name'];
         $alias = isset($field['alias']) ? $field['alias'] . ': ' : '';
         $sub_fields = $field['fields'] ?? null;
         $field_arguments = $field['arguments'] ?? [];

         $args_string = '';

         if (!empty($field_arguments)) {
            $args = [];

            foreach ($field_arguments as $key => $value) {
               if (is_string($value) && !preg_match('/^[A-Z_]+$/', $value)) {
                  $value = '"' . addslashes($value) . '"';
               }

               $args[] = "$key: $value";
            }

            $args_string = '(' . implode(", ", $args) . ')';
         }

         if ($sub_fields) {
            if (is_array($sub_fields)) {
               $sub_fields = implode("\n", $sub_fields);
            }

            $this->fields[] = "$alias$field_name$args_string {\n$sub_fields\n}";
         } else {
            $this->fields[] = "$alias$field_name$args_string";
         }
      } else { 
         $args_string = '';
         $field_name = $field;
         $sub_fields = null;
         $field_arguments = [];

         $this->fields[] = $field_name;
      }

      return $this;
   }

   public function reset()
   {
      $this->query_name = null;
      $this->arguments = [];
      $this->fields = [];

      return $this;
   }

   public function build(): string
   {
      $args = [];

      foreach ($this->arguments as $key => $value) {
         if (is_string($value)) {
            $value = '"' . addslashes($value) . '"';
         }

         $args[] = "$key: $value";
      }

      $args_string = implode(", ", $args);
      $fields_string = implode("\n", $this->fields);

      return <<<QUERY
            query {$this->query_name} {
                Page($args_string) {
                    $fields_string
                }
            }
        QUERY;
   }

   public function build_simple(): string 
   {
      $fields_string = implode("\n", $this->fields);

      return <<<QUERY
        query {$this->query_name} {
            $fields_string
        }
      QUERY;
   }
}
