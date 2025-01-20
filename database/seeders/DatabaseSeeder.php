<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\Semester;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@noteshare.com',
            'password' => 'asdfasdf',
            'role' => 'admin',
        ]);

        $program = [
            ['name' => 'Bachelor of Engineering in Information Technology', 'short' => 'BEIT'],
            ['name' => 'Bachelor of Computer Engineering', 'short' => 'BCE'],
            ['name' => 'Bachelor of Civil Engineering', 'short' => 'BCV'],
        ];
        foreach ($program as $item) {
            Program::create([
                'name' => $item['name'],
                'short' => $item['short'],
            ]);
        }

        $semester = ['First', 'Second', 'Third', 'Fourth', 'Fifth', 'Sixth', 'Seventh', 'Eighth'];
        foreach (range(1, 8) as $i) {
            foreach ($semester as $item) {
                Semester::create([
                    'name' => $item . ' Semester',
                    'program_id' => $i,
                ]);
            }
        }
    }
}
