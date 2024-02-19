<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

        // RELASI ANTAR TABEL SISWA DAN LAPORAN
        public function laporan(){
            return $this->hasMany(Laporan::class);
        }
}
