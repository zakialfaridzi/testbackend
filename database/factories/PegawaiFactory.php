<?php

namespace Database\Factories;
use App\Models\Pegawai;

use Illuminate\Database\Eloquent\Factories\Factory;

class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

	protected $table = 'pegawai';
	protected $model = Pegawai::class;

    public function definition()
    {
        return [
			'id_divisi' => $this->faker->numberBetween(1, 4),
			'nip' => $this->faker->numberBetween(1000000000, 9999999999),
			'nik' => $this->faker->numberBetween(100000000000000, 9999999999999999),
			'nama' => $this->faker->name,
			'email' => $this->faker->unique()->safeEmail,
			'jenis_kelamin' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
			'tempat_lahir' => $this->faker->city,
			'tanggal_lahir' => $this->faker->date,
			'telpon' => $this->faker->phoneNumber,
			'alamat' => $this->faker->address,
			'status_nikah' => $this->faker->randomElement(['Menikah', 'Lajang', 'Duda', 'Janda']),
        ];
    }
}
