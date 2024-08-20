<?php

if (!defined('ABSPATH')) {
    exit;
}

abstract class MediaAPICreator
{
    abstract public function create(): MediaAPIInterface;

    public function get(): MediaAPIInterface
    {
        return $this->create();
    }
}

class AniListCreator extends MediaAPICreator
{
    public function create(): MediaAPIInterface
    {
        return new AniList();
    }
}
