<?php

declare(strict_types=1);

namespace Controller;

use App\Ads;
use App\Session;
use App\User;

class UserController
{
    public function loadProfile(): void
    {
        $ads = (new Ads())->getUsersAds((new Session())->getId());
        loadView('profile', ['ads' => $ads]);
    }

    public function getUsers(): void
    {
        $users = (new User())->getUsers();
        loadView('dashboard/users', ['users' => $users]);
    }
}