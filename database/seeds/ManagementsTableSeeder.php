<?php

use Illuminate\Database\Seeder;

class ManagementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user_id = 'aaTuubWKyT5870a0cdc2e93';
      $management = new App\Management;
      $management->user_id = $user_id;
      $management->category_id = 4;
      $management->question_name = '憲法';
      $management->description = '2016年度司法試験短答式問題の憲法';
      $management->open_flag = 1;
      $management->type_flag = 1;
      $management->save();
    }
}
