<?php

if (!defined('ABSPATH')) {
   exit;
}

class AniList_Rest_API
{
   private $query_builder;
   private $request;
   private $api_url = 'https://graphql.anilist.co';
   private $media_api = null;

   function __construct()
   {
      $this->query_builder = new GraphQL_Query_Builder();
      $this->request = new Request();

      $this->media_api = new AniListCreator();
      $this->media_api = $this->media_api->get();

      add_action('rest_api_init', [$this, 'custom_endpoints']);
   }

   function custom_endpoints()
   {
      register_rest_route('anilist/api', '/search/', [
         'methods' => 'POST',
         'callback' => [$this, 'search_animes'],
         'args'    => [
            'filter' => [
               'required' => true,
               'validate_callback' => [$this, 'validate_search_animes_callback'],
            ],
         ],
      ]);
   }

   function validate_search_animes_callback($value, $request, $param)
   {
      if (empty($value)) {
         return new WP_Error('rest_invalid_param', esc_html__('O parâmetro query deve ser uma string não vazia.'), ['status' => 400]);
      }

      return true;
   }

   function search_animes($request)
   {
      $filter = $request->get_param('filter');

      if (AniList_Utils::is_filter_empty($filter)) {
         return new WP_Error('rest_invalid_param', esc_html__('Filtros inválidos.'), ['status' => 400]);
      }

      $response = $this->media_api->get_filter($filter);

      //TODO: TRATAR A RESPOSTA

      debug($response);
   }
}

new AniList_Rest_API();
