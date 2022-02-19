<?php

namespace shamma\entity;

class Post
{

    public function __construct(
        private int    $id,
        private string $title,
        private string $description,
        private int    $user_id,
    )
    {
    }

    public function __toString(): string
    {
        return 'id = ' . $this->id . ' ' .
            'title = ' . $this->title . ' ' .
            'description = ' . $this->description . ' ' .
            'user_id = ' . $this->user_id;
    }


}