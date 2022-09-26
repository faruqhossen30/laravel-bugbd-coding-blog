<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ['Web Development', 'Android', 'IOS'];

        foreach($data as $item){
            Category::create([
                'name'=> $item,
                'slug'=> Str::slug($item, '-'),
                'user_id'=> 1
            ]);
        }
    }
}
