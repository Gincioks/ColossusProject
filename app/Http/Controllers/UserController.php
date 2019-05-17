<?php

namespace App\Http\Controllers;

use App\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
        $user = Auth::user();

        $csgo = DB::table('games')->where('user_id', $user->id)->where('game', 'CSGO')->first();
        $cs16 = DB::table('games')->where('user_id', $user->id)->where('game', 'CS16')->first();
        $mc = DB::table('games')->where('user_id', $user->id)->where('game', 'Mc')->first();
        $samp = DB::table('games')->where('user_id', $user->id)->where('game', 'Samp')->first();
        $rust = DB::table('games')->where('user_id', $user->id)->where('game', 'Rust')->first();
        $gm = DB::table('games')->where('user_id', $user->id)->where('game', 'GM')->first();


        $games = ["csgo" => $csgo,"cs16"=>$cs16, "mc" => $mc, "samp"=>$samp, "rust" => $rust, "gm" => $gm];

        return view('profile',compact('user',$user))->with('games', $games);
    }

    public function update(Request $request)
    {

        /**
         * fetching the user model
         */
        $user = Auth::user();


        /**
         * Validate request/input
         **/

        /**
         * storing the input fields name & email in variable $input
         * type array
         **/
        $input = $request->only('full_name','phone_number', 'sex', 'birthday');



        /**
         * Accessing the update method and passing in $input array of data
         **/
        $user->update($input);

        /**
         * after everything is done return them pack to /profile/ uri
         **/
        return back();
    }

    public function update_avatar(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
        $request->avatar->storeAs('avatars',$avatarName);

        $user->avatar = $avatarName;

        $user->save();

        return back()
            ->with('success','You have successfully upload image.');

    }
}
