<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mata_Pelajaran extends Model
{
    use HasFactory;

    protected $table = 'mata_pelajaran';
    protected $guarded = 'id';


    public static function getAllMata_pelajaran()
    {
        return self::all();
    }

    public static function getMataPelajaranByJurusan($jurusan, $kelas)
    {
        return self::all()->where('jurusan', '=', $jurusan)->where('kelas', '=', $kelas)->get();
    }
}
