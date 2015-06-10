<?php namespace App\Http\Controllers;

use App\Contest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContestController extends Controller {

    public function getIndex()
    {
        $contests = Contest::all();
        return view('admin/contest/list')->with('Contests', $contests);
    }

    public function getCreate()
    {
        return view('admin/contest/create');
    }

    public function postCreate(Request $request)
    {
        $contest = $request->all();
        $Name = $contest->Name;
        $Info = $contest->Info;
        $Subject = json_encode($contest->Subject);
        $contest = Contest::create(array(
            'Name' => $Name,
            'Info' => $Info,
            'Subject' => $Subject,
        ));
        return Redirect::route('contest.list');
    }

    public function getUpdate()
    {
        $id = Request::input('id');
        $contest = Contest::find($id);
        return view('admin/contest/update')->with('Contest', $contest);
    }

    public function postUpdate(Request $request)
    {
        $contest = $request->all();
        $id = $contest->id;
        $Name = $contest->Name;
        $Info = $contest->Info;
        $Subject = json_encode($contest->Subject);

        $contest = Contest::find($id);
        $contest->Name = $Name;
        $contest->Info = $Info;
        $contest->Subject = $Subject;
        $contest->save();

        return Redirect::route('contest.list');
    }

    public function getDelete()
    {
        return view('admin/contest/delete');
    }

    public function postDelete(Request $request)
    {
        return Redirect::route('contest.list');
    }

    public function getQuery()
    {
        return view('admin/contest/query');
    }

    public function postQuery(Request $request)
    {
        $Data = null;
        return Redirect::route('contest.query')->with('Data', $Data);
    }



}
