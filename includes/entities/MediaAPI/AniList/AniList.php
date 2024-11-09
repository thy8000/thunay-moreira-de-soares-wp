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
         ->set_query('getGenres')
         ->set_sub_fields(['GenreCollection'])
         ->build();

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
         ->set_query('getTrendingNow')
         ->set_object('Page', [
            'page' => 1,
            'perPage' => $per_page
         ])
         ->set_field('media', [
            'sort' => 'TRENDING_DESC'
         ])
         ->set_sub_fields([
            'title' => [
               'romaji',
            ],
            'coverImage' => [
               'extraLarge',
               'large',
               'medium'
            ]
         ])
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
         ->set_query('getPopularThisSeason')
         ->set_object('Page', [
            'page' => $page,
            'perPage' => $per_page
         ])
         ->set_field('media', [
            'season' => AniList_Utils::get_current_season(),
            'seasonYear' => date('Y'),
            'sort' => 'POPULARITY_DESC'
         ])
         ->set_sub_fields([
            'id',
            'title' => [
               'romaji',
               'english',
               'native',
               'userPreferred',
            ],
            'coverImage' => [
               'extraLarge',
               'large',
               'medium',
            ],
            'popularity',
            'format',
            'status',
            'season',
            'seasonYear'
         ])
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
      $season_and_year = AniList_Utils::get_next_season_and_year();

      $this->query = $this->query_builder
         ->set_query('getUpcomingNextSeason')
         ->set_object('Page', [
            'page' => $page,
            'perPage' => $per_page
         ])
         ->set_field('media', [
            'season' => $season_and_year['season'],
            'seasonYear' => $season_and_year['year'],
            'sort' => 'POPULARITY_DESC'
         ])
         ->set_sub_fields([
            'id',
            'title' => [
               'romaji',
               'english',
               'native',
               'userPreferred'
            ],
            'coverImage' => [
               'extraLarge',
               'large',
               'medium'
            ],
            'popularity',
            'format',
            'status',
            'season',
            'seasonYear'
         ])
         ->build();

      $this->request->post(
         $this->api_url,
         [
            'query' => $this->query,
         ]
      );

      return $this->request->response['data']['Page']['media'];
   }

   // TODO: ARRUMAR ALL TIME POPULAR
   public function get_all_time_popular($page = 1, $per_page = 5)
   {
      $season_and_year = AniList_Utils::get_next_season_and_year();

      $this->query = $this->query_builder
         ->set_query('getAllTimePopular')
         ->set_object('Page', [
            'page' => $page,
            'perPage' => $per_page
         ])
         ->set_field('media', [
            'sort' => 'POPULARITY_DESC'
         ])
         ->set_sub_fields([
            'id',
            'title' => [
               'romaji',
               'english',
               'native',
               'userPreferred'
            ],
            'coverImage' => [
               'extraLarge',
               'large',
               'medium'
            ],
            'popularity',
            'format',
            'status',
            'season',
            'seasonYear'
         ])
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
