<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class T_Work_TimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'staff_id' => '1004',
            'action_time' => '2023-09-05 09:12:11',
            'action_type' => '1',
            'action_status' => '1',
            'deleted_flg' => '0'
          ];
          DB::table('t_work_time')->insert($param);
          $param = [
            'staff_id' => '1005',
            'action_time' => '2023-09-05 09:11:09',
            'action_type' => '1',
            'action_status' => '1',
            'deleted_flg' => '0'
          ];
          DB::table('t_work_time')->insert($param);
          $param = [
            'staff_id' => '1006',
            'action_time' => '2023-09-05 19:12:11',
            'action_type' => '2',
            'action_status' => '1',
            'deleted_flg' => '0'
          ];
          DB::table('t_work_time')->insert($param);
          $param = [
            'staff_id' => '1002',
            'action_time' => '2023-09-05 18:12:11',
            'action_type' => '2',
            'action_status' => '1',
            'deleted_flg' => '0'
          ];
          DB::table('t_work_time')->insert($param);
    }
}
