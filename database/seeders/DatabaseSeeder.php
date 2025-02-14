<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Database\Factories\EmployeeFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        Employee::factory()->count(10)->create();
    }
}
