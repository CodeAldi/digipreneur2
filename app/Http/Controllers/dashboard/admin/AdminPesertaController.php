<?php

namespace App\Http\Controllers\dashboard\admin;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;

class AdminPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peserta = Peserta::all();
        return view('backend.admin.peserta.index')
        ->with('peserta',$peserta);
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
        //
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
        $peserta = Peserta::find($id);
        $peserta->user->delete();
        $peserta->delete();
        return redirect()->route('admin.peserta.index');
    }
}
