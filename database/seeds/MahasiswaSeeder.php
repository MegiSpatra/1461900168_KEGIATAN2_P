<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1->nbi = "1461900168";
        $mhs1->nama_mhs = "Megi Saputra";
        $mhs1->save();
    
        $mhs2 = new Mahasiswa();
        $mhs2->nbi = "1461900001";
        $mhs1->nama_mhs = "Siapa Anda";
        $mhs1->save();
    }
}
