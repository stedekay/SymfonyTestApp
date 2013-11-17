<?php

namespace MyClub\CoreDomainBundle\Repository;

use MyClub\CoreDomain\User\User;
use MyClub\CoreDomain\User\UserRepository;

class InMemoryUserRepository implements UserRepository {

    private $users;

    public function __construct()
    {
        $this->users[] = new User(1, 'Blanke');
        $this->users[] = new User(2, 'Mustermann');
    }

    public function find($userId)
    {
    }

    public function findAll()
    {
        return $this->users;
    }

    public function add(User $user)
    {
    }

    public function remove(User $user)
    {
    }
}