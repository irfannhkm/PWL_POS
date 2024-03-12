<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'BRG001',
                'barang_nama' => 'Beras',
                'harga_beli' => 50000,
                'harga_jual' => 60000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'BRG002',
                'barang_nama' => 'Minyak Goreng',
                'harga_beli' => 25000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'BRG003',
                'barang_nama' => 'Sandal Jepit',
                'harga_beli' => 20000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'BRG004',
                'barang_nama' => 'Sepatu Sneakers',
                'harga_beli' => 150000,
                'harga_jual' => 200000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'BRG005',
                'barang_nama' => 'Sapu',
                'harga_beli' => 20000,
                'harga_jual' => 30000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'BRG006',
                'barang_nama' => 'Lampu LED',
                'harga_beli' => 50000,
                'harga_jual' => 70000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'BRG007',
                'barang_nama' => 'Kemeja',
                'harga_beli' => 200000,
                'harga_jual' => 300000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'BRG008',
                'barang_nama' => 'Celana Jeans',
                'harga_beli' => 300000,
                'harga_jual' => 400000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'BRG009',
                'barang_nama' => 'Telepon Pintar',
                'harga_beli' => 1000000,
                'harga_jual' => 1200000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'BRG010',
                'barang_nama' => 'Laptop',
                'harga_beli' => 5000000,
                'harga_jual' => 6000000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
