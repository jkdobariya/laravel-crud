<?php

namespace App\Repository\Interfaces;


interface UserRepositoryInterface
{


    public function getUsers();
    public function getUser($id);
    public function storeUser(array $userDetails);
    public function updateUser(array $userDetails, $id);
    public function deleteUser($id);
}