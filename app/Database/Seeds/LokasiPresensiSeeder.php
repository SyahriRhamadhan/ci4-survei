<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LokasiPresensiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_lokasi' => 'Kantor Pusat',
                'alamat_lokasi' => 'Jl. Sudirman No.10, Jakarta',
                'tipe_lokasi' => 'Kantor',
                'latitude' => '-6.200000',
                'longitude' => '106.816666',
                'radius' => 100,
                'zona_waktu' => 'WIB',
                'jam_masuk' => '08:00',
                'jam_pulang' => '17:00',
            ],
            [
                'nama_lokasi' => 'Cabang Bandung',
                'alamat_lokasi' => 'Jl. Asia Afrika No.100, Bandung',
                'tipe_lokasi' => 'Kantor Cabang',
                'latitude' => '-6.914744',
                'longitude' => '107.609810',
                'radius' => 100,
                'zona_waktu' => 'WIB',
                'jam_masuk' => '08:00',
                'jam_pulang' => '17:00',
            ],
            [
                'nama_lokasi' => 'Cabang Surabaya',
                'alamat_lokasi' => 'Jl. Tunjungan No.1, Surabaya',
                'tipe_lokasi' => 'Kantor Cabang',
                'latitude' => '-7.257472',
                'longitude' => '112.752088',
                'radius' => 100,
                'zona_waktu' => 'WIB',
                'jam_masuk' => '08:00',
                'jam_pulang' => '17:00',
            ],
            [
                'nama_lokasi' => 'Pabrik Cikarang',
                'alamat_lokasi' => 'Jl. Industri No.2, Cikarang',
                'tipe_lokasi' => 'Pabrik',
                'latitude' => '-6.305900',
                'longitude' => '107.170900',
                'radius' => 150,
                'zona_waktu' => 'WIB',
                'jam_masuk' => '07:00',
                'jam_pulang' => '16:00',
            ],
            [
                'nama_lokasi' => 'Kantor Makassar',
                'alamat_lokasi' => 'Jl. Pettarani No.3, Makassar',
                'tipe_lokasi' => 'Kantor',
                'latitude' => '-5.147665',
                'longitude' => '119.432731',
                'radius' => 100,
                'zona_waktu' => 'WITA',
                'jam_masuk' => '08:00',
                'jam_pulang' => '17:00',
            ],
            [
                'nama_lokasi' => 'Kantor Medan',
                'alamat_lokasi' => 'Jl. Sisingamangaraja No.7, Medan',
                'tipe_lokasi' => 'Kantor Cabang',
                'latitude' => '3.595196',
                'longitude' => '98.672226',
                'radius' => 100,
                'zona_waktu' => 'WIB',
                'jam_masuk' => '08:00',
                'jam_pulang' => '17:00',
            ],
            [
                'nama_lokasi' => 'Warehouse Bogor',
                'alamat_lokasi' => 'Jl. Raya Bogor No.5, Bogor',
                'tipe_lokasi' => 'Gudang',
                'latitude' => '-6.589722',
                'longitude' => '106.789444',
                'radius' => 200,
                'zona_waktu' => 'WIB',
                'jam_masuk' => '07:30',
                'jam_pulang' => '16:30',
            ],
            [
                'nama_lokasi' => 'Kantor Bali',
                'alamat_lokasi' => 'Jl. Sunset Road No.100, Bali',
                'tipe_lokasi' => 'Kantor Cabang',
                'latitude' => '-8.670458',
                'longitude' => '115.212631',
                'radius' => 100,
                'zona_waktu' => 'WITA',
                'jam_masuk' => '08:00',
                'jam_pulang' => '17:00',
            ],
            [
                'nama_lokasi' => 'Cabang Semarang',
                'alamat_lokasi' => 'Jl. Pandanaran No.50, Semarang',
                'tipe_lokasi' => 'Kantor Cabang',
                'latitude' => '-6.966667',
                'longitude' => '110.416664',
                'radius' => 100,
                'zona_waktu' => 'WIB',
                'jam_masuk' => '08:00',
                'jam_pulang' => '17:00',
            ],
            [
                'nama_lokasi' => 'Kantor Palembang',
                'alamat_lokasi' => 'Jl. Jenderal Sudirman No.5, Palembang',
                'tipe_lokasi' => 'Kantor',
                'latitude' => '-2.976074',
                'longitude' => '104.775430',
                'radius' => 100,
                'zona_waktu' => 'WIB',
                'jam_masuk' => '08:00',
                'jam_pulang' => '17:00',
            ],
        ];

        // Insert each data into database
        foreach ($data as $d) {
            $this->db->table('lokasi_presensi')->insert($d);
        }
    }
}
