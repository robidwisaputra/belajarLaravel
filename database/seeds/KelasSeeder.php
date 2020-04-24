<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	'nama_kelas' => 'XII RPL 1',
        	'jurusan' => 'Rekayasa Perangkat Lunak'
        ];
        DB::table('t_kelas')->insert($data);

        $data = [
        	'nama_kelas' => 'XII RPL 2',
        	'jurusan' => 'Rekayasa Perangkat Lunak'
        ];
        DB::table('t_kelas')->insert($data);
    }
}
