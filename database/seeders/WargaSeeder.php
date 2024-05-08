<?php

namespace Database\Seeders;

use App\Models\Warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        warga::insert([
            'nama'=> 'saliman',
            'jenis_kelamin' => 0,
            'alamat' => 'cibaduyut',
        ]);
                warga::insert([
            'nama'=> 'ayu',
            'jenis_kelamin' => 1,
            'alamat' => 'cibaduyut',
        ]);
                warga::insert([
            'nama'=> 'ajeng',
            'jenis_kelamin' => 1,
            'alamat' => 'cibaduyut',
        ]);
                warga::insert([
            'nama'=> 'mardian',
            'jenis_kelamin' => 0,
            'alamat' => 'cibaduyut',
        ]);
                warga::insert([
            'nama'=> 'ridho',
            'jenis_kelamin' => 0,
            'alamat' => 'cibaduyut',
        ]);
    }
}
