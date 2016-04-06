<?php namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class ProfileController extends Controller {


	public function profile($user)
	{	
		$user = User::where('username', '=', $user);
		if($user->count()) {
			$user = $user->first();
			return view('front.user.profile')
			->with('user', $user);

		}
		else
		{
			return redirect('/');
		}
		
	}
	protected $table = "posts";
	public function view_post($id){

    $user = User::find($id);
    $posts = $user->posts()->get();

    return view("front.user.profilepost")->with(array("user_id" => $user, "posts" => $posts));
	}
}	