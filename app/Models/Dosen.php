<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    public $fillable = ['nama','nipd'];
    public $timestamps = true;

    public function Mahasiswa() {
        return $this->hasMany(Mahasiswa::class,'id_dosen');
    }
}
