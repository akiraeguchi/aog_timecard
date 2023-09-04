<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class M_StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $param = [
            'staff_id' => '1004',
            'email' => 'masha.cahci@outlook.jp',
            'password' => 'akira0908',
            'first_name' => '瑛',
            'last_name' => '江口',
            'first_name_kana' => 'あきら',
            'last_name_kana' => 'えぐち',
            'staff_type' => '1',
            'deleted_flg' => '0'
        ];
        DB::table('m_staff')->insert($param);
        $param = [
            'staff_id' => '1005',
            'email' => 'oneok.enjoymylife@gmail.com',
            'password' => 'akira0908',
            'first_name' => '汐里',
            'last_name' => '中田',
            'staff_type' => '3',
            'deleted_flg' => '0'
        ];
        DB::table('m_staff')->insert($param);
        $param = [
            'staff_id' => '1006',
            'email' => 'oneok.enjoymylife@gmail.com',
            'password' => 'akira0908',
            'first_name' => '共通',
            'last_name' => 'アカウント1',
            'staff_type' => '2',
            'deleted_flg' => '0'
        ];
        DB::table('m_staff')->insert($param);
        $param = [
            'staff_id' => '1007',
            'email' => 'oneok.enjoymylife@gmail.com',
            'password' => 'akira0908',
            'first_name' => '従業員',
            'last_name' => 'テスト1',
            'staff_type' => '3',
            'deleted_flg' => '1'
        ];
        DB::table('m_staff')->insert($param);
        $param = [
            'staff_id' => '1008',
            'email' => 'oneok.enjoymylife@gmail.com',
            'password' => 'akira0908',
            'first_name' => '従業員',
            'last_name' => 'テスト2',
            'staff_type' => '3',
            'deleted_flg' => '0'
        ];
        DB::table('m_staff')->insert($param);
    }
}
