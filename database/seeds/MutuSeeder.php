<?php

use Illuminate\Database\Seeder;
use App\Mutu;

class MutuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mutu = new Mutu;
        $mutu->mutuUmum = 120;
        $mutu->mutuIKS = 120;
        $mutu->mutuBPJS = 120;
        $mutu->isAktif = true;
        $mutu->save();
    }
}
