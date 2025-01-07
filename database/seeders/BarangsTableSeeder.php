<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            ['nama_barang'=>'Laptop','merk'=>'Mackbook','harga'=>'Rp.21.000.000'],
            ['nama_barang'=>'Motor','merk'=>'Yz','harga'=>'Rp.80.000.000'],
            ['nama_barang'=>'Handphone','merk'=>'Oppo','harga'=>'Rp.4.150.000'],
            ['nama_barang'=>'Mobil','merk'=>'Avanza','harga'=>'Rp.130.000.000'],
            ['nama_barang'=>'Tv','merk'=>'Toshiba','harga'=>'Rp.30.000.000'],
        ];
        // masukan data ke database
        DB::table('barangs')->insert($barangs);
    }
}
