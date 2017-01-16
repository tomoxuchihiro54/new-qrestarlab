<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(QuestionsTableSeeder::class);
      $this->call(ManagementsTableSeeder::class);
      $this->call(QuestionChoicesTableSeeder::class);
      $this->call(QuestionDetailsTableSeeder::class);
    }
}
