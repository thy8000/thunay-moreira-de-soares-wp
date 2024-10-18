<?php

class GraphQL_Query_Builder
{
    protected $query_name;
    protected $arguments = [];
    protected $fields = [];

    public function set_query_name(string $query_name)
    {
        $this->query_name = $query_name;

        return $this;
    }

    public function set_arguments(array $arguments)
    {
        $this->arguments = $arguments;
        
        return $this;
    }

    public function add_field(string $field, $sub_fields = null, array $field_arguments = [])
    {
        $args_string = '';

        if (!empty($field_arguments)) {
            $args = [];

            foreach ($field_arguments as $key => $value) {
                if (is_string($value) && !preg_match('/^[A-Z_]+$/', $value)) {
                    $value = '"' . $value . '"';
                }

                $args[] = "$key: $value";
            }

            $args_string = '(' . implode(", ", $args) . ')';
        }

        if ($sub_fields) {

            if (is_array($sub_fields)) {
                $sub_fields = implode("\n", $sub_fields);
            }

            $this->fields[] = "$field$args_string {\n$sub_fields\n}";
        } else {
            $this->fields[] = "$field$args_string";
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
                $value = '"' . $value . '"';
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
}
