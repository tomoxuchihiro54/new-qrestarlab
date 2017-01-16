<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswerDetail extends Model
{
  protected $fillable = [
    'user_answer_id', 'question_id', 'selected_num', 'correct_flag', 'time',
  ];

  // UserAnswerモデルとリレーション（逆）
  public function userAnswer() {
    return $this->belongsTo('App\UserAnswer');
  }

  public function question() {
    return $this->belongsTo('App\Question');
  }
}
