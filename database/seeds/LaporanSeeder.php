<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');

    	for($i = 1; $i <= 20; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('set_jadwal')->insert([
                'waktu' => $faker->time,
    			'kegiatan' => $faker->habit,
    			'set_jadwal' => $faker->set_jadwal,
    			'jawaban' => 'answer'
    		]);

    	}
    }

}

