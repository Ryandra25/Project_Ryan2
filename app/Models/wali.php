<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;

    public $fillable = ['nama','id_mahasiswa'];
    public $timestamps = true;

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
 }
}
