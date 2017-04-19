<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function users()
    {

        $users = User::all();
        return view('dashboard.users')->with('users', $users);
    }
}
