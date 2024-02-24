<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreTestRequest;
use App\Models\Test;
use App\Models\Question;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function storeTest(Request $request)
    {
        $data = $request->validate([
            'Test' => ['required'],
            'Description' => ['required'],
            'TotalMarks' => ['required']
        ]);

        $test = Test::create([
            'TestType' => $data['Test'],
            'Description' => $data['Description'],
            'TotalMarks' => $data['TotalMarks']
        ]);

        // dd($test);
        // return response(new CommentResource($comment), status: 201);
        return back();
    }


    public function storeQuestion(Request $request)
    {
        $data = $request->validate([
            'test_id' => ['required'],
            'Question' => ['required'],
            'Answer' => ['required'],
            'level' => ['required']
        ]);

        $test = Question::create([
            'test_id' => $data['test_id'],
            'QuestionText' => $data['Question'],
            'CorrectAnswer' => $data['Answer'],
            'Level' => $data['level']
        ]);

        // dd($test);
        // return response(new CommentResource($comment), status: 201);
        return back();

    }
}
