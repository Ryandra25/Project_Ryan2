<?php

namespace Database\Seeders;

use App\Models\Hobi;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\wali;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //Sample Data Dosen
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete();

        $dosen = Dosen::create([
            'nama' => 'Ýulianto',
            'nipd' => '123456789',
        ]);
        //Sample Data Mahasiswa
        $novay = Mahasiswa::create(array(
            'nama' => 'Noviyanto Rachmadi',
            'nim' => '1015015072',
            'id_dosen' => $dosen->id,
        ));


        $dije = Mahasiswa::create(array(
            'nama' => 'Djaffar',
            'nim' => '1015015088',
            'id_dosen' => $dosen->id,));


        $ayu = Mahasiswa::create(array(
            'nama' => 'Puji Rahayu',
            'nim' => '1015015078',
            'id_dosen' => $dosen->id,));

        $this->command->info('Mahasiswa telah diisi!');

        wali::create(array(
            'nama' => 'Achmad S',
            'id_mahasiswa' => $novay->id,
        ));

        # Ciptakan wali si $dije
        wali::create(array(
            'nama' => 'Entahlah',
            'id_mahasiswa' => $dije->id,
        ));

        # Ciptakan wali si $ayu
        wali::create(array(
            'nama' => 'Arianto',
            'id_mahasiswa' => $ayu->id,
        ));
        # Informasi ketika semua wali telah diisi.
        $this->command->info('Data mahasiswa dan wali telah diisi!');

        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        $mandi_hujan = Hobi::create(['hobi' => 'Mandi Hujan']);
        $baca_buku = Hobi::create(['hobi' => 'Baca Buku']);



        $novay->hobi()->attach($mandi_hujan->id);
        $novay->hobi()->attach($baca_buku->id);
        $dije->hobi()->attach($mandi_hujan->id);
        $ayu->hobi()->attach($baca_buku->id);

        //Sample Data wali

    }
}
