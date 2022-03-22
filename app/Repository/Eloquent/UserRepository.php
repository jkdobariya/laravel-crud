<?php

namespace App\Repository\Eloquent;


use App\Repository\Interfaces\UserRepositoryInterface as UserRepositoryInterface;
use App\Models\User;


class UserRepository implements UserRepositoryInterface
{
    public $user;


    function __construct(User $user)
    {
        $this->user = $user;
    }


    public function getUsers()
    {
        // return $this->user->getUsers();
        return User::paginate(10);
    }


    public function getUser($id)
    {
        return $this->user->findUser($id);
    }



    public function storeUser($request)
    {
        // <!-- return $this->user->findUser($id); -->
    }



    public function updateUser($request, $id)
    {
        return $this->user->findUser($id);
    }


    public function deleteUser($id)
    {
        return $this->user->deleteUser($id);
    }
}