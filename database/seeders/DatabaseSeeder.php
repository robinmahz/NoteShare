<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\Semester;
use App\Models\Subject;
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

        $subjects = [
            ['name' => 'Calculus I', 'code' => 'MTH 110', 'semester_id' => 1],
            ['name' => 'Electronic device & Circuits', 'code' => 'CSE102', 'semester_id' => 1],
            ['name' => 'Programming in C', 'code' => 'CSE101', 'semester_id' => 1],
            ['name' => 'Basic electrical engineering', 'code' => 'CSE102', 'semester_id' => 1],
            ['name' => 'Applied physics', 'code' => 'CSE101', 'semester_id' => 1],
            ['name' => 'Problem Solving Technique', 'code' => 'CSE102', 'semester_id' => 1],
            ['name' => 'Algebra and geometry', 'code' => 'CSE103', 'semester_id' => 2],
            ['name' => 'Object oriented programming in c++', 'code' => 'CSE104', 'semester_id' => 2],
            ['name' => 'Basic Engineering drawing', 'code' => 'CSE105', 'semester_id' => 2],
            ['name' => 'Digital logic', 'code' => 'CSE106', 'semester_id' => 2],
            ['name' => 'Communication technique', 'code' => 'CSE106', 'semester_id' => 2],
            ['name' => 'Calculus II', 'code' => 'CSE106', 'semester_id' => 3],
            ['name' => 'Digital structure and algorithm', 'code' => 'CSE106', 'semester_id' => 3],
            ['name' => 'Software engineering and fundamentals', 'code' => 'CSE106', 'semester_id' => 3],
            ['name' => 'Probability and statics', 'code' => 'CSE106', 'semester_id' => 3],
            ['name' => 'Instrumentation', 'code' => 'CSE106', 'semester_id' => 3],
            ['name' => 'Advanced programming with Java', 'code' => 'CSE106', 'semester_id' => 3],
            ['name' => 'Applied Mathematics', 'code' => 'CSE106', 'semester_id' => 4],
            ['name' => 'Microprocessor and computer Architecture', 'code' => 'CSE106', 'semester_id' => 4],
            ['name' => 'SAITS', 'code' => 'CSE106', 'semester_id' => 4],
            ['name' => 'Web technology', 'code' => 'CSE106', 'semester_id' => 4],
            ['name' => 'Database Management system', 'code' => 'CSE106', 'semester_id' => 4],
            ['name' => 'Digital logic', 'code' => 'CSE106', 'semester_id' => 4],
            ['name' => 'Applied OS system', 'code' => 'CSE106', 'semester_id' => 4],
            ['name' => 'Signal system processing', 'code' => 'CSE106', 'semester_id' => 5],
            ['name' => 'Numerical method', 'code' => 'CSE106', 'semester_id' => 5],
            ['name' => 'Multimedia', 'code' => 'CSE106', 'semester_id' => 5],
            ['name' => 'Computer Graphics', 'code' => 'CSE106', 'semester_id' => 5],
            ['name' => 'EPP', 'code' => 'CSE106', 'semester_id' => 5],
            ['name' => 'IT Architecture', 'code' => 'CSE106', 'semester_id' => 5],
            ['name' => 'Research Fundamentals', 'code' => 'CSE106', 'semester_id' => 3],
            ['name' => 'Introduction to Computing', 'code' => 'CMP101', 'semester_id' => 1],
            ['name' => 'Linear Algebra', 'code' => 'CMP102', 'semester_id' => 1],
            ['name' => 'Object-Oriented Programming', 'code' => 'CMP201', 'semester_id' => 2],
            ['name' => 'Computer Architecture', 'code' => 'CMP202', 'semester_id' => 2],
            ['name' => 'Microprocessors', 'code' => 'CMP301', 'semester_id' => 3],
            ['name' => 'Computer Graphics', 'code' => 'CMP302', 'semester_id' => 3],
        ];

        foreach ($subjects as $subject) {
            Subject::create($subject);
        }
    }
}
