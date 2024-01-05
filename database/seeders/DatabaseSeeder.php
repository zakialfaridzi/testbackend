<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pegawai;
use App\Models\Divisi;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		Pegawai::factory(100)->create();

		User::create([
			'name' => 'Admin',
			'email' => 'admin@gmail.com',
			'password' => bcrypt('admin'),
		]);

		Divisi::create([
			'nama' => 'Software Engineering',
		]);
		Divisi::create([
			'nama' => 'HR',
		]);
		Divisi::create([
			'nama' => 'Marketing',
		]);
		Divisi::create([
			'nama' => 'Legal',
		]);
		Divisi::create([
			'nama' => 'Finance',
		]);
		Divisi::create([
			'nama' => 'Accounting',
		]);
		Divisi::create([
			'nama' => 'Customer Service',
		]);
		Divisi::create([
			'nama' => 'Research and Development',
		]);
    }
}
