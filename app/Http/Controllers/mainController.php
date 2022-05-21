<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;
use App\Models\Option;
use App\Models\Result;
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
        $question = Question::inRandomOrder()->first();
        $options = Option::where('question_id', $question->id)->get();

        return response()->json(['status' => 200, 'question' => $question, 'options' => $options]);
    }

    function skipStep(Request $request){
        $data = $request->all();

        $question = Question::whereNotIn('id', $data['questionAttempt'])->inRandomOrder()->first();
        $options = Option::where('question_id', $question->id)->get();

        return response()->json(['status' => 200, 'question' => $question, 'options' => $options]);
    }

    function nextStep(Request $request){
        $data = $request->all();
        $is_right = 0;
        $check = Option::where(['question_id' => $data['question'], 'id' => $data['option']])->first();

        $question = Question::whereNotIn('id', $data['questionAttempt'])->inRandomOrder()->first();
        $options = Option::where('question_id', $question->id)->get();

        if(!empty($check->is_right)){
            $is_right = 1;
        }else{
            $is_right = 0;
        }
        
        return response()->json(['status' => 200, 'is_right' => $is_right, 'question' => $question, 'options' => $options]);
    }

    function getResult(Request $request){
        $data = $request->all();

        $r = new Result;
        $r->user_id = Auth::id();
        $r->no_correct = $data['ansCorrect'];
        $r->no_wrong = $data['ansWrong'];
        $r->no_skipped = $data['ansSkip'];
        $r->save();

        Auth::logout();
        return response()->json(['status' => 200]);
    }
}
