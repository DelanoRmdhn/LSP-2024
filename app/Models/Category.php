<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ["id"];

    // RELASI ANTAR TABEL CATEGORY DAN LAPORAN
    public function laporan(){
        return $this->hasMany(Laporan::class);
    }

}
