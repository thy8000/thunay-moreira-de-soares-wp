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

        $genres_list = $this->request->response;

        return $this->request->response['data']['GenreCollection'];
    }
}
