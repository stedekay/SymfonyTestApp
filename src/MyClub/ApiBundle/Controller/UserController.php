<?php

namespace MyClub\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class UserController extends Controller
{
    /**
     * @Route("/users.{_format}", name="users_all")
     * @Method("GET")
     * @Rest\View
     */
    public function allAction()
    {
        $users = $this->get('user_repository')->findAll();

        return array('users' => $users);
    }
}