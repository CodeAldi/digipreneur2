<?php

namespace App\Http\Controllers\dashboard\admin;

use App\Http\Controllers\Controller;
use App\Models\Instruktur;
use App\Models\InstrukturEnrollment;
use App\Models\Materi;
use Illuminate\Http\Request;

class AdminEnrollInstrukturiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = Materi::all();
        $instruktur = Instruktur::all();
        $instrukturEnrollment = InstrukturEnrollment::all();
        return view('backend.admin.instrukturEnrollment.index')
        ->with('instrukturEnrollment',$instrukturEnrollment)
        ->with('materi',$materi)
        ->with('instruktur',$instruktur);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'materi_id' => 'required',
            'instruktur_id' => 'required',
        ]);
        $enrollment = new InstrukturEnrollment();
        $enrollment->materi_id = $validatedData['materi_id'];
        $enrollment->instruktur_id = $validatedData['instruktur_id'];
        $enrollment->save();
        return redirect()->route('admin.enroll.instruktur.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enrollment = InstrukturEnrollment::find($id);
        $enrollment->delete();
        return redirect()->route('admin.enroll.instruktur.index');
    }
}
