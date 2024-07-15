<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'first_name' => '山本',
            'last_name' => '花子',
            'gender' => '2',
            'email' => 'yamamoto@email.com',
            'tel_1' => '090',
            'tel_2' => '1234',
            'tel_3' => '5678',
            'address' => '大阪府大阪市',
            'building' => '浪速マンション101',
            'detail' => 'テスト'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '田中',
            'last_name' => '一郎',
            'gender' => '1',
            'email' => 'tanaka@email.com',
            'tel_1' => '080',
            'tel_2' => '1234',
            'tel_3' => '5678',
            'address' => '兵庫県明石市',
            'building' => 'たこマンション201',
            'detail' => 'テストテスト'
        ];
        DB::table('contacts')->insert($param);
    }
}
