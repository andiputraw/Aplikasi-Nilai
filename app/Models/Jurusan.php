<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\JurusanFactory;
use App\Models\Student_Identity;
use App\Services\Result;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    protected $guarded = 'id';

    public function Student_Identity()
    {
        return $this->hasMany(Student_Identity::class, 'kode_jurusan', 'kode_jurusan');
    }




    public static function newFactory()
    {
        return JurusanFactory::new();
    }



    public static function getJurusan()
    {
        $result = self::all();

        return $result;
    }

    public static function createJurusan($insertValue)
    {
        try {
            $result = new Jurusan();
            $result->kode_jurusan = $insertValue['kode_jurusan'];
            $result->prog_keahlian = $insertValue['prog_keahlian'];
            $result->bid_keahlian = $insertValue['bid_keahlian'];
            $result->nama_jurusan = $insertValue['nama_jurusan'];


            $result->save();
            return new Result(true);
        } catch (\Throwable $th) {
            return new Result(false, $th->getMessage());
        }
    }

    public static function updateJurusan(Jurusan $jurusan, $updateValue)
    {
        try {


            $jurusan->prog_keahlian = $updateValue['prog_keahlian'];
            $jurusan->bid_keahlian = $updateValue['bid_keahlian'];
            $jurusan->nama_jurusan = $updateValue['nama_jurusan'];
            $jurusan->save();

            return new Result(true);
        } catch (\Throwable $th) {
            return new Result(false, $th->getMessage());
        }
    }
    public static function deleteJurusan(Jurusan $jurusan)
    {

        try {
            $jurusan->delete();
            return new Result(true);
        } catch (\Throwable $th) {
            return new Result(false, $th);
        }
    }
}
