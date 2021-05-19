<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{

    public function run()
    {
       Employee::factory()->count(20)->create();
    }
}
