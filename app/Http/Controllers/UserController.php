<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Interfaces\UserRepositoryInterface as UserRepositoryInterface;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{

    private UserRepositoryInterface $userRepository;
    private $field = ['firstname', 'lastname', 'username', 'email', 'phone', 'password'];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->getUsers();
        // return $users;
        return view('user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $userDetails = $request->only($this->field);
        $this->userRepository->storeUser($userDetails);
        return redirect()->route('user.index')->with('success', 'User Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        $user = $this->userRepository->getUser($userId);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($userId)
    {
        $user = $this->userRepository->getUser($userId);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $userDetails, $userId)
    {
        if (is_null($userDetails->password)) {
            $this->field = ['firstname', 'lastname', 'username', 'email', 'phone'];
        }

        // $this->field->password)
        $userDetails = $userDetails->only($this->field);
        $this->userRepository->updateUser($userDetails, $userId);
        return redirect()->route('user.index')->with('warning', 'User Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userId)
    {
        $this->userRepository->deleteUser($userId);
        return redirect()->route('user.index')->with('danger', 'User Deleted Successfully!');
    }
}