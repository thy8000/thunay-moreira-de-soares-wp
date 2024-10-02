<?php

if (!defined('ABSPATH')) {
   exit;
}

class AniList_Rest_API
{
   function __construct()
   {
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
      if (!is_string($value) || empty($value)) {
         return new WP_Error('rest_invalid_param', esc_html__('O parâmetro query deve ser uma string não vazia.'), ['status' => 400]);
      }

      return true;
   }

   function search_animes($request)
   {
      // TODO: Implementar busca de animes via Graphql
   }
}
