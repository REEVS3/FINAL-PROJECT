<?php

use Illuminate\Database\Seeder;

class Labseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labs')->insert([

            ['lab_name'=>'Checkpoint_1'],
            ['lab_name'=>'Checkpoint_2'],
            ['lab_name'=>'Checkpoint_3'],
            ['lab_name'=>'Checkpoint_4'],
            ['lab_name'=>'Checkpoint_5'],
            ['lab_name'=>'Checkpoint_6'],
            ['lab_name'=>'Checkpoint_7'],
            ['lab_name'=>'Checkpoint_8'],
            ['lab_name'=>'Checkpoint_9'],
            ['lab_name'=>'Checkpoint_10'],
            ['lab_name'=>'Checkpoint_11'],
            ['lab_name'=>'Checkpoint_12']
            ]);
    }
}
