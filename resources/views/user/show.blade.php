@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Show User') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.update', $user->id) }}">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="firstname" class="form-label">{{ __('Firstname') }}</label>
                                <input id="firstname" type="text"
                                    class="form-control-plaintext form-control-sm @error('firstname') is-invalid @enderror"
                                    name="firstname" value="{{ $user->firstname }}" required autocomplete="firstname">

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="lastname" class="form-label">{{ __('Lastname') }}</label>
                                <input id="lastname" type="text"
                                    class="form-control-plaintext form-control-sm @error('lastname') is-invalid @enderror"
                                    name="lastname" value="{{ $user->lastname }}" required autocomplete="lastname">

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="username" class="form-label">{{ __('Username') }}</label>
                                <input id="username" type="text"
                                    class="form-control-plaintext form-control-sm @error('username') is-invalid @enderror"
                                    name="username" value="{{ $user->username }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">{{ __('Phone') }}</label>
                                <input id="phone" type="text"
                                    class="form-control-plaintext form-control-sm @error('phone') is-invalid @enderror"
                                    name="phone" value="{{ $user->phone }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email"
                                    class="form-control-plaintext form-control-sm @error('email') is-invalid @enderror"
                                    name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-0">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i> {{ __('Edit') }}
                                </a>
                                <a href="{{ url()->current() }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-refresh"></i> {{ __('Refresh') }}
                                </a>
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
