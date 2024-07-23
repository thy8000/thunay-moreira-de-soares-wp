<?php

if (!defined('ABSPATH')) {
    exit;
}

class AniList implements MediaAPIInterface
{
    private $api_url = "https://graphql.anilist.co";
    private $query;
    private $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    public function get_genres()
    {
        $this->query = "
            query getGenres {
                GenreCollection
            }
        ";

        $this->request->post(
            $this->api_url,
            [
                'query' => $this->query,
            ]
        );

        return $this->request->response['data']['GenreCollection'];
    }
}
