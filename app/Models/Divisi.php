<?php

namespace App\Models;

use App\Models\Pegawai;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Divisi extends Model
{
    use HasFactory;

	protected $table = 'divisi';
	protected $primaryKey = 'id';
	protected $fillable = [
		'nama',
	];

	public $timestamps = false;

	public function pegawai(){
		return $this->hasMany(Pegawai::class, 'id_divisi', 'id');
	}
}
