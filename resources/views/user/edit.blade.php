@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit User') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.update', $user->id) }}">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="firstname" class="form-label">{{ __('Firstname') }}</label>
                                <input id="firstname" type="text"
                                    class="form-control form-control-sm @error('firstname') is-invalid @enderror"
                                    name="firstname" value="{{ $user->firstname }}" required autocomplete="firstname"
                                    autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="lastname" class="form-label">{{ __('Lastname') }}</label>
                                <input id="lastname" type="text"
                                    class="form-control form-control-sm @error('lastname') is-invalid @enderror"
                                    name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname"
                                    autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">{{ __('Username') }}</label>
                                <input id="username" type="text"
                                    class="form-control form-control-sm @error('username') is-invalid @enderror"
                                    name="username" value="{{ $user->username }}" required autocomplete="username"
                                    autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">{{ __('Phone') }}</label>
                                <input id="phone" type="text"
                                    class="form-control form-control-sm @error('phone') is-invalid @enderror" name="phone"
                                    value="{{ $user->phone }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control form-control-sm @error('email') is-invalid @enderror" name="email"
                                    value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control form-control-sm @error('password') is-invalid @enderror"
                                    name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control form-control-sm"
                                    name="password_confirmation" autocomplete="new-password">
                            </div>

                            <div class="mb-0">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-plus"></i> {{ __('Update') }}
                                </button>
                                <button type="reset" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-window-restore"></i> {{ __('Reset') }}
                                </button>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i> {{ __('Delete') }}
                                    </button>
                                </form>
                                <a href="{{ url()->previous() }}" class="btn btn-dark btn-sm float-end">
                                    <i class="fa fa-angle-right"></i> {{ __('Go Back') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
