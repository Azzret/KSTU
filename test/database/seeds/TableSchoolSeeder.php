<?php

use Illuminate\Database\Seeder;

class TableSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $school = new \App\School([
                'name' => 'Школа №'.$i,
            ]);
            $school->save();
        }
    }
}
