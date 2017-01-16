<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStudy extends Model
{
  protected $fillable = [
    'management_id', 'user_id',
  ]

  // managementsテーブルとリレーション（逆）
  public function management() {
    return $this->belongsTo('App\Management');
  }

  // usersテーブルとリレーション(逆)
  public function user() {
    return $this->belongsTo('App\User');
  }

  // user_answersテーブルとリレーション
  public function userAnswers() {
    return $this->hasMany('App\UserAnswer');
  }
}
