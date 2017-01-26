<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Friends;


class FriendsController extends Controller
{


	public function __construct()
	{
 	   $this->middleware('auth');
	}

	
    public function index() 
	{
		$friends1 = Friends::where('user_id_1','=','3')->get();
		$friends2 = Friends::where('user_id_2','=','3')->get();

		return view('user.friend.user_friends',['friends1'=> $friends1, 'friends2' => $friends2]);
    }
}
