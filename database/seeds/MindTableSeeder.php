<?php

use Illuminate\Database\Seeder;

class MindTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
        DB::table('minds')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $Mind = [
                ['UserId' => 8,
                'type' => 'N'],
                ['UserId' => 2,
                'type' => 'L'],
                ['UserId' => 6,
                'type' => 'ASAP']
                ];

        // 登録
        foreach($Mind as $mind) {
        \App\Mind::create($mind);
        }
    }
}
