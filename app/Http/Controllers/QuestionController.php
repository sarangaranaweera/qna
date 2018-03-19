<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Question;
use Auth;

class QuestionController extends Controller
{
    public function getCreate()
    {
    	return View::make('question.edit');
    }

    public function postCreate(Request $request)
    {

    	$question = Question::forceCreate([
    		'title' => $request->get('title'),
    		'question' => $request->get('question'),
    		'user_id' => Auth::user()->id,
    	]);

    	dd($question);
    	//return View::make('question');
    }

    public function getMyQuestions()
    {

    }
}
