<?php

namespace App\Repository\Interfaces;


interface UserRepositoryInterface
{


    public function getUsers();
    public function getUser($userId);
    public function storeUser(array $userDetails);
    public function updateUser(array $userDetails, $userId);
    public function deleteUser($userId);
}