<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Question;
use App\Category;
use App\Answer;

use Carbon\Carbon;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::where('created_at', '<=', Carbon::now())
                      ->orderBy('created_at', 'desc')
                      ->paginate(config('web.posts_per_page'));
        // $mod_types = new Type();
        $categories = Category::where('pid', '=', 0)->get();
        // $types = Type::all();
        // dd($types);
        // echo config("web.theme").'index';

        return view(config("web.theme").'index', ['questions' =>  $questions,
                                                  'categories'     =>  $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
      // $question = Question::where('id', '=', $request->id);
      $question = Question::find($request->id);
      $answers  = Answer::where('qid', '=', $question->id)->get();
      // $question = Question::all();
      // dd($answers->hasOneUser());
      return view(config('web.theme').'show', ['question' =>  $question, 'answers'  =>  $answers]);
      // var_dump($question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
