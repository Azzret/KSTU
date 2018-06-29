<?php

use Illuminate\Database\Seeder;

class SpecialtyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 6; $i++) {
            $specialty = new \App\Specialty([
                'name' => 'Специальность №'.$i,
                'faculty_id' => rand(1, 2),
            ]);
            $specialty->save();
        }
    }
}
