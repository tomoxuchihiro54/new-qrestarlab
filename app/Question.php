<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

  protected $fillable = [
    'management_id', 'question_num', 'title', 'point', 'question_type',
  ];

  // Managementモデルとリレーション(逆)
  public function management() {
    return $this->belongsTo('App\Management');
  }

  // QuetsionChoiceモデルとリレーション
  public function questionChoices() {
    return $this->hasMany('App\QuestionChoice');
  }

  // QuestionDetailモデルとリレーション
  public function questionDetails() {
    return $this->hasMany('App\QuestionDetail');
  }

}
