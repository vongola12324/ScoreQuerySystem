<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class AdminController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return route('admin.login');
	}

    public function getLogin()
    {
        return view('query/home');
    }

    public function postCreateContest()
    {
        return view('query/home');
    }

    public function postUpdateContest()
    {
        return view('query/home');
    }

    public function postDeleteContest()
    {
        return view('query/home');
    }

    public function getList()
    {
        return view('query/home');
    }
}
