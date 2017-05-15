@extends('adminlte::page')

@section('title', 'Dashboard: Users')

@section('content_header')
    <h1>Users <small>List</small></h1>
@stop

@section('content')
    <div class="box box-primary">

        <div class="box-header">
            <a href="{{ route('users.create') }}" class="btn btn-default">Create</a>
        </div>

        <div class="box-body">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
                </thead>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-xs btn-primary">Edit</a>
                            <a href="#" class="btn btn-xs btn-danger">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>

        <div class="box-footer">
            <div class="box-tools pull-right">{{ $users->links() }}</div>
        </div>
    </div>
@stop