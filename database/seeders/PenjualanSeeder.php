<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'TRX001',
                'penjualan_tanggal' => '2024-02-01',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Ani',
                'penjualan_kode' => 'TRX002',
                'penjualan_tanggal' => '2024-02-05',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'Cici',
                'penjualan_kode' => 'TRX003',
                'penjualan_tanggal' => '2024-02-10',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 2,
                'pembeli' => 'Deni',
                'penjualan_kode' => 'TRX004',
                'penjualan_tanggal' => '2024-02-15',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 1,
                'pembeli' => 'Eko',
                'penjualan_kode' => 'TRX005',
                'penjualan_tanggal' => '2024-02-20',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 2,
                'pembeli' => 'Fitri',
                'penjualan_kode' => 'TRX006',
                'penjualan_tanggal' => '2024-02-22',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Gina',
                'penjualan_kode' => 'TRX007',
                'penjualan_tanggal' => '2024-02-24',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'penjualan_kode' => 'TRX008',
                'pembeli' => 'Hendra',
                'penjualan_tanggal' => '2024-02-25',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 1,
                'pembeli' => 'Ira',
                'penjualan_kode' => 'TRX009',
                'penjualan_tanggal' => '2024-02-26',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 2,
                'pembeli' => 'Joni',
                'penjualan_kode' => 'TRX010',
                'penjualan_tanggal' => '2024-02-27',
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
