<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserDataRequest;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Session;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'CheckRole']);
    }

    /**
     * Display dashboard 'Welcome' page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * Display users list
     *
     * @return $this
     */
    public function users()
    {
        $users = User::orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.users.index')->with('users', $users);
    }

    /**
     * Display 'Create User' form
     *
     * @return $this
     */
    public function createUser()
    {
        $roles = Role::all();
        return view('dashboard.users.create')->with('roles', $roles);
    }

    /**
     * Store new user into the database
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeUser(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|max:190',
            'last_name'  => 'required|max:190',
            'roles'      => 'required',
            'email'      => 'required|email|unique:users|max:190',
            'password'   => 'required|min:6'
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status = 1;
        $user->save();

        $user->roles()->sync($request->roles, false);

        Session::flash('success', 'New user was successfully created!');

        return redirect()->route('users.edit', ['id' => $user->id]);
//        return view('dashboard.users.edit');
    }

    /**
     * Display 'Edit User' form
     *
     * @param int $id User identifier
     * @return $this
     */
    public function editUser($id)
    {
        $roles = Role::all();
        $user = User::find($id);
        $userRoles = $user->roles()->get();

        return view('dashboard.users.edit')
            ->with('user', $user)
            ->with('roles', $roles)
            ->with('userRoles', $userRoles);
    }

    public function updateUser(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required|max:190',
            'last_name'  => 'required|max:190'
        ]);

        if (!empty($request->password)) {
            $this->validate($request, [
                'password'   => 'min:6'
            ]);
        }

        $user = User::find($id);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;

        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        if (!empty($request->roles)) {
            $user->roles()->sync($request->roles, true);
        } else {
            $user->roles()->sync([]);
        }

        Session::flash('success', 'User\'s data was successfully updated!');

        return redirect()->route('users.edit', ['id' => $user->id]);
    }

    public function delete()
    {

    }

    public function desroy()
    {

    }
}
