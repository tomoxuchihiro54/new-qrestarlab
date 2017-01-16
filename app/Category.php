<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
  use NodeTrait;

  /**
     * モデルに関連付けるデータベースのテーブルを指定
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * createメソッド実行時に、入力を許可するカラムの指定
     *
     * @var array
     */
    protected $fillable = array('name');

    // managementsテーブルとリレーション
    public function managements() {
      return $this->hasMany('App\Management');
    }

}
