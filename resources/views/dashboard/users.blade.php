@extends('adminlte::page')

@section('title', 'Dashboard: Users')

@section('content_header')
    <h1>Dashboard: Users</h1>
@stop

@section('content')
    <div class="box">
        <div class="box-body no-padding">
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
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop