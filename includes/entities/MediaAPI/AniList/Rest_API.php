<?php

if (!defined('ABSPATH')) {
   exit;
}

class AniList_Rest_API
{
   private $query_builder;
   private $request;
   private $api_url = 'https://graphql.anilist.co';

   function __construct()
   {
      $this->query_builder = new GraphQL_Query_Builder();
      $this->request = new Request();

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

      debug($filter);

      if(AniList_Utils::is_filter_empty($filter)) {
         return new WP_Error('rest_invalid_param', esc_html__('Filtros inválidos.'), ['status' => 400]);
      }
      // TODO: REFAZER LÓGICA DO QUERY BUILDER
      $query = $this->query_builder->set_query_name('searchAnimes')
         ->set_arguments([
            'search' => $filter['search'] ?? null,
            'genre' => $filter['genre'] ?? null,
            'startDate_like' => $filter['year'] ?? null,
            'season' => $filter['season'] ?? null,
            'format' => $filter['format'] ?? null,
         ])
         ->set_fields([
            'name' => 'media',
            'fields' => [
               'id',
               'title { romaji english native userPreferred }',
               'coverImage { extraLarge large medium }',
            ]
         ])
         ->build();

         $this->request->post(
            $this->api_url,
            [
               'query' => $query,
            ]
         );

         debug($query);

         return $this->request->response['data']['Page']['media'];
   }
}

new AniList_Rest_API();