<?php


namespace App\Services;

class AuthenticationService extends BaseService
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login() {

    }
}
