<?php

use Illuminate\Database\Seeder;
use App\QuestionChoice;

class QuestionChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     // flagが0なら誤り
     // flagが1なら正しい
    public function run()
    {
      $choices = [
        [ 'question_id'=>1, 'sort'=>0, 'text'=>NULL, 'correct_flag'=>212, ],

        [ 'question_id'=>2, 'sort'=>1, 'text'=>'１．ア○ イ○ ウ○', 'correct_flag'=>2, ],
        [ 'question_id'=>2, 'sort'=>2, 'text'=>'２．ア○ イ○ ウ×', 'correct_flag'=>2, ],
        [ 'question_id'=>2, 'sort'=>3, 'text'=>'３．ア○ イ× ウ○', 'correct_flag'=>2, ],
        [ 'question_id'=>2, 'sort'=>4, 'text'=>'４．ア○ イ× ウ×', 'correct_flag'=>2, ],
        [ 'question_id'=>2, 'sort'=>5, 'text'=>'５．ア× イ○ ウ○', 'correct_flag'=>2, ],
        [ 'question_id'=>2, 'sort'=>6, 'text'=>'６．ア× イ○ ウ×', 'correct_flag'=>2, ],
        [ 'question_id'=>2, 'sort'=>7, 'text'=>'７．ア× イ× ウ○', 'correct_flag'=>1, ],
        [ 'question_id'=>2, 'sort'=>8, 'text'=>'８．ア× イ× ウ×', 'correct_flag'=>2, ],

        [ 'question_id'=>3, 'sort'=>1, 'text'=>'１．ア○ イ○ ウ○', 'correct_flag'=>2, ],
        [ 'question_id'=>3, 'sort'=>2, 'text'=>'２．ア○ イ○ ウ×', 'correct_flag'=>2, ],
        [ 'question_id'=>3, 'sort'=>3, 'text'=>'３．ア○ イ× ウ○', 'correct_flag'=>2, ],
        [ 'question_id'=>3, 'sort'=>4, 'text'=>'４．ア○ イ× ウ×', 'correct_flag'=>2, ],
        [ 'question_id'=>3, 'sort'=>5, 'text'=>'５．ア× イ○ ウ○', 'correct_flag'=>2, ],
        [ 'question_id'=>3, 'sort'=>6, 'text'=>'６．ア× イ○ ウ×', 'correct_flag'=>1, ],
        [ 'question_id'=>3, 'sort'=>7, 'text'=>'７．ア× イ× ウ○', 'correct_flag'=>2, ],
        [ 'question_id'=>3, 'sort'=>8, 'text'=>'８．ア× イ× ウ×', 'correct_flag'=>2, ],

        [ 'question_id'=>4, 'sort'=>0, 'text'=>NULL, 'correct_flag'=>121, ],

        [ 'question_id'=>5, 'sort'=>0, 'text'=>NULL, 'correct_flag'=>212, ],

      ];

      foreach ($choices as $choice) {
        $choice_i = new QuestionChoice();
        $choice_i->question_id = $choice['question_id'];
        $choice_i->sort = $choice['sort'];
        $choice_i->text = $choice['text'];
        $choice_i->correct_flag = $choice['correct_flag'];
        $choice_i->save();
      }


    }
}
