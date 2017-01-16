<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
  protected $fillable = [
    'user_id', 'category_id', 'question_name', 'description', 'open_flag', 'type_flag', 'img_id',
  ];

  // categoriesテーブルとリレーション(逆)
  public function category() {
    return $this->belongsTo('App\Category');
  }

  // questionsテーブルとリレーション
  public function questions() {
    return $this->hasMany('App\Question');
  }

}
