<?php

namespace App\Http\Controllers\dashboard\admin;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Models\Instruktur;
use App\Models\User;
use Illuminate\Http\Request;

class AdminInstrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instrukturs = Instruktur::all();
        return view('backend.admin.instruktur.index')
        ->with('instruktur',$instrukturs);
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
            'name' => 'required|string|max:255',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
        ]);
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = $validatedData['password'];
        $user->role = UserRole::Instruktur;
        $user->save();
        $instruktur = new Instruktur();
        $instruktur->user_id = $user->id;
        $instruktur->nama = $user->name;
        $instruktur->avatar = '';
        $instruktur->save();
        return redirect()->route('admin.instruktur.index');
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
        $instruktur = Instruktur::find($id);
        // dd($instruktur);
        $instruktur->user->delete();
        $instruktur->delete();
        return redirect()->route('admin.instruktur.index');
    }
}
