<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;
use App\Models\Option;
use Auth;

class mainController extends Controller
{
    function index(){

        return view('welcome');
    }

    function firstStep($name){
        $u = new User;
        $u->name = $name;
        $u->status = '1';
        $u->save();

        Auth::login($u);
        $question = Question::all()->random(1);
        $options = Option::where('question_id', $question[0]->id)->get();

        return response()->json(['status' => 200, 'question' => json_encode($question), 'options' => $options]);
    }
}
