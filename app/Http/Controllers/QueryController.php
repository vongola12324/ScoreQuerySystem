<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

class QueryController extends Controller {

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
		return view('query/home');
	}

    public function postLogin()
    {
        $contestName = ['遠月學園入學測驗', '魔法大學附屬第一高中入學測驗', '總武高中入學測驗'];
        $contestID = Input::get('ContestID');
        $ticketID = Input::get('TicketID');
        $identityID = Input::get('IdentityCardID');
        if (!empty($contestID) && !empty($ticketID) && !empty($identityID)){
            return view('query/show')->with('ContestName', $contestName[$contestID])->with('UserName', $identityID);
        }
        return view('query/home')->with('error', 'No Data');
    }
}
