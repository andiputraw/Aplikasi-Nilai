<?php

namespace App\Http\Controllers;

use App\Models\Mata_Pelajaran;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Mata_PelajaranAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mata_pelajaran = Mata_Pelajaran::getAllMata_pelajaran();
        return Response()->json($mata_pelajaran);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mata_Pelajaran $Mata_Pelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mata_Pelajaran $Mata_Pelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mata_Pelajaran $Mata_Pelajaran)
    {
        //
    }
}
