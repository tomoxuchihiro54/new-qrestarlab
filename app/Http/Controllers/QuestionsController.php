<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Question;
use App\QuestionDetail;
use App\QuestionChoice;
use App\UserAnswer;
use App\UserAnswerDetail;
use App\UserTotalPoint;
use DB;

class QuestionsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id=1)
    {
      try {

        if ($id = 1) {
          // ログインユーザーを指定してuser_answersテーブルの情報取得
          $recode = UserAnswer::where('user_id', \Auth::user()->id)->first();
          // user_answersテーブルにデータをインサート
          $user_ans = new UserAnswer();
          $user_ans->user_id = \Auth::user()->id;
          if (!$recode) {
            $user_ans->num_times = 1;
          } else {
            $user_ans->num_times = $recode->max('num_times') + 1;
          }
          $user_ans->save();
        }
      } catch (Exception $ex) {
        Session::flash('flash_message', 'データベースエラー');
      }
      // questionテーブルの最初のレコードを取得
      $question = Question::findOrFail($id);
      return view('questions.question')
        ->with('question', $question);
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
    public function show($id)
    {
        //
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
