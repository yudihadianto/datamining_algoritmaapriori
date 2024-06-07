<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\M_Kategori;

class S_Kategori extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = array("Baju Muslimah", "Bergo", "Bra", "Casing Kulit", "Celana", "Dompet", "Kaos", "Dress", "Gamis", "Hijab", "Jaket", "Jeans", "Kaos", "Kemeja", "Kerudung", "Mukena", "Pakaian Olahraga", "Payung", "Sandal", "Sepatu", "Tas", "Topi");
        for ($x = 0; $x < count($kategori); $x++) {
            $this->createKategori($kategori[$x]);
        }
    }

    function createKategori($namaKategori)
    {
        $kategori = new M_Kategori();
        $kategori->kd_kategori = Str::uuid();
        $kategori->nama_kategori = $namaKategori;
        $kategori->active = "1";
        $kategori->save();
    }
}
