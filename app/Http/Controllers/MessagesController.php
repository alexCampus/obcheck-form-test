<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\User;

class MessagesController extends Controller
{
    public function index() 
	{
		$messages = Messages::all();
    	return view('user.user_messaging', ['messages' => $messages]);
    }
}
