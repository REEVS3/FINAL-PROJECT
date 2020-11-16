<?php

use Illuminate\Database\Seeder;



class studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        DB::table('students')->insert([

        ['first_name'=>'Muhammed','last_name'=>'Adam','student_id'=>'1000065402','username'=>'ADAMM7'],
        ['first_name'=>'Samuel','last_name'=>'Barnes','student_id'=>'1000067926','username'=>'BARNSJ2'],
        ['first_name'=>'Smillie','last_name'=>'Chuikoff Smillie','student_id'=>'1000016570','username'=>'CHUIJA1'],
        ['first_name'=>'Bernadette','last_name'=>'Cosgrove','student_id'=>'8002590','username'=>'COSGBF1'],
        ['first_name'=>'Tyler','last_name'=>'Dungey','student_id'=>'9006472','username'=>'DUNGETJ1'],
        ['first_name'=>'Matthew','last_name'=>'Gillan','student_id'=>'1000013698','username'=>'GILLMD3'],
        ['first_name'=>'Jacob','last_name'=>'Hannigan','student_id'=>'1000062029','username'=>'HANNJJ1'],
        ['first_name'=>'Amethyst','last_name'=>'Horn','student_id'=>'1000038030','username'=>'HORNAJ2'],
        ['first_name'=>'Jack','last_name'=>'Kelliher','student_id'=>'1000075236','username'=>'KELLJJ2'],
        ['first_name'=>'Amber','last_name'=>'Little','student_id'=>'1000070501','username'=>'LITTAE2'],
        ['first_name'=>'Bryn','last_name'=>'McKerracher','student_id'=>'1000037350','username'=>'MCKEBF1'],
        ['first_name'=>'Todd','last_name'=>'Meason','student_id'=>'1000027339','username'=>'MEAST2'],
        ['first_name'=>'Taylor','last_name'=>'Medder','student_id'=>'1000068269','username'=>'MEDDTG1'],
        ['first_name'=>'Anthony','last_name'=>'Meldrum-Harris','student_id'=>'1000070079','username'=>'MELDA2'],
        ['first_name'=>'Anthony','last_name'=>'Mellon','student_id'=>'1000066356','username'=>'MELLAM1'],
        ['first_name'=>'Sophie','last_name'=>'Morrison','student_id'=>'1000041080','username'=>'MORRSR3'],
        ['first_name'=>'Lucas','last_name'=>'Nyhof','student_id'=>'1000058638','username'=>'NYHOLW1'],
        ['first_name'=>'Charmain','last_name'=>'Pedrigal','student_id'=>'1000054879','username'=>'PEDRC1'],
        ['first_name'=>'Ian','last_name'=>'Pollock','student_id'=>'1000029373','username'=>'POLLI2'],
        ['first_name'=>'Fynn','last_name'=>'Porteous','student_id'=>'1000066032','username'=>'PORTFA1'],
        ['first_name'=>'Daniel','last_name'=>'Real','student_id'=>'1000069200','username'=>'REALDI1'],
        ['first_name'=>'Seymour','last_name'=>'Reeves-Boddy','student_id'=>'1000037148','username'=>'REEVS3'],
        ['first_name'=>'Nabeel','last_name'=>'Riad Mohammed','student_id'=>'1000064922','username'=>'MOHANR1'],
        ['first_name'=>'Francisco Fernando','last_name'=>'Rosas Chavez','student_id'=>'1000068686','username'=>'ROSAF2'],
        ['first_name'=>'Mitchell','last_name'=>'Scott','student_id'=>'1000065400','username'=>'SCOTMS2'],
        ['first_name'=>'Yoseob','last_name'=>'Shim','student_id'=>'1000044460','username'=>'SHIMY5'],
        ['first_name'=>'Cody','last_name'=>'Smith','student_id'=>'1000060722','username'=>'SMITCR7'],
        ['first_name'=>'Dhugald','last_name'=>'Spry','student_id'=>'1000040435','username'=>'SPRYDL1'],
        ['first_name'=>'Georgette','last_name'=>'Watkins','student_id'=>'1000060043','username'=>'WATKGL1'],
        ['first_name'=>'Reuben','last_name'=>'Watt','student_id'=>'1000063488','username'=>'WATTRG1']
        

        ]);

        }
}
