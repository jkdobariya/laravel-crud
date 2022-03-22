@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Users') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <button class="btn btn-primary text-light btn-sm" type="button">
                                    <i class="fa fa-plus"></i> Create
                                </button>
                                <button class="btn btn-warning btn-sm" type="button">
                                    <i class="fa fa-edit"></i> Edit
                                </button>
                                <button class="btn btn-danger btn-sm" type="button">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                                <button class="btn btn-secondary btn-sm" type="button">
                                    <i class="fa fa-download"></i> Import
                                </button>

                                <div class="btn-group">
                                    <button class="btn btn-dark btn-sm" type="button">
                                        <i class="fa fa-upload"></i> Export
                                    </button>
                                    <button type="button"
                                        class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="visually-hidden">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-table"></i> Csv Format</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-file-excel-o"></i> MS
                                                Excel</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o"></i> PDF
                                                Document</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-file-text-o"></i> Text
                                                File</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-file-o"></i> Googl
                                                Sheet</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="fa fa-print"></i> Print</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-end">
                                <form action="">
                                    {{-- <label for="search">Search </label> --}}
                                    <input type="text" name="serach" id="search" class="form-control form-control-sm"
                                        placeholder="Search" />
                                </form>
                            </div>
                        </div>
                        <table class="table table-striped table-sm table-bordered">
                            <thead>
                                <th><input type="checkbox"></th>
                                <th>Fullname</th>
                                <th>Username</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            <input type="checkbox" value="rows[{{ $user->id }}]">
                                        </td>
                                        <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ route('user.update', $user->id) }}">
                                                @if ($user->status == 'A')
                                                    <span class="badge bg-success">Active</span>
                                                @elseif($user->status == 'P')
                                                    <span class="badge bg-warning">Pending</span>
                                                @elseif($user->status == 'D')
                                                    <span class="badge bg-danger">Deactive</span>
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">

                                                <a href="{{ route('user.show', $user->id) }}"
                                                    class="btn btn-sm text-info"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('user.edit', $user->id) }}"
                                                    class="btn btn-sm text-success"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('user.destroy', $user->id) }}"
                                                    class="float-right inline-block">
                                                    <button type="submit" class="btn btn-sm text-danger"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <thead>
                                <th><input type="checkbox"></th>
                                <th>Fullname</th>
                                <th>Username</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </thead>
                            <caption>{{ $users->onEachSide(2)->links() }}</caption>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
