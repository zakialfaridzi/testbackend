<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	$dataPegawai = \App\Models\Pegawai::with('divisi')->get();
		return view('pegawai.index', [
			'title' => 'Data Pegawai',
			'dataPegawai' => $dataPegawai
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$divisi = \App\Models\Divisi::all();
        return view('pegawai.create-pegawai', ['title' => 'Create Data Pegawai', 'divisi' => $divisi]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
		// return $request->file('fotopegawai')->store('fotoPegawai', 'public');
		$validateData = $request->validate([
			'id_divisi' => 'required',
			'nip' => 'required|numeric',
			'nik' => 'required|numeric|unique:pegawai',
			'nama' => 'required|min:3|max:100',
			'email' => 'required|email|unique:pegawai',
			'jenis_kelamin' => 'required',
			'tempat_lahir' => 'required|min:3|max:50',
			'tanggal_lahir' => 'required',
			'telpon' => 'required|numeric',
			'alamat' => 'required|min:3|max:300',
			'status_nikah' => 'required',
			'fotopegawai' => 'required|image|max:5000'
		]);


		\App\Models\Pegawai::create([
			'id_divisi' => $request->id_divisi,
			'nip' => $request->nip,
			'nik' => $request->nik,
			'nama' => $request->nama,
			'email' => $request->email,
			'jenis_kelamin' => $request->jenis_kelamin,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'telpon' => $request->telpon,
			'alamat' => $request->alamat,
			'status_nikah' => $request->status_nikah,
			'fotopegawai' => $request->file('fotopegawai')->store('fotoPegawai', 'public')
		]);

		$details = [
			'namaadmin' => 'Admin',
			'nama' => $request->nama,
			'email' => $request->email,
			'nip' => $request->nip,
			'nik' => $request->nik,
		];

		Mail::to($request->email)->send(new MailSend($details));

		return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawaiId = \App\Models\Pegawai::with('divisi')->find($id);
		return view('pegawai.detail-pegawai', ['pegawaiId' => $pegawaiId, 'title' => 'Detail Data Pegawai']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
		$pegawaiId = \App\Models\Pegawai::with('divisi')->find($id);
		$divisi = \App\Models\Divisi::all();
        return view('pegawai.edit-pegawai', ['pegawaiId' => $pegawaiId, 'divisi' => $divisi, 'title' => 'Edit Data Pegawai']);
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
			'id_divisi' => 'required',
			'nip' => 'required|numeric',
			'nik' => 'required|numeric',
			'nama' => 'required|min:3|max:100',
			'email' => 'required|email|unique:pegawai',
			'jenis_kelamin' => 'required',
			'tempat_lahir' => 'required|min:3|max:50',
			'tanggal_lahir' => 'required',
			'telpon' => 'required|numeric',
			'alamat' => 'required|min:3|max:300',
			'status_nikah' => 'required',
			'fotopegawai' => 'required|image|max:5000'
		]);

		$pegawaiId = \App\Models\Pegawai::find($id);
		$pegawaiId->update([
			'id_divisi' => $request->id_divisi,
			'nip' => $request->nip,
			'nik' => $request->nik,
			'nama' => $request->nama,
			'email' => $request->email,
			'jenis_kelamin' => $request->jenis_kelamin,
			'tempat_lahir' => $request->tempat_lahir,
			'tanggal_lahir' => $request->tanggal_lahir,
			'telpon' => $request->telpon,
			'alamat' => $request->alamat,
			'status_nikah' => $request->status_nikah,
			'fotopegawai' => $request->file('fotopegawai')->store('fotoPegawai', 'public')
		]);

		return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diubah!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		if (\App\Models\Pegawai::find($id)->fotopegawai) {
			\Storage::delete(\App\Models\Pegawai::find($id)->fotopegawai);
		}

		$pegawaiId = \App\Models\Pegawai::find($id);
		$pegawaiId->delete();
		return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil dihapus!');;
    }
}
