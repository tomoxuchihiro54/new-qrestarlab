<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionChoice extends Model
{
  protected $fillable = [
    'question_id', 'sort', 'text', 'correct_flag',
  ];

  // questionsテーブルとリレーション(逆)
  public function question() {
    return $this->belongsTo('App\Question');
  }
}
