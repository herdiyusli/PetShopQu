<?php
session_start();
require 'config.php';
$judul = 'Tentang Kami';

require 'templates/header.php';
?>

<div class="row bg-white border p-2 mt-5">
    <div class="col-md ml-3">
        <h1>Tentang Kami</h1>
        <p class="lead">Kami menjual berbagai jenis makanan hewan untuk kucing, anjing dan lain-lain.
            Kami mulai membuka toko kami pada tahun 2020 bulan Januari dimana saata itu kami hanya menjual 1 jenis produk yaitu Whiskas
            dan di pertengahan tahun 2020 kami menambahkan menambah berbagai jenis makanan.
        </p>
        <hr>
        <div class="row ml-1">
            <div class="w-100">
                <h3><i class="fa fa-map-marker"></i>Alamat</h3>
                <p>Cibitung / Kabupaten Bekasi<br>Jawa Barat<br>Indonesia<br><strong>Herdi Yusli</strong></p>
            </div>
            <!-- /.col-sm-4-->
            <div class="">
                <h3><i class="fa fa-phone"></i> Hubungi Kami</h3>
                <p class="text-muted">Anda dapat menghubungi kami dinomer yang tertera dibawah ini</p>
                <p><strong>+6287 812 8888 333</strong></p>
            </div>
        </div>
    </div>
</div>
<?php require 'templates/footer.php' ?>