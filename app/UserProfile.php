<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
  protected $fillable = [
    'user_id',
    'name',
    'gender',
    'marriage',
    'occupation',
    'birthday',
    'introduction',
    'photo_id',
  ];

  // usersテーブルとリレーション(逆)
  public function user() {
    return $this->belongsTo('App\User');
  }
}
