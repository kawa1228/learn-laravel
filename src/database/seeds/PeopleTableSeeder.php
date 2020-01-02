<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // 追記

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => 12,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@flowor.jp',
            'age' => 34,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'sachiko',
            'mail' => 'sachiko@happy.jp',
            'age' => 56,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'jiro',
            'mail' => 'jiro@change',
            'age' => 78,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'mami',
            'mail' => 'mami@mumemo.jp',
            'age' => 34,
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'ichiro',
            'mail' => 'ichiro@baseball.jp',
            'age' => 25,
        ];
        DB::table('people')->insert($param);
    }
}
