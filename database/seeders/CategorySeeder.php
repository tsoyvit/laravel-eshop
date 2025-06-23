<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['title' => 'Shoes', 'slug' => 'shoes', 'parent_id' => 0],
            ['title' => 'Jeans', 'slug' => 'jeans', 'parent_id' => 0],
            ['title' => 'Sportswear', 'slug' => 'sportswear', 'parent_id' => 0],
            ['title' => 'Coat', 'slug' => 'coat', 'parent_id' => 0],
            ['title' => 'Shirts', 'slug' => 'shirts', 'parent_id' => 0],
            ['title' => 'Man\'s Sportswear', 'slug' => 'mens-sportswear', 'parent_id' => 3],
            ['title' => 'Woman\'s Sportswear', 'slug' => 'womens-sportswear', 'parent_id' => 3],
            ['title' => 'Baby\'s Sportswear', 'slug' => 'babys-sportswear', 'parent_id' => 3],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate($category);
        }
    }
}
