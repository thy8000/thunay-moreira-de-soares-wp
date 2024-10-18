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
        $this->query = <<<QUERY
            query getGenres {
                GenreCollection
            }
        QUERY;

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
            ->add_field('media', [
                'title { romaji }',
                'coverImage { extraLarge large medium }'
            ], ['sort' => 'TRENDING_DESC'])
            ->build();

        $this->request->post(
            $this->api_url,
            [
                'query' => $this->query,
            ]
        );

        $this->query_builder->reset();

        return $this->request->response['data']['Page']['media'];
    }

    public function get_season_popular(int $page = 1, int $per_page = 5)
    {
        $this->query = <<<QUERY
            query getPopularThisSeason(\$season: MediaSeason!, \$seasonYear: Int!, \$page: Int!, \$perPage: Int!) {
                Page(page: \$page, perPage: \$perPage) {
                    media(season: \$season, seasonYear: \$seasonYear, sort: POPULARITY_DESC) {
                        id
                        title {
                        romaji
                        english
                        native
                        userPreferred
                        }
                        coverImage {
                        extraLarge
                        large
                        medium
                        }
                        popularity
                        format
                        status
                        season
                        seasonYear
                    }
                }
          }
        QUERY;

        $this->request->post(
            $this->api_url,
            [
                'query' => $this->query,
                'variables' => [
                    'season' => AniList_Utils::get_current_season(),
                    'seasonYear' => date('Y'),
                    'page' => $page,
                    'perPage' => $per_page,
                ],
            ]
        );

        return $this->request->response['data']['Page']['media'];
    }

    public function get_upcoming_next_season(int $page = 1, int $per_page = 5)
    {
        $this->query = <<<QUERY
            query getUpcomingNextSeason(\$season: MediaSeason!, \$seasonYear: Int!, \$page: Int!, \$perPage: Int!) {
                Page(page: \$page, perPage: \$perPage) {
                    media(season: \$season, seasonYear: \$seasonYear, sort: POPULARITY_DESC) {
                        id
                        title {
                            romaji
                            english
                            native
                            userPreferred
                        }
                        coverImage {
                            extraLarge
                            large
                            medium
                        }
                        popularity
                        format
                        status
                        season
                        seasonYear
                    }
                }
            }
        QUERY;

        $this->request->post(
            $this->api_url,
            [
                'query' => $this->query,
                'variables' => [
                    'season' => AniList_Utils::get_next_season(),
                    'seasonYear' => date('Y'),
                    'page' => $page,
                    'perPage' => $per_page
                ],
            ]
        );

        return $this->request->response['data']['Page']['media'];
    }

    public function get_all_time_popular($page = 1, $per_page = 5)
    {
        $this->query = <<<QUERY
            query getAllTimePopular(\$page: Int!, \$perPage: Int!) {
                Page(page: \$page, perPage: \$perPage) {
                    media(sort: POPULARITY_DESC) {
                        id
                        title {
                            romaji
                            english
                            native
                            userPreferred
                        }
                        trending
                        format
                        status
                        coverImage {
                            extraLarge
                            large
                            medium
                            color
                        }
                    }
                }
            }
        QUERY;

        $this->request->post(
            $this->api_url,
            [
                'query' => $this->query,
                'variables' => [
                    'page' => $page,
                    'perPage' => $per_page
                ],
            ]
        );

        return $this->request->response['data']['Page']['media'];
    }
}
