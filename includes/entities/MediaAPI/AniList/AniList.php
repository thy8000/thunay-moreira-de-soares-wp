<?php

if (!defined('ABSPATH')) {
   exit;
}

class AniList implements MediaAPIInterface
{
   private $api_url = "https://graphql.anilist.co";
   private $request;
   private $query;
   private $query_builder;

   public function __construct()
   {
      $this->request = new Request();

      $this->query_builder = new GraphQL_Query_Builder();
   }

   public function get_genres()
   {
      $this->query = $this->query_builder
         ->set_query_name('getGenres')
         ->add_field('GenreCollection')
         ->build_simple();

      $this->request->post(
         $this->api_url,
         [
            'query' => $this->query,
         ]
      );

      return $this->request->response['data']['GenreCollection'];
   }

   public function get_trending_now(int $per_page = 5)
   {
      $this->query = $this->query_builder
         ->set_query_name('getTrendingNow')
         ->set_arguments([
            'page' => 1,
            'perPage' => $per_page
         ])
         ->add_field(
            [
               'name' => 'media',
               'fields' => [
                  'title { romaji }',
                  'coverImage { extraLarge large medium }'
               ],
               'arguments' => [
                  'sort' => 'TRENDING_DESC'
               ]
            ]
         )
         ->build();

      $this->request->post(
         $this->api_url,
         [
            'query' => $this->query,
         ]
      );

      return $this->request->response['data']['Page']['media'];
   }

   public function get_season_popular(int $page = 1, int $per_page = 5)
   {
      $this->query = $this->query_builder
         ->set_query_name('getPopularThisSeason')
         ->set_arguments([
            'page' => $page,
            'perPage' => $per_page
         ])
         ->add_field(
            [
               'name' => 'media',
               'fields' => [
                  'id',
                  'title { romaji english native userPreferred }',
                  'coverImage { extraLarge large medium }',
                  'popularity',
                  'format',
                  'status',
                  'season',
                  'seasonYear'
               ],
               'arguments' => [
                  'season' => AniList_Utils::get_current_season(),
                  'seasonYear' => (int) date('Y'),
                  'sort' => 'POPULARITY_DESC'
               ]
            ]
         )
         ->build();

      $this->request->post(
         $this->api_url,
         [
            'query' => $this->query,
         ]
      );

      return $this->request->response['data']['Page']['media'];
   }

   public function get_upcoming_next_season(int $page = 1, int $per_page = 5)
   {
      $this->query = $this->query_builder
         ->set_query_name('getUpcomingNextSeason')
         ->set_arguments([
            'page' => $page,
            'perPage' => $per_page
         ])
         ->add_field(
            [
               'name' => 'media',
               'fields' => [
                  'id',
                  'title { romaji english native userPreferred }',
                  'coverImage { extraLarge large medium }',
                  'popularity',
                  'format',
                  'status',
                  'season',
                  'seasonYear'
               ],
               'arguments' => [
                  'season' => AniList_Utils::get_next_season(),
                  'seasonYear' => (int) date('Y'),
                  'sort' => 'POPULARITY_DESC'
               ]
            ]
         )
         ->build();

      $this->request->post(
         $this->api_url,
         [
            'query' => $this->query,
         ]
      );

      return $this->request->response['data']['Page']['media'];
   }

   public function get_all_time_popular($page = 1, $per_page = 5)
   {
      $this->query = $this->query_builder
         ->set_query_name('getAllTimePopular')
         ->set_arguments([
            'page' => $page,
            'perPage' => $per_page
         ])
         ->add_field(
            [
               'name' => 'media',
               'fields' => [
                  'id',
                  'title { romaji english native userPreferred }',
                  'trending',
                  'format',
                  'status',
                  'coverImage { extraLarge large medium }',
               ],
               'arguments' => [
                  'sort' => 'POPULARITY_DESC'
               ]
            ]
         )
         ->build();

         $this->request->post(
            $this->api_url,
            [
               'query' => $this->query,
            ]
         );

      return $this->request->response['data']['Page']['media'];
   }
}
