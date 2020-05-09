<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('isAdmin');
        $this->middleware('auth');
    }

    
    public function index()
    {
        $users = User::where('type', 'user')->paginate(8);
        return view('admin/index', ['users' => $users]);
    }

    public function userDelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()
                ->route('admin')
                ->with('msg', 'User has been deleted successfully');
    }

    public function userAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->type = 'admin';
        $user->save();

        return redirect()
                ->route('admin')
                ->with('msg', 'User has been promoted successfully');
    }
}

