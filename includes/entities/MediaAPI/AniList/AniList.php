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
}
