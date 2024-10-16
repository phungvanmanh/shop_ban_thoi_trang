<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigSeeder extends Seeder
{
    public function run()
    {
        DB::table('configs')->delete();

        DB::table('configs')->truncate();

        DB::table('configs')->insert([
            [
                'list_image'    =>  'https://spreethemesprevious.github.io/bisum/html/assets/img/slideshow/s1.jpg,https://spreethemesprevious.github.io/bisum/html/assets/img/slideshow/s2.jpg,https://spreethemesprevious.github.io/bisum/html/assets/img/slideshow/s3.jpg',
                'list_title'    =>  'Sản phẩm bán chạy',
                'list_des'      =>  '',
                'list_link'     =>  '/san-pham/ao-dai|https://google.com|/admin/login',
            ]
        ]);
    }
}
