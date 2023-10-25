<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class product extends Seeder
{
    
    public function run()
    {
        for ($i=0; $i < 100; $i++) { 
            
       
        \DB::table('product')->insert([
        
            'name' => 'Danh Pháp Trong Chúa Tể Những Chiếc Nhẫn (Tái Bản 2020)','img'=>'uploads/1.jpg',
             'price' => 17000,'priceSale'=>20000,'nhacungcap'=>'Nhà Xuất Bản Kim Đồng','nhaxuatban'=>'NXB Kim Đồng',
            'tacgia'=>'J R R Tolkien','moTa'=>'','hot'=>1,'hidden'=>1,'idCategory'=>'17','tomTat'=>'' 

         ]);
        }
    }
}
