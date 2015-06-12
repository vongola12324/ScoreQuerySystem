<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

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

        $contestName = ['1' => '遠月學園入學測驗', '2' => '魔法大學附屬第一高中入學測驗', '3' => '總武高中入學測驗'];
		return view('query/home')->with('Contest', $contestName);
	}

    public function postAuth()
    {
        $contestName = ['1' => '遠月學園入學測驗', '2' => '魔法大學附屬第一高中入學測驗', '3' => '總武高中入學測驗'];
        $contestID = Request::get('ContestID');
        $ticketID = Request::get('TicketID');
        $identityID = Request::get('IdentityCardID');
        dd("CID=".$contestID."\nTID=".$ticketID."\nID=".sha256($identityID));
        if (!empty($contestID) && !empty($ticketID) && !empty($identityID)){
            return view('query/show')->with('ContestName', $contestName[$contestID])->with('UserName', $identityID);
        }
        return view('query/home')->with('error', 'No Data');
    }
}
