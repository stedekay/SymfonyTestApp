<?php

namespace MyClub\CoreDomain\User;

interface UserRepository {

    public function find($userId);

    public function findAll();

    public function add(User $user);

    public function remove(User $user);
}