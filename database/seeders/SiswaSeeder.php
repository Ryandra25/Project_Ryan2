<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert([
            'nama' => "Ryandra",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "JL. Baru Raya",
        ]);
        Siswa::insert([
            'nama' => "Rishky",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "JL. Cangkuang",
        ]);
        Siswa::insert([
            'nama' => "Sopyan",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "JL. Baleendah",
        ]);
        Siswa::insert([
            'nama' => "Rehan",
            'jenis_kelamin' => 0,
            'umur' => 34,
            'alamat' => "JL. TCI 2",
        ]);
        Siswa::insert([
            'nama' => "Ikhsan",
            'jenis_kelamin' => 0,
            'umur' => 16,
            'alamat' => "JL. Cibogo",
        ]);
        Siswa::insert([
            'nama' => "Nazwa",
            'jenis_kelamin' => 1,
            'umur' => 17,
            'alamat' => "JL. Rancamanyar Indah",
        ]);
        Siswa::insert([
            'nama' => "Rahma",
            'jenis_kelamin' => 1,
            'umur' => 17,
            'alamat' => "Palasari",
        ]);
        Siswa::insert([
            'nama' => "Salwa",
            'jenis_kelamin' => 1,
            'umur' => 16,
            'alamat' => "Sekeawi",
        ]);
        Siswa::insert([
            'nama' => "Ridho",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "Kopo Permai",
        ]);
        Siswa::insert([
            'nama' => "Dapa",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "JL. TCI 2",
        ]);
    }
}
