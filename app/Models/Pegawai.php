<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

	protected $table = 'pegawai';
	protected $primaryKey = 'id';
	protected $fillable = [
		'id_divisi',
		'nip',
		'nik',
		'nama',
		'email',
		'jenis_kelamin',
		'tempat_lahir',
		'tanggal_lahir',
		'telpon',
		'alamat',
		'status_nikah',
	];

	public $timestamps = false;

	public function divisi(){
		return $this->belongsTo(Divisi::class, 'id_divisi', 'id');
	}
}
