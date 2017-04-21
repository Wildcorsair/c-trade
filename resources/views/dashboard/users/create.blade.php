@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>User<small>Create</small></h1>
@stop

@section('content')
    <div class="row">
        <form class="col-md-6" action="{{ route('users.store') }}" method="POST">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <label for="first-name">First Name</label>
                        <input id="first-name" class="form-control" type="text" name="first_name" value="">
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name</label>
                        <input id="last-name" class="form-control" type="text" name="last_name" value="">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail Address</label>
                        <input id="email" class="form-control" type="text" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password" value="">
                    </div>
                </div>
                <div class="box-footer">
                    <div class="form-group">
                        <input class="btn btn-primary pull-right" type="submit" name="create_user" value="Create">
                    </div>
                </div>
            </div>
        </form>

        {{--<div class="col-md-6">7</div>--}}

    </div>
@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script></script>
@stop