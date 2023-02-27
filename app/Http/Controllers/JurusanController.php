<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storextb_jurusanRequest;
use App\Http\Requests\Updatextb_jurusanRequest;
use App\Models\Jurusan;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Services\ControllerUtils;
use App\Services\SendEdit;

class JurusanController extends Controller
{

    private $title = 'jurusan';
    private $inputShape = [
        [
            'type' => 'input',
            'name' => 'Kode Jurusan',
            'field' => 'kode_jurusan',
            'readonly' => true
        ],
        [
            'type' => 'input',
            'name' => 'Nama Jurusan',
            'field' => 'nama_jurusan',
        ],
        [
            'type' => 'input',
            'name' => 'Program Keahlian',
            'field' => 'prog_keahlian',
        ],
        [
            'type' => 'input',
            'name' => 'Bidang Keahlian',
            'field' => 'bid_keahlian'
        ]
    ];




    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $Jurusan = Jurusan::getJurusan();

        $send = ControllerUtils::createSendIndex($this->title, $this->inputShape, $Jurusan);


        return Response(view('templates.table-template', $send->toArray()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $send = ControllerUtils::createSendCreate($this->title, $this->inputShape);

        return Response(view('templates.input-template', $send->toArray()));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputValue = ControllerUtils::getInputValue($request);
        $result = Jurusan::createJurusan($inputValue);
        return ControllerUtils::isSuccess($result, $this->title, "Tambah");
    }

    /**
     * Display the specified resource.
     */
    public function show($Jurusan)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jurusan $Jurusan)
    {
        $send = ControllerUtils::createSendEdit($this->title, $this->inputShape, $Jurusan);

        return Response(view('templates.edit-template', $send->toArray()));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $Jurusan)
    {
        $inputValue = ControllerUtils::getInputValue($request);
        $result = Jurusan::updateJurusan($Jurusan, $inputValue);
        return ControllerUtils::isSuccess($result, $this->title, "Diupdate");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $Jurusan)
    {
        $result = Jurusan::deleteJurusan($Jurusan);
        return ControllerUtils::isSuccess($result, $this->title, "Dihapus");
    }
}
