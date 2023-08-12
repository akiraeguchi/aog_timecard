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
            'staff_id' => '1001',
            'email' =>'masha.cahci@outlook.jp',
            'password' => 'akira0908',
            'first_name' => '瑛',
            'last_name' => '江口',
            'first_name_kana' => 'あきら',
            'last_name_kana' => 'えぐち',
            'staff_type' => '1'
        ];
        DB::table('m_staff')->insert($param);
        $param =[
            'staff_id' => '1003',
            'email' =>'oneok.enjoymylife@gmail.com',
            'password' => 'akira0908',
            'first_name' => '汐里',
            'last_name' => '中田',
            'staff_type' => '3'
        ];
        DB::table('m_staff')->insert($param);
        $param = [
            'staff_id' => '1002',
            'email' =>'oneok.enjoymylife@gmail.com',
            'password' => 'akira0908',
            'first_name' => '共通',
            'last_name' => 'アカウント',
            'staff_type' => '2'
        ];
        DB::table('m_staff')->insert($param);
    }
}
