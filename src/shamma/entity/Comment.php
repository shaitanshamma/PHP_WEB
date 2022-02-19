<?php

namespace shamma\entity;

class Comment
{

    public function __construct(
        private int    $id,
        private string $text,
        private int    $user_id,
        private int    $post_id
    )
    {
    }

    public function __toString(): string
    {
        return 'id = ' . $this->id . ' ' .
            'text = ' . $this->text . ' ' .
            'user_id = ' . $this->user_id . ' ' .
            'post_id = ' . $this->post_id;
    }


}