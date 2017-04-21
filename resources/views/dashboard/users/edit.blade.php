@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>User<small>Edit</small></h1>
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
        <form class="col-md-12" action="{{ route('users.update', ['id' => $user->id]) }}" method="POST">
            <div class="box box-success">
                <div class="box-body">
                    <div class=" col-md-6">
                        <div class="form-group">
                            {{ csrf_field() }}
                            {!! method_field('PUT') !!}
                            <label for="first-name">First Name</label>
                            <input id="first-name" class="form-control" type="text" name="first_name" value="{{ $user->first_name }}">
                        </div>

                        <div class="form-group">
                            <label for="last-name">Last Name</label>
                            <input id="last-name" class="form-control" type="text" name="last_name" value="{{ $user->last_name }}">
                        </div>

                        <div class="form-group">
                            <label for="email">E-Mail Address</label>
                            <input id="email" class="form-control" type="text" name="email" disabled value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="roles">Roles</label>
                            <select id="roles" class="form-control select2" multiple name="roles[]">
                                @foreach($roles as $role)

                                    @foreach($userRoles as $userRole)

                                        @if($role->id == $userRole->id)
                                            <option selected value="{{ $role->id }}">{{ $role->name }}</option>
                                        @else
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endif

                                    @endforeach
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
                            <input class="btn btn-success pull-right" type="submit" name="update_user" value="Update">
                            <a href="{{ route('users') }}" class="btn btn-default">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
@stop

@section('css')
    <link href="{!! asset('vendor/select2/dist/css/select2.min.css') !!}" rel="stylesheet" />
@stop

@section('js')
    <script src="{!! asset('vendor/select2/dist/js/select2.min.js') !!}"></script>
    <script>
        $('#roles').select2();
    </script>
@stop