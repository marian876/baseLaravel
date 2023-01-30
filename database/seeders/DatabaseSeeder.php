<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        Category::factory(4)->create();
    }
}
