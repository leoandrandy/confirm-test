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
            'first_name' => '丸山',
            'last_name' => '丸子',
            'gender' => '2',
            'email' => 'maru@email.com',
            'tel_1' => '090',
            'tel_2' => '1234',
            'tel_3' => '5678',  
            'address' => '京都府京都市',
            'building' => '舞子ハイツ101',
            'category' => 'TEST',
            'detail' => 'TEST'
        ];
        DB::table('contacts')->insert($param);
        $param = [
            'first_name' => '安田',
            'last_name' => '安男',
            'gender' => '1',
            'email' => 'yasu@email.com',
            'tel_1' => '080',
            'tel_2' => '1234',
            'tel_3' => '5678',
            'address' => '兵庫県尼崎市',
            'building' => '阪神マンション201',
            'category' => 'TEST',
            'detail' => 'TEST'
        ];
        DB::table('contacts')->insert($param);
    }
}
