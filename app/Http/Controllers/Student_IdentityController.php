<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storextb_studentidentityRequest;
use App\Http\Requests\Updatextb_studentidentityRequest;
use App\Models\Student_Identity;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Services\ControllerUtils;
use App\Models\Jurusan;
use App\Models\School_Class;
use Symfony\Component\VarDumper\VarDumper;

class Student_IdentityController extends Controller
{
    private $title = 'murid';


    public function ShapeGenerator()
    {
        $valueJurusan = Jurusan::select('kode_jurusan', 'nama_jurusan')->get()->map(function ($item) {
            return [
                'value' => $item['kode_jurusan'],
                'label' => $item['nama_jurusan'],
            ];
        });

        $valueKelas = School_Class::all('kelas')->map(function ($item) {
            return [
                'value' => $item['kelas'],
                'label' => $item['kelas']
            ];
        });

        return [
            [
                'type' => 'input',
                'name' => 'NIS',
                'field' => 'nis',
                'readonly' => true
            ], [
                'type' => 'input',
                'name' => 'NISN',
                'field' => 'nisn',
            ], [
                'type' => 'input',
                'name' => 'Nama Lengkap',
                'field' => 'nama_lengkap',
            ], [
                'type' => 'gender',
                'name' => 'Gender',
                'field' => 'jenis_kel',
            ], [
                'type' => 'date',
                'name' => 'Tanggal Lahir',
                'field' => 'tgl_lahir',
            ], [
                'type' => 'comboBox',
                'name' => 'Kode Jurusan',
                'field' => 'kode_jurusan',
                'list' => $valueJurusan,
            ], [
                'type' => 'comboBox',
                'name' => 'Kelas',
                'field' => 'kelas',
                'list' => $valueKelas
            ], [
                'type' => 'input',
                'name' => 'user Id',
                'field' => 'userid',
            ], [
                'type' => 'input',
                'name' => 'telepon',
                'field' => 'telepon',
            ]

        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataMurid =  Student_Identity::with('jurusan')->get();

        $send = [
            'title' => $this->title,
            'dataLabel' => ['NIS', 'NISN', 'Nama Lengkap', 'Gender', 'Tanggal Lahir', 'Jurusan', 'Kelas'],
            'dataField' => ['nis', 'nisn', 'nama_lengkap', 'jenis_kel', 'tgl_lahir', '[jurusan.nama_jurusan]', 'kelas'],
            'dataTable' => $dataMurid->toArray(),
        ];


        return view('templates.table-template', $send);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $send = ControllerUtils::createSendCreate($this->title, $this->ShapeGenerator());

        return view('templates.input-template', $send->toArray());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputValue = ControllerUtils::getInputValue($request);

        $result = Student_Identity::inputMurid($inputValue);

        return ControllerUtils::isSuccess($result, $this->title, "Input");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student_Identity $Student_Identity)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $send = ControllerUtils::createSendEdit($this->title, $this->ShapeGenerator(), Student_Identity::find($id));
        return Response(view('templates.edit-template', $send->toArray()));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatextb_studentidentityRequest $request, Student_Identity $Student_Identity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student_Identity $Student_Identity)
    {
        //
    }

    public function getMuridByClass(Request $request)
    {
        $json = $request->json()->all();


        $jurusan = $json['jurusan'];
        $kelas = $json['kelas'];

        $result = Student_Identity::getMuridByClass($jurusan, $kelas);

        return response()->json($result);
    }
}
