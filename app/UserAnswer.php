<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
  protected $fillable = [
    'study_id', 'times', 'chapter', 'is_active',
  ];

  // user_studiesテーブルとリレーション（逆）
  public function userStudy() {
    return $this->belongsTo('App\UserStudy');
  }


}
