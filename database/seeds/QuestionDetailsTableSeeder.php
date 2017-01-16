<?php

use Illuminate\Database\Seeder;
use App\QuestionDetail;

class QuestionDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $details = [
        [
          'question_id'=>1,
          'text'=>'ア．企業者は，雇用の自由を有するから，労働者の思想，信条を理由として雇入れを拒んでも当然に違法ということはできないが，労働者の採否決定に当たり，その思想，信条を調査し，労働者に関連事項の申告を求めることまでは許されない。',
        ],
        [
          'question_id'=>1,
          'text'=>'イ．大学は，その設置目的を達成するため，必要な事項を定めて学生を規律する権能を有するから，私立大学が，その伝統，校風や教育方針に鑑み，学内外における学生の政治的活動につき，かなり広範な規律を及ぼしても，直ちに不合理ということはできない。',
        ],
        [
          'question_id'=>1,
          'text'=>'ウ．長期間にわたり形成された地方の慣習に根ざした権利である入会権については，その慣習が存続しているときは最大限尊重すべきであるから，権利者の資格を原則として男子孫に限る旨の特定の地域団体における慣習も，直ちに公序良俗に反するとはいえない。',
        ],

        [
          'question_id'=>2,
          'text'=>'ア．前科は人の名誉，信用に直接関わる事項であり，前科のある者もこれをみだりに公開されないという法的保護に値する利益を有するが，「裁判所に提出するため」との申出理由の記載があれば，市区町村長が弁護士法に基づく照会に応じて前科を報告することは許される。',
        ],
        [
          'question_id'=>2,
          'text'=>'イ．大学が講演会を主催する際に集めた参加学生の学籍番号，氏名，住所及び電話番号は，個人の内心に関する情報ではなく，大学が個人識別を行うための単純な情報であって，秘匿の必要性が高くはないから，プライバシーに係る情報として法的保護の対象にならない。',
        ],
        [
          'question_id'=>2,
          'text'=>'ウ．個人の私生活上の自由の一つとして，何人もその承諾なしにみだりにその容ぼう・姿態を撮影されない自由を有するが，速度違反車両の自動撮影を行う自動速度監視装置による写真撮影は，犯罪捜査の必要性・相当性があるから，本人の同意や裁判官の令状がなくても許される。',
        ],

        [
          'question_id'=>3,
          'text'=>'ア．憲法は，外国人を日本国民と全く平等に扱うことまでは要求していないが，我が国に入国する全ての外国人に対し，法律により，日本国民と異なる規制を設けることは，人種的な差別をする趣旨ではなくても，憲法第１４条第１項後段の「人種」による差別として許されない。',
        ],
        [
          'question_id'=>3,
          'text'=>'イ．選挙権の平等には各選挙人の投票価値の平等も含まれるが，国会によって定められた選挙制度における投票価値が不平等であっても，その不平等が国会の有する裁量権の行使として合理的と認められるのであれば，憲法第１４条に違反しない。',
        ],
        [
          'question_id'=>3,
          'text'=>'ウ．条例においては，一定の取締規定を設け，法律による委任の範囲で，その違反に対する罰則を規定することが許されるが，禁錮又は懲役の刑は，全国一律に規律すべきものと解されるので，それぞれの条例の間で法定刑が異なる場合は，憲法第１４条に違反する。',
        ],

        [
          'question_id'=>4,
          'text'=>'ア．卒業式等の式典における国歌斉唱の際の起立斉唱行為は，一般的，客観的に見て，これらの式典における慣例上の儀礼的な所作としての性質を有するものであり，校長の職務命令は，「日の丸」や「君が代」に関する当該教諭の歴史観ないし世界観それ自体を否定するものということはできない。',
        ],
        [
          'question_id'=>4,
          'text'=>'イ．国旗に向かって起立し国歌を斉唱する行為は，一般的，客観的に見て，特定の思想の表明として外部から認識されるものと評価すべきであり，卒業式等の式典における国歌斉唱の際の起立斉唱行為が職務命令に従って行われたものと外部から認識することも困難であって，校長の職務命令は，特定の思想の有無について告白することを強要する面がある。',
        ],
        [
          'question_id'=>4,
          'text'=>'ウ．卒業式等の式典における国歌斉唱の際の起立斉唱行為は，一般的，客観的に見て，国旗及び国歌に対する敬意の表明の要素を含む行為であり，歴史観ないし世界観との関係で「日の丸」や「君が代」に敬意を表明することには応じ難いと考える者が上記行為を求められることは，思想及び良心の自由についての間接的な制約となる面があることは否定し難い。',
        ],

        [
          'question_id'=>5,
          'text'=>'ア．神社において死者の合祀を行うことが遺族である配偶者の心の静謐を害する場合，その遺族は，静謐な宗教的環境の下で信仰生活を送るべき利益である宗教的人格権を侵害されたと主張して，損害賠償を請求できる。',
        ],
        [
          'question_id'=>5,
          'text'=>'イ．僧侶が病者の平癒を祈願して加持祈祷を行うに当たり，病者の手足を縛って線香の火に当てるなどして同人を死亡させることは，医療上一般に承認された治療行為とは到底認められず，信教の自由の保障の限界を逸脱したものであって許されない。',
        ],
        [
          'question_id'=>5,
          'text'=>'ウ．宗教法人法の解散命令によって宗教法人を解散しても，信者は，法人格を有しない宗教団体を存続させたり宗教上の行為を行ったりすることができるので，宗教上の行為を継続するに当たり何ら支障はない。',
        ],

      ];

      foreach ($details as $detail) {
        $detail_i = new QuestionDetail();
        $detail_i->question_id = $detail['question_id'];
        $detail_i->text = $detail['text'];
        $detail_i->save();
      }
    }
}