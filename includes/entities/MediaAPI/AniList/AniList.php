<?php

if (!defined('ABSPATH')) {
    exit;
}

class AniList implements MediaAPIInterface
{
    private $api_url = "https://graphql.anilist.co";
    private $request;
    private $query;

    public function __construct()
    {
        $this->request = new Request();
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
        $this->query = <<<QUERY
            query getTrendingNow{
                Page(page: 1, perPage: {$per_page}) {
                    media(sort: TRENDING_DESC) {
                        title {
                            romaji
                        }
                        coverImage {
                            extraLarge
                            large
                            medium
                        }
                    }
                }
            }
        QUERY;

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
