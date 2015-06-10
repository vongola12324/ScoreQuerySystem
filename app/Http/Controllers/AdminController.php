<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
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
        $user = Auth::user();
        if($user){
            return Redirect::route('contest.list');
        }
        else{
            return Redirect::route('admin.login');
        }
	}

    // 登入
    public function getLogin()
    {
        $error = Request::input('error');
        return view('admin.login')->with('error', $error);
    }

    public function postLogin(Request $request)
    {
        return view('admin.login')->with('error', '系統維護中......');

        $validator = Validator::make($request->all(), [
            'Username' => 'required',
            'Password' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::route('admin.login')->with('errors', '不要黑網站>w<');
        }
        else{
            $auth = Auth::attempt([
                'uid' => $request->get('Username'),
                'pwd' => $request->get('Password'),
            ], false);
            if ($auth){
                $user = Auth::user();
                // 更新資料
                $user->lastlogin_ip = $request->getClientIp();
                $user->lastlogin_at = Carbon::now()->toDateTimeString();
                $user->save();
                return Redirect::route('contest.list');
            }
            else{
                return Redirect::route('admin.login')->with('error', '帳號或密碼錯誤');
            }
        }

    }

    // 登出
    public function postLogout()
    {
        Auth::logout();
        return Redirect::route('admin.login');
    }

    public function postLeave()
    {
        Auth::logout();
        return Redirect::route('query.home');
    }
}
