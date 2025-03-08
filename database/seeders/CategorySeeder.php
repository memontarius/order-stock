<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Enums\ProductCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(app(Category::class)->getTable())->truncate();

        foreach (ProductCategory::cases() as $category) {
            DB::table(app(Category::class)->getTable())->insert([
                'name' => $category->name
            ]);
        }
    }
}
