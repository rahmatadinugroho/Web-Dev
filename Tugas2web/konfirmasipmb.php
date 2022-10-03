<?php
    $jalur_pendaftaran = $_POST['jalurpendaftaran']; 
    $nama = $_POST['nama'];
    $jk = $_POST['gender'];
    $no_hp = $_POST['nohp'];
    $email = $_POST['email'];
    $tgl_lahir = $_POST['tgllahir'];
    $tempat_lahir = $_POST['tmplahir'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $nik = $_POST['nik'];
    $tahun_lulus = $_POST['tahunlulus'];
    $npsn = $_POST['npsn'];
    $jurusan = $_POST['jurusan'];
    $prodi = $_POST['prodi'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <title>Berhasil</title>

    <style>
        footer{
            background-color: #222222;
        }
    </style>

</head>
<body>
    <?php 
        require_once "menu.php";
    ?>
    <!-- CONTENT -->
    <div class="p-10 bg-secondary">
        <div class="container">
            <div class="row mt-0">
                <div class="col-md-12 rounded bg-white p-5 mt-5">
                    <div class="container">
                        <h3>Selamat! Anda Telah Berhasil Mendaftar</h3>
                        <p>Silahkan Tunggu Kabar Dari Kami</p>
                        
                        
                        <h5 class="mt-5 bg-success p-2 text-white">Data yang Terdaftar</h5>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th colspan="2" class="bg-primary text-white">Jalur Pendaftaran yang Dipilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>Jalur Pendaftaran</b></td>
                                    <td><?= $jalur_pendaftaran ?></td>
                                </tr>
                                <tr>
                                    <th colspan="2" class="bg-primary text-white">Identitas Diri</th>
                                </tr>
                                <tr>
                                    <td><b>Nama</b></td>
                                    <td><?= $nama ?></td>
                                </tr>
                                <tr>
                                    <td><b>Jenis Kelamin</b></td>
                                    <td><?= $jk ?></td>
                                </tr>
                                <tr>
                                    <td><b>No. HP</b></td>
                                    <td><?= $no_hp ?></td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td><?= $email ?></td>
                                </tr>
                                <tr>
                                    <td><b>Tanggal Lahir</b></td>
                                    <td><?= $tgl_lahir ?></td>
                                </tr>
                                <tr>
                                    <td><b>Tempat Lahir</b></td>
                                    <td><?= strtoupper($tempat_lahir) ?></td>
                                </tr>
                                <tr>
                                    <td><b>Kewarganegaraan</b></td>
                                    <td><?= strtoupper($kewarganegaraan) ?></td>
                                </tr>
                                <tr>
                                    <td><b>NIK</b></td>
                                    <td><?= $nik ?></td>
                                </tr>
                                <tr>
                                    <th colspan="2" class="bg-primary text-white">Asal Sekolah</th>
                                </tr>
                                <tr>
                                    <td><b>Tahun Lulus</b></td>
                                    <td><?= strtoupper($tahun_lulus) ?></td>
                                </tr>
                                <tr>
                                    <td><b>NPSN</b></td>
                                    <td><?= $npsn ?></td>
                                </tr>
                                <tr>
                                    <td><b>Jurusan</b></td>
                                    <td><?= strtoupper($jurusan) ?></td>
                                </tr>
                                <tr>
                                    <th colspan="2" class="bg-primary text-white">Program Studi yang Dipilih</th>
                                </tr>
                                <tr>
                                    <td><b>Program Studi</b></td>
                                    <td><?= $prodi ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

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