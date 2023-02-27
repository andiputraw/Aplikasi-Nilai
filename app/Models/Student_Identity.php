<?php

namespace App\Models;

use Dotenv\Repository\Adapter\GuardedWriter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\Guard;
use Illuminate\Database\Eloquent\Collection;
use Database\Factories\Student_IdentityFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Jurusan;
use App\Services\Result;

class Student_Identity extends Model
{

    use HasFactory;


    protected $table = 'student_identity';

    protected $guarded = ['id'];

    public static function newFactory(): Factory
    {
        return Student_IdentityFactory::new();
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'kode_jurusan', 'kode_jurusan');
    }


    public static function getAllMurid(): Collection
    {
        $dataMurid = self::all();

        return $dataMurid;
    }

    public static function getDetailMurid()
    {
        //TODO: implement
    }

    public static function getMuridByClass($jurusan, $kelas)
    {
        return self::all()->where('nama_jurusan', '=', $jurusan)->where('kelas', '=', $kelas);
    }

    public static function inputMurid($inputValue)
    {
        try {
            $model = self::create($inputValue);
            $model->save();
            return new Result(true);
        } catch (\Throwable $th) {
            return new Result(false, $th);
        }
    }
}
