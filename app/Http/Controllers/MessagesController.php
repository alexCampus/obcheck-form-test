<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Messages;
use App\User;

class MessagesController extends Controller
{

	public function __construct()
	{
 	   $this->middleware('auth');
	}
	
    public function index() 
	{
		$messages = Messages::all();
    	return view('user.user_messaging', ['messages' => $messages]);
    }

    public function show($pseudo)
    {
    	$pseudo = Auth::user()->pseudo;
        return view('user.user_profil', ['classActive' => 'active']);
    }

    public function profil($pseudo){
        $pseudo = Auth::user()->pseudo;
        return view('user.info_user', ['']);
    }

    public function update(Request $request, $id){

        $user = User::find($id);
    
        if($request->has('myPicture')){
            $user->photo = $request->input('myPicture');
        }

        if($request->has('pseudo')){
            $user->pseudo = $request->input('pseudo');
        }

        if($request->has('nom')){
            $user->lastname = $request->input('nom');
        }
        
        if($request->has('prenom')){
            $user->firstname = $request->input('prenom');
        }
        
        if($request->has('email')){
            $user->email = $request->input('email');
        }
        
        if($request->has('birthdate')){
            $user->birthdate = Carbon::parse()->format('Y-m-d');
        }
        
        if($request->has('city')){
            $user->city = $request->input('city');
        }

        if($request->has('phone')){
            $user->phonenumber = $request->input('phone');
        }

        if($request->has('presentation')){
            $user->description = $request->input('presentation');
        }       
        
        
        $user->save();

        
        return redirect('/profil/' . $user->pseudo);
    } 
}
