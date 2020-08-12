<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * @return users data
     */
    public function index(Request $request)
    {
        $users = User::Select('users.*', 'countries.country_name')
        ->join('countries', 'countries.id', 'users.country_id')
        ->get();
        return view('user.index')->with('users', $users);
    }
}
