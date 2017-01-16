<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = new App\Question;
        $question->management_id = 1;
        $question->question_num = 1;
        $question->title = '私人間における人権保障に関する次のアからウまでの各記述について，判例の趣旨に照らして，それぞれ正しい場合には１を，誤っている場合には２を選びなさい｡';
        $question->point = 3;
        $question->save();

        $question = new App\Question;
        $question->management_id = 1;
        $question->question_num = 2;
        $question->title = '憲法の明文で規定されていない権利・自由に関する次のアからウまでの各記述について，判例の趣旨に照らして，正しいものには○，誤っているものには×を付した場合の組合せを，後記１から８までの中から選びなさい｡';
        $question->point = 2;
        $question->question_type = 1;
        $question->save();

        $question = new App\Question;
        $question->management_id = 1;
        $question->question_num = 3;
        $question->title = '法の下の平等に関する次のアからウまでの各記述について，判例の趣旨に照らして，正しいものには○，誤っているものには×を付した場合の組合せを，後記１から８までの中から選びなさい｡';
        $question->point = 2;
        $question->question_type = 1;
        $question->save();

        $question = new App\Question;
        $question->management_id = 1;
        $question->question_num = 4;
        $question->title = '都立高等学校の校長が教諭に対し，卒業式における国歌斉唱の際に国旗に向かって起立し国歌を斉唱することを命じた職務命令が，憲法第１９条に違反するか否かについて判示した最高裁判所の判決（最高裁判所平成２３年５月３０日第二小法廷判決，民集６５巻４号１７８０頁）に関する次のアからウまでの各記述について，それぞれ正しい場合には１を，誤っている場合には２を選びなさい｡';
        $question->point = 3;
        $question->save();

        $question = new App\Question;
        $question->management_id = 1;
        $question->question_num = 5;
        $question->title = '信教の自由に関する次のアからウまでの各記述について，判例の趣旨に照らして，それぞれ正しい場合には１を，誤っている場合には２を選びなさい｡';
        $question->point = 3;
        $question->save();
    }
}
