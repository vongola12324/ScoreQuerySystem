<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class ScoreController extends Controller
{


    public function getIndex(Request $request)
    {
        $contest_id = $request->all()->ContestID;
        $score = Score::all()->where('ContestID', "=", $contest_id);
        return view('score/list')->with('Scores', $score);
    }

    public function getCreate()
    {
        return view('score/create');
    }

    public function postCreate(Request $request)
    {
        $score = $request->all();
        $file = $request->File;
        if(empty($file) || $file == null){
            $contestID = $score->ContestID;
            $userID = $score->UserID;
            $scoredata = json_encode($score->ScoreData);
            $score = Score::create(array(
                'contests_id' => $contestID,
                'users_id' => $userID,
                'scoredata' => $scoredata,
            ));
        }
        else{
            $result = null;
            $firstRow = null;
            Excel::load($file, function($reader){
                $firstRow = $reader->first();
                $result = $reader->toArray();
            });


        }
        return Redirect::route('score.list');
    }

    public function getUpdate()
    {

    }

    public function postUpdate(Request $request)
    {

    }

    public function getDelete()
    {

    }

    public function postDelete(Request $request)
    {

    }

    public function getQuery(){

    }

    public function postQuery()
    {

    }

}
