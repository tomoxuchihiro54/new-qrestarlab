<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionDetail extends Model
{
  protected $fillable = [
    'question_id', 'text',
  ];

  // questionsテーブルとリレーション(逆)
  public function question() {
    return $this->belongsTo('App\Question');
  }
}
