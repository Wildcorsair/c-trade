@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>User<small>Create</small></h1>
@stop

@section('content')
    <div class="row">
        @if (Session::has('success'))
            <div class="col-md-12">
                <div class="callout callout-success" role="alert">
                    <strong>Success:</strong> {{ Session::get('success') }}
                </div>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="col-md-12">
                <div class="callout callout-danger" role="alert">
                    <strong>Errors:</strong>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <form class="col-md-12" action="{{ route('users.store') }}" method="POST">
            <div class="box box-primary">
                <div class="box-body">
                    <div class=" col-md-6">
                        <div class="form-group">
                            {{ csrf_field() }}
                            <label for="first-name">First Name</label>
                            <input id="first-name" class="form-control" type="text" name="first_name" value="{{ old('first_name') }}">
                        </div>

                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input id="last-name" class="form-control" type="text" name="last_name" value="{{ old('last_name') }}">
                        </div>

                        <div class="form-group">
                            <label for="email">E-Mail Address</label>
                            <input id="email" class="form-control" type="text" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="roles">Roles</label>
                            <select id="roles" class="form-control select2" multiple="multiple" name="roles[]">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password" value="">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="btn btn-primary pull-right" type="submit" name="create_user" value="Create">
                            <a href="{{ route('users') }}" class="btn btn-default">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@stop

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script>
        $('#roles').select2();
    </script>
@stop