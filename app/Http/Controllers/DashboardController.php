<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'CheckRole']);
    }

    public function index()
    {
        return view('dashboard.index');
    }

    public function users()
    {
        $users = User::all();
        return view('dashboard.users.index')->with('users', $users);
    }

    public function createUser()
    {
        return view('dashboard.users.create');
    }

    public function storeUser()
    {
        return view('dashboard.users.create');
    }
}
