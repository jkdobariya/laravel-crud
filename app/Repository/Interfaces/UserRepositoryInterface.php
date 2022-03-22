<?php

namespace App\Repository\Interfaces;


interface UserRepositoryInterface
{


    public function getUsers();
    public function getUser($id);
    public function storeUser($request);
    public function updateUser($request, $id);
    public function deleteUser($id);
}