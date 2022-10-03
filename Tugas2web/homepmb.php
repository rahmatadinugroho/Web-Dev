<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        #subjudul{
            text-align: center;
        }
        #bgimg{
            width: 1519px;
            height: 600px;
        }
        body{
            background-color: #f6f7f8;
        }
        footer{
            background-color: #222222;
        }
    </style>
</head>
<body>
<?php 
    require_once "menu.php";
?>

    <img src="https://cms.sevima.com//uploads/bgaplikasi/864.jpg" alt="" id="bgimg">

    <div class="col-sm-12 mt-5 mb-5 bg-light rounded-3">
        <div id="subjudul">
            <h3>Jalur Seleksi</h3>
            <h5>Daftar Jalur Seleksi</h5>
        </div>

        <div class="row">
            <!-- Card 1 -->
            <div class="col-sm-4" style="margin-right:-100px; margin-left: 200px;">
                <div class="card" style="width:300px; margin: 20px;">
                    <div class="card-header rounded-3" style="background-color:#1d6baf; width: 300px; height:250px;">
                        <h4 style="color: white; text-align: center; margin-top: 20px;">PMB - REGULER RAPOR</h4>
                        <p style="color: white; text-align: center; margin-top: 20px; font-size: 15px;">Tahun Akademik 2023/2024 - PMB Reguler Rapor Gelombang 1</p>
                        <p style="color: white; text-align: center; margin-top: 20px; font-size: 15px;">1 September 2022 - 31 Oktober 2022</p>
                    </div>
                    <div class="card-detail">
                        <div class="row">
                            <div class="col-sm-6 mt-3" >
                                <h6 style="font-size: 13px; margin-left: 15px;">Periode Pendaftaran</h6>
                                <p style="font-size: 13px; margin-left: 15px;">2023/2024 Gasal</p>
                            </div>
                            <div class="col-sm-6 mt-3" >
                                <h6 style="font-size: 13px; margin-left: 15px;">Gelombang</h6>
                                <p style="font-size: 13px; margin-left: 15px;">Gelomgbang 1</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mt-3" >
                                <h6 style="font-size: 13px; margin-left: 15px; ">Sistem Kuliah</h6>
                                <p style="font-size: 13px; margin-left: 15px;">Reguler</p>
                            </div>
                            <div class="col-sm-6 mt-3" >
                                <h6 style="font-size: 13px; margin-left: 15px;">Formulis</h6>
                                <p style="font-size: 13px; margin-left: 15px;">BERBAYAR</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mb-2" >
                            <a href="pmb.php" class="btn btn-warning rounded-2" style="margin-left: 10px;">Lihat Detail</a>
                            </div>
                            <div class="col-sm-6 mb-2">
                            <a href="pmb.php" class="btn btn-primary rounded-2" style="margin-left: 7px;">Daftar</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Card 2 -->
            <div class="col-sm-4" style="margin-right:-100px;">
                <div class="card" style="width:300px; margin: 20px;">
                    <div class="card-header rounded-3" style="background-color:#1d6baf; width: 300px; height:250px;">
                        <h4 style="color: white; text-align: center; margin-top: 20px;">PMB - REGULER PERINGKAT KELAS</h4>
                        <p style="color: white; text-align: center; margin-top: 20px; font-size: 15px;">Tahun Akademik 2023/2024 - PMB - Reguler Peringkat Kelas Gelombang 1</p>
                        <p style="color: white; text-align: center; margin-top: 20px; font-size: 15px;">31 Agustus 2022 - 31 Oktober 2022</p>
                    </div>

                    <div class="card-detail">
                        <div class="row">
                            <div class="col-sm-6 mt-3" >
                                <h6 style="font-size: 13px; margin-left: 15px;">Periode Pendaftaran</h6>
                                <p style="font-size: 13px; margin-left: 15px;">2023/2024 Gasal</p>
                            </div>
                            <div class="col-sm-6 mt-3" >
                                <h6 style="font-size: 13px; margin-left: 15px;">Gelombang</h6>
                                <p style="font-size: 13px; margin-left: 15px;">Gelomgbang 1</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 mt-3" >
                                <h6 style="font-size: 13px; margin-left: 15px; ">Sistem Kuliah</h6>
                                <p style="font-size: 13px; margin-left: 15px;">Reguler</p>
                            </div>
                            <div class="col-sm-6 mt-3" >
                                <h6 style="font-size: 13px; margin-left: 15px;">Formulis</h6>
                                <p style="font-size: 13px; margin-left: 15px;">BERBAYAR</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 mb-2" >
                                <a href="pmb.php" class="btn btn-warning rounded-2" style="margin-left: 10px;">Lihat Detail</a>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <a href="pmb.php" class="btn btn-primary rounded-2" style="margin-left: 7px;">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card 3 -->
            <div class="col-sm-4">
                <div class="card" style="width:300px; margin: 20px;">
                    <div class="card-header rounded-3" style="background-color:#1d6baf; width: 300px; height:250px;">
                        <h4 style="color: white; text-align: center; margin-top: 20px;">PMB - REGULER UJIAN SARINGAN MASUK</h4>
                        <p style="color: white; text-align: center; margin-top: 20px; font-size: 15px;">Tahun Akademik 2023/2024 - PMB Reguler Ujian Saringan Masuk Gelombang 1</p>
                        <p style="color: white; text-align: center; margin-top: 20px; font-size: 15px;">1 September 2022 - 31 Oktober 2022</p>
                    </div>
                    
                    <div class="card-detail">
                        <div class="row">
                            <div class="col-sm-6 mt-3" >
                                <h6 style="font-size: 13px; margin-left: 15px;">Periode Pendaftaran</h6>
                                <p style="font-size: 13px; margin-left: 15px;">2023/2024 Gasal</p>
                            </div>
                            <div class="col-sm-6 mt-3" >
                                <h6 style="font-size: 13px; margin-left: 15px;">Gelombang</h6>
                                <p style="font-size: 13px; margin-left: 15px;">Gelomgbang 1</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 mt-3" >
                                <h6 style="font-size: 13px; margin-left: 15px; ">Sistem Kuliah</h6>
                                <p style="font-size: 13px; margin-left: 15px;">Reguler</p>
                            </div>
                            <div class="col-sm-6 mt-3" >
                                <h6 style="font-size: 13px; margin-left: 15px;">Formulis</h6>
                                <p style="font-size: 13px; margin-left: 15px;">BERBAYAR</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 mb-2" >
                                <a href="pmb.php" class="btn btn-warning rounded-2" style="margin-left: 10px;">Lihat Detail</a>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <a href="pmb.php" class="btn btn-primary rounded-2" style="margin-left: 7px;">Daftar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 mt-5 " style="color:white;">
                    <h4>Link Cepat</h4>
                    <hr>
                    <ul>
                        <li>UNIVERSITAS PEMBANGUNAN JAYA</li>
                        <li>FAKULTAS FTD</li>
                        <li>FAKULTAS FHB</li>
                    </ul>
                </div>

                <div class="col-sm-4 mt-5" style="color:white">
                    <h4>Informasi Pendaftaran</h4>
                    <hr>
                    <ul style="font-size: 15px; ">
                        <li>Alur Pembayaran Tagihan Menggunakan Virtual Account</li>
                        <li>Alur Pendaftaran Awal Dan Pembayaran Formulis Menggunakan Virtual Account</li>
                        <li>Informasi Penerimaan Beasiswa Mahasiswa Baru - UPJ</li>
                    </ul>
                </div>

                <div class="col-sm-4 mt-5 mb-5" style="color:white;">
                    <img src="https://cms.sevima.com//uploads/logoaplikasi/864.jpg" alt="logo upj" style="width: 10%; margin-bottom: 8px;"> 
                    <text style="font-weight: bold; font-size: 20px;">Universitas Pembangunan Jaya</text>
                    <p style="text-align: justify; font-size:12px;">Universitas Pembangunan Jaya (UPJ) adalah sebuah perguruan tinggi swasta di daerah Bintaro yang berdiri pada tahun 2011 dan didukung oleh kelompok usaha Pembangunan Jaya. Kelompok usaha Pembangunan Jaya memiliki 17 usaha yang bergerak dibidang properti, manufaktur, konsultan manajemen, konsultan desain, kontraktor, pariwisata/rekreasi, trading, mekanikal & elektrikal dan pendidikan. UPJ mengadopsi nilai-nilai Jaya yang merupakan nilai-nilai yang disarikan dari pengalaman lebih dari 50 tahun jatuh bangun kelompok usaha Pembangunan Jaya. Nilai-nilai ini telah teruji oleh waktu dan menjadi pegangan dan panduan bagi segenap sivitas akademika UPJ.</p>

                    <ul style="font-size: 13px;">
                        <li>
                            <i class="fa fa-map-marker shape sm new-angle" style="color: white;"></i>
                            <span style="color: white;">Jl. Cendrawasih Raya Blok B7/P Bintaro Jaya, Sawah Baru, Ciputat, Tangerang Selatan 15413</span>
                        </li>
                        <li>
                            <i class="fa fa-phone shape sm new-angle" style="color: white;"></i>
                            <span style="color: white;">Telp: 021-7455555, HP: 0812-1295-3000</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope" style="color: white;"></i>
                            <span style="color: white;">info@upj.ac.id</span>
                        </li>
                        <li>
                            <i class="fa-brands fa-facebook-f" style="color: white;"></i>
                            <span style="color: white;">universitas pembangunan jaya</span>
                        </li>
                        <li>
                            <i class="fa-brands fa-twitter" style="color: white;"></i>
                            <span style="color: white;">upj_bintaro</span>
                        </li>
                        <li>
                            <i class="fa-brands fa-instagram" style="color:white;"></i>
                            <span style="color: white;">upj_bintaro</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>