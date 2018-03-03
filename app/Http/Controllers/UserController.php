<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use Auth;
use App\Country;

class UserController extends Controller
{
    public function index()
    {
    	$user = Auth::user();

    	return View::make('userprofile.index',[
    		'user' => $user
    	]);
    }

    public function getEdit()
    {
    	$user = Auth::user();
    	$countries = Country::all();

    	return View::make('userprofile.edit',[
    		'user' => $user,
    		'countries' => $countries
    	]);
    }

    public function postEdit(Request $request)
    {
    	$user = Auth::user();
  

    	$user->first_name = $request->get('first_name');
    	$user->last_name = $request->get('last_name');
    	$user->about_me = $request->get('about_me');
    	$user->facebook = $request->get('facebook');
    	$user->twitter = $request->get('twitter');
    	$user->linkedin = $request->get('linkedin');
    	$user->google_plus = $request->get('google_plus');
    	$user->website = $request->get('website');
    	$user->country_id = $request->get('country');

    	$user->save();

    	return redirect('/user/profile');

    }
}
