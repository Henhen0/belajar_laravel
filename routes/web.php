<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home' ,function(){
    return '<h2>Selamat Datang Di Home</h2>';
});

Route::get('/about' ,function(){
    return '<h2>Selamat Datang Di about</h2>';
});

Route::get('/contact' ,function(){
    return '<h2>Selamat Datang Di contact</h2>';
});


//route parameter
route::get('/tes/{nama2}/{tmptlahir2}/{jk2}/{agama2}/{alamat2}', function($nama,$tmpatlahir,$jk,$agama,$alamat){
    return "Nama :".$nama."<br>" .
           "Tempat Lahir :". $tmpatlahir ."<br>".
           "Jenis Kelamin :". $jk ."<br>".
           "Agama :". $agama ."<br>".
           "Alamat :". $alamat;

});



//route hitung
route::get('hitung/{bilangan1}/{bilangan2}', function ($a,$b){
    return "Bilangan 1 :". $a . "<br>".
           "Bilangan 2 :". $b ."<br>".
           "Hasil :". $a+$b;
});


//route latihan
route::get('/latihan/{nama}/{tel}/{jb}/{nb}/{jumlah}/{pembayaran}', function($nmpembeli,$tel,$jb,$nb,$jumlah,$pembayaran){
   
    if ($jb == "handphone") {
        if ($nb == "poco") {
            $harga = 3000000;
        }elseif ($nb == "samsung") {
            $harga = 5000000;
        }elseif ($nb == "iphone") {
            $harga = 15000000;
        }

    } elseif ($jb == "laptop"){
        if ($nb == "lenovo") {
            $harga = 4000000;
        }elseif ($nb == "acer") {
            $harga = 8000000;
        }elseif ($nb == "mackbook") {
            $harga = 20000000;
        }       

    } elseif ($jb == "tv") {
        if ($nb == "toshiba") {
            $harga = 5000000;
        }elseif ($nb == "samsung") {
            $harga = 8000000;
        }elseif ($nb == "lg") {
            $harga = 10000000;
        }  
    }

     $total = $harga * $jumlah;

    if ($total > 10000000 ) {
        $cashback = 500000;
    } else {
        $cashback = 0;
    }

    if ($pembayaran == "transfer") {
        $potongan = 50000;
    } elseif ($pembayaran == "cash") {
        $potongan = 0;
    }
    

    


    return "Nama Pembeli :". $nmpembeli ."<br>".
           "Telepon :". $tel ."<br><br>".
           "Jenis Barang :". $jb ."<br>".
           "Nama Barang :". $nb ."<br>".
           "Harga : Rp.". number_format($harga) ."<br>".
           "Jumlah :". $jumlah ."<br>".
           "Total : Rp.". number_format($total) . "<br><br>".
           "Cashback : Rp.". number_format($cashback) . "<br>".
           "Pembayaran :". $pembayaran . "<br>".
           "Potongan : Rp.". number_format($potongan) . "<br><br>".
           "Total Pembayaran : Rp.". number_format($total-$cashback-$potongan) . "<br>".
           "========================";

});