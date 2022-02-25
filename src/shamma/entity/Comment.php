<?php

namespace shamma\entity;

class Comment
{

    public function __construct(
        private int    $id,
        private string $text,
        private int    $userId,
        private int    $postId
    )
    {
    }

    public function __toString(): string
    {
        return 'id = ' . $this->id . ' ' .
            'text = ' . $this->text . ' ' .
            'user_id = ' . $this->userId . ' ' .
            'post_id = ' . $this->postId;
    }


}