<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organisasi;
use App\Models\Fakultas;
use App\Models\Prodi;

class OrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organisasis = Organisasi::paginate(10);
        return view('organisasi.index', ['organisasis' => $organisasis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fakultas = Fakultas::get();
        $prodis = Prodi::get();
        return view('organisasi.create', ['fakultas' => $fakultas], ['prodis' => $prodis]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fakultas_id' => ['required', 'exists:fakultas,id'],
            'nama_prodi' => ['required', 'exists:prodis,id'],
            'nama_organisasi' => ['required', 'string', 'max:255'],
            'nama_ketua' => ['required', 'string', 'max:255'],
            ]);
            $data = $request->all();
            Organisasi::create($data);
            return redirect('/organisasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fakultas = Fakultas::get();
        $prodis = Prodi::get();
        return view('organisasi.edit', ['organisasi' => Organisasi::find($id)], ['fakultas' => $fakultas], ['prodis' => $prodis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'fakultas_id' => ['required', 'exists:fakultas,id'],
            'nama_prodi' => ['required', 'exists:prodi,id'],
            'nama_organisasi' => ['required', 'string', 'max:255'],
            'nama_ketua' => ['required', 'string', 'max:255'],
            ]);
            $data = $request->all();

            $organisasi = Organisasi::find($id);
            $organisasi->update($data);
            return redirect('/organisasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organisasi = Organisasi::find($id);
        $organisasi->delete();
        return redirect('/organisasi');
    }
}
