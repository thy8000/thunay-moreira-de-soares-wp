<?php
// TODO: REFAZER LÓGICA DO QUERY BUILDER
class GraphQL_Query_Builder
{
   protected $query;

   public function __construct()
   {
      $this->reset();
   }

   public function reset()
   {
      $this->query = new \stdClass();
   }

   public function name(string $name)
   {
      $this->query->name = $name;

      return $this;
   }

   public function object(string $name, array $fields)
   {
      $this->query->object = $name;

      if (!empty($fields)) {
         $fields_map = array_map(function ($key, $value) {
            return "$key: $value";
         }, array_keys($fields), $fields);

         $this->query->object .= ' ( ' . implode(", ", $fields_map) . ' )';
      }

      return $this;
   }
}
