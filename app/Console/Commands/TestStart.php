<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Category;

class TestStart extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * App\Category
     *
     * @var string
     */
    protected $Category;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->Category = new Category();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
      $node = Category::create([

        'name' => '司法試験',

        'children' => [
          [
            'name' => '過去問',
            'children' => [
              [
                'name' => '2016年',

                'children' => [
                  ['name' => '憲法'],
                  ['name' => '民法'],
                  ['name' => '刑法'],
                ],
              ],
              [
                'name' => '2015年',

                'children' => [
                  ['name' => '憲法'],
                  ['name' => '民法'],
                  ['name' => '刑法'],
                ],
              ],
              [
                'name' => '2014年',

                'children' => [
                  ['name' => '憲法'],
                  ['name' => '民法'],
                  ['name' => '刑法'],
                ],
              ],
              [
                'name' => '2013年',

                'children' => [
                  ['name' => '憲法'],
                  ['name' => '民法'],
                  ['name' => '刑法'],
                ],
              ],
              [
                'name' => '2012年',

                'children' => [
                  ['name' => '憲法'],
                  ['name' => '民法'],
                  ['name' => '刑法'],
                ],
              ],
            ],
          ],

          [
            'name' => 'オリジナル',
          ],

        ],
      ]);
    }
}
