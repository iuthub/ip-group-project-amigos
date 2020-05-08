<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/index');
    }
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
