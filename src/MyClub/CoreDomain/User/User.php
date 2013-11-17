<?php

namespace MyClub\CoreDomain\User;

class User {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    function __construct($id, $username)
    {
        $this->id = $id;
        $this->username = $username;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

}