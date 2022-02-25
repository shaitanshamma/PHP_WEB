<?php

namespace shamma\entity;

class User
{

    /**
     * User constructor.
     * @param int $id
     * @param string $name
     * @param string $lastName
     */
    public function __construct(private int $id, private string $name, private string $lastName)
    {
    }

    public function __toString(): string
    {
        return 'id = ' . $this->id . ' ' .
            'name = ' . $this->name . ' ' .
            'lastname = ' . $this->lastName;
    }


}