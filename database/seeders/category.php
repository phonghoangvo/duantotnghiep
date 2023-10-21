<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('category')->insert([
            ['name' => 'Văn Học','img'=>'', 'hidden' => 1,'thutu'=>1],
            ['name' => 'Kinh Tế','img'=>'', 'hidden' => 1,'thutu'=>2],
            ['name' => 'Tâm Lý - Kĩ Năng Sống','img'=>'', 'hidden' => 1,'thutu'=>3],
            ['name' => 'Nuôi Dậy Con','img'=>'', 'hidden' => 1,'thutu'=>4],
            ['name' => 'Thiếu Nhi','img'=>'', 'hidden' => 1,'thutu'=>5],
            ['name' => 'Tiểu Sử - Hồi Ký','img'=>'', 'hidden' => 1,'thutu'=>6],
            ['name' => 'Giáo Khoa - Tham Khảo','img'=>'', 'hidden' => 1,'thutu'=>7],
            ['name' => 'Sách Ngoại Ngữ','img'=>'', 'hidden' => 1,'thutu'=>8],
            ['name' => 'Sách Nước Ngoài','img'=>'', 'hidden' => 1,'thutu'=>9],
            ['name' => 'Nhu Yếu Phẩm','img'=>'', 'hidden' => 1,'thutu'=>10],
            ['name' => 'Đồ Chơi','img'=>'', 'hidden' => 1,'thutu'=>11],
         ]);
    }
}
