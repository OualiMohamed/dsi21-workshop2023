<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Student;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StudentsSeeder::class
        ]);

        // Student::create([
        //     'ncin' => '12234567',
        //     'name' => 'Sahli Amani',
        //     'email' => 'sahli@amani@gmail.com',
        //     'phone' => '57667668',
        //     'address' => 'Adresse de Amani',
        // ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
