<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
}
}
