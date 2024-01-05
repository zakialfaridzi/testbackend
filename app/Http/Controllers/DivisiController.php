<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataDivisi = \App\Models\Divisi::all();
        return view('divisi.index', [
            'title' => 'Data Divisi',
            'dataDivisi' => $dataDivisi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('divisi.create-divisi', ['title' => 'Create Data Divisi']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$validateData = $request->validate([
			'nama' => 'required|min:3|max:100',
		]);


        \App\Models\Divisi::create([
            'nama' => $request->nama,
        ]);

        return redirect()
            ->route('divisi.index')
            ->with('success', 'Data divisi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $divisiId = \App\Models\Divisi::find($id);
		return view('divisi.detail-divisi', ['divisiId' => $divisiId, 'title' => 'Detail Data Divisi']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Divisi  $divisi
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
    {
		$divisiId = \App\Models\Divisi::find($id);
        return view('divisi.edit-divisi', ['divisiId' => $divisiId, 'title' => 'Edit Data Divisi']);
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
		// dd($request->all());
		$validateData = $request->validate([
			'nama' => 'required|min:3|max:100',
		]);

		$divisiId = \App\Models\Divisi::find($id);
		$divisiId->update($request->all());
		return redirect()->route('divisi.index')->with('success', 'Data divisi berhasil diubah!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$divisiId = \App\Models\Divisi::find($id);
		$divisiId->delete();
		return redirect()->route('divisi.index')->with('success', 'Data divisi berhasil dihapus!');;
    }
}
