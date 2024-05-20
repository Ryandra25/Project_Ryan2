<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nama','nim','id_dosen'];
    public $timestamps = true;

    public function wali() {
        return $this->hasOne(wali::class, 'id_mahasiswa');
    }

    public function dosen(){
        return $this->belongsTo(Dosen::class, 'id_dosen');
    }

public function hobi(){
    return $this->belongsToMany(hobi::class,
    'mahasiswa_hobi',
    'id_mahasiswa',
    'id_hobi',
        );
    }
}
