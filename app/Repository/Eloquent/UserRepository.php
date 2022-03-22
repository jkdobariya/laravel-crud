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


    public function getUser($userId)
    {
        return $this->user->findOrFail($userId);
    }



    public function storeUser(array $userDetails)
    {
        return $this->user->create($userDetails);
    }



    public function updateUser($userDetails, $userId)
    {
        return $this->user->whereId($userId)->update($userDetails);
    }


    public function deleteUser($userId)
    {
        return $this->user->deleteUser($userId);
    }
}