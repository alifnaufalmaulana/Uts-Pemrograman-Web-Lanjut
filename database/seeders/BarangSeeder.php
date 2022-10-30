<?php

namespace Database\Seeders;

use App\Models\barang as ModelsBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsBarang::insert(
            [
                [
                    'namaBarang' => 'Tas Sekolah',
                    'harga' => '50000',
                    'stok' => '100',
                    'reviewBarang' => 'Tas yang cocok untuk dibawa sekolah, kualitas terbaik, tahan air, tidak mudah sobek, & tempat penyimpanannya banyak.',
                ],
                [
                    'namaBarang' => 'Tempat alat tulis',
                    'harga' => '10000',
                    'stok' => '100',
                    'reviewBarang' => 'Tempat alat tulis yang cukup besar, yang dapat menampung banyak jenis alat tulis.',
                ],
                [
                    'namaBarang' => 'Buku 1 Pack',
                    'harga' => '30000',
                    'stok' => '300',
                    'reviewBarang' => 'Buku 1 pack yang berisi 12 buku, yang masing-masing buku berisi 50 halaman, bahan nyaman & tidak mudah robek.',
                ],
                [
                    'namaBarang' => 'Sepatu',
                    'harga' => '80000',
                    'stok' => '200',
                    'reviewBarang' => 'Sepatu sekolah hitam, ukuran 20-40, kualitas terbaik, tahan air, tidak mudah rusak, & tahan lama.',
                ],
                [
                    'namaBarang' => 'Seragam sekolah SD',
                    'harga' => '90000',
                    'stok' => '300',
                    'reviewBarang' => 'Seragam SD lengkap, mulai dari topi, dasi, atasan, bawahan, dan sabuk.',
                ],
                [
                    'namaBarang' => 'Meja lipat',
                    'harga' => '80000',
                    'stok' => '100',
                    'reviewBarang' => 'Meja lipat yang terbuat dari kayu kualitas terbaik, tahan lama, tahan dari rayap, tahan air, tidak mudah rusak, aman dari anak-anak.',
                ],
                [
                    'namaBarang' => 'Penggaris',
                    'harga' => '5000',
                    'stok' => '100',
                    'reviewBarang' => 'Penggaris berukuran 30cm.',
                ],
                [
                    'namaBarang' => 'Botol Minum',
                    'harga' => '20000',
                    'stok' => '100',
                    'reviewBarang' => 'Botol minum berukuran 500ml',
                ],
            ]
        );
    }
}
