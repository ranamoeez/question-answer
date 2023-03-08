<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class HomeController extends Controller
{
    public function save_data(Request $request)
    {
    	$req = $request->all();
    	$dataArr = [];
    	for ($i=0; $i < 50; $i++) { 
    		if (!empty($req['question_'.$i])) {
		    	$dataArr['question'] = $req['question_'.$i];
		    	$answer = '';
    			for ($j=0; $j < 50; $j++) {
    				if (!empty($req['answer_'.$i.'_'.$j])) {
    					$index = $j + 1;
		    			$answer .= $req['answer_'.$i.'_'.$j].',';
		    		}
	    		}
	    		$dataArr['answer'] = substr($answer, 0, -1);
	    		$data[] = $dataArr;
    		}
    	}

    	$quiz = new Quiz;
    	$quiz->title = $req['name'];
    	$quiz->description = $req['description'];
    	$quiz->questions = json_encode($data);
    	$quiz->save();

    	return true;
    }

    public function show_data(Request $request)
    {
    	$data = [];
    	$data['list'] = Quiz::all();
    	return view('details', $data);
    }

    public function get_data(Request $request)
    {
    	$data = Quiz::all();
    	return json_encode(["flag"=>true, "data"=>$data]);
    }

    public function save_form(Request $request)
    {
    	$req = $request->all();

    	$quiz = new Quiz;
    	$quiz->title = $req['name'];
    	$quiz->description = $req['description'];
    	$quiz->questions = $req['questions'];
    	$quiz->save();

    	return json_encode(["flag"=>true, "msg"=>'Successfully Saved!']);
    }
}
