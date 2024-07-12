<?php

if (!defined('ABSPATH')) {
    exit;
}

class Request
{
    private $request;

    public function __construct()
    {
        $this->request = curl_init();

        $this->set_options();
    }

    private function set_options()
    {
        curl_setopt($this->request, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->request, CURLOPT_RETURNTRANSFER, 1);
    }

    public function get(string $url, array $headers = [], array $params = [])
    {
        if (!empty($params)) {
            $url .= '?' . http_build_query($params);
        }

        curl_setopt($this->request, CURLOPT_URL, $url);
        curl_setopt($this->request, CURLOPT_HTTPGET, true);

        if (!empty($headers)) {
            curl_setopt($this->request, CURLOPT_HTTPHEADER, $headers);
        }

        $response = $this->execute();
    }

    private function execute()
    {
        //TODO: EXECUTAR REQUEST E RETORNAR RESPONSE
    }
}
