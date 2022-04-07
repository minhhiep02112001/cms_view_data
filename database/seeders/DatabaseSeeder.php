<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'name' => 'Danh mục 1',
                'slug' => 'danh-muc-1',
                'description' => ''
            ],
            [
                'name'=>'Danh mục 2',
                'slug' => 'danh-muc-2',
                'description' => ''
            ],
            [
                'name'=>'Danh mục 3',
                'slug' => 'danh-muc-3',
                'description' => ''
            ],
            [
                'name'=>'Danh mục 4',
                'slug' => 'danh-muc-4',
                'description' => ''
            ]
        ];
        DB::table('category')->insert($data);
        DB::table('authors')->insert([
           [
               'authors_name' => 'Chu minh hiệp',
               'year_of_birth' =>'2001',
               'url' => 'chu-minh-hiep',
               'information' => 'sáng tạo, chăm chỉ, ít nói',
               'image' => 'https://i.pravatar.cc/'.rand(100,300)
           ],
            [
                'authors_name' => 'Ngoc Mai',
                'year_of_birth' =>'1998',
                'url' => 'ngoc-mai',
                'information' => 'sáng tạo, chăm chỉ, ít nói',
                'image' => 'https://i.pravatar.cc/'.rand(100,300)
            ],[
                'authors_name' => 'Ngô Long',
                'year_of_birth' =>'2000',
                'url' => 'ngo-long',
                'information' => 'sáng tạo, chăm chỉ, ít nói',
                'image' => 'https://i.pravatar.cc/'.rand(100,300)
            ]
        ]);
        \App\Models\Post::factory()->count(100)->create();
    }
}
