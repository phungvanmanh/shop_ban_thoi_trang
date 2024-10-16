<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->delete();

        DB::table('admins')->truncate();

        DB::table('admins')->insert([
            [
                'email'             =>  'thanhchemgio5558@gmail.com',
                'password'          =>  bcrypt('123456'),
                'ho_va_ten'         =>  'Hoàng Văn Dũng',
                'ngay_sinh'         =>  '1999-04-01',
                'so_dien_thoai'     =>  '0833194777',
                'id_quyen'          =>   1,
                'is_master'          =>  1,
            ],
            [
                'email'             =>  'khanhphamj415@gmail.com',
                'password'          =>  bcrypt('123456'),
                'ho_va_ten'         =>  'Phạm Quang Khánh',
                'ngay_sinh'         =>  '1997-04-01',
                'so_dien_thoai'     =>  '0906666666',
                'id_quyen'          =>   1,
                'is_master'          =>  0,
            ],
            [
                'email'             =>  'detu2809@gmail.com',
                'password'          =>  bcrypt('123456'),
                'ho_va_ten'         =>  'Hoàng Văn Dũng',
                'ngay_sinh'         =>  '2003-11-29',
                'so_dien_thoai'     =>  '0387161032',
                'id_quyen'          =>   1,
                'is_master'          =>  0,
            ],
        ]);
    }
}
