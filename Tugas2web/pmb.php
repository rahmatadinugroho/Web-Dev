<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <title>Pendaftaran - PMB UPJ</title>

    <style>
        h5{
            text-align: center;
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
    <div class="p-10 bg-secondary ">
        <div class="container">
            <div class="row mt-0">
                <div class="col-md-12 rounded bg-white p-5 mt-5">

                <!-- Jalur Pendaftaran -->
                <form method="post" action="konfirmasipmb.php">            
                    <h5 class="mt-5 bg-primary p-2 rounded-3 text-white">Jalur Pendaftaran</h5>
                    <div class="form-group mt-5">
                        <select class="form-select" name="jalur_pendaftaran" required>
                            <option>PMB - Reguler Rapor</option>
                            <option>PMB - Reguler Peringkat Kelas</option>
                            <option>PMB - Reguler Ujian Saringan Masuk</option>
                        </select>
                    </div>

                    <!-- Data Diri -->
                    <h5 class="mt-5 bg-primary p-2 rounded-3 text-white">Identitas Diri</h5>
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="first">Nama Lengkap*</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Isi Nama Lengkap Anda" id="first" name="nama" required>
                            </div>
                        </div>

                        <div class="col-md-6">   
                            <div class="form-group">
                                <label>Jenis Kelamin*</label>                               
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" id="jk" value="Laki-laki" required> Laki-laki
                                    </label>
                                    
                                    <label class="ms-1">
                                        <input type="radio" name="jk" id="jk" value="Perempuan"> Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nohp">No. HP*</label>
                                <input type="number" class="form-control form-control-sm" placeholder="08XXXXXXXXXX" id="nohp" name="no_hp" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Alamat Email*</label>
                                <input type="text" class="form-control form-control-sm" placeholder="email@domai.com" id="email" name="email" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <label for="tgl_lahir">Tanggal Lahir*</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                                <input type="date" class="form-control form-control-sm" placeholder="" id="tgl_lahir" name="tgl_lahir" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir*</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Isi Tempat Lahir Anda" id="tempat_lahir" name="tempat_lahir" required>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="kewarganegaraan">Kewarganegaraan*</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Kewarganegaraan Anda" id="kewarganegaraan" name="kewarganegaraan" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik">NIK/No. KTP*</label>
                                <input type="number" class="form-control form-control-sm" placeholder="Isi No. KTP Anda" id="nik" name="nik" required>
                            </div>
                        </div>
                    </div>

                    <!-- Asal Sekolah -->
                    <h5 class="mt-5 bg-primary p-2 rounded-3 text-white">Asal Sekolah</h5>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label for="provinsi">Tahun Lulus*</label>
                                <input type="number" class="form-control form-control-sm" placeholder="2XXX" id="provinsi" name="tahun_lulus" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="npsn">NPSN*</label>
                                <input type="number" class="form-control form-control-sm" placeholder="Isi NPSN Anda" id="npsn" name="npsn" required>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="jurusan">Jurusan Sekolah*</label>
                                <input type="text" class="form-control form-control-sm" placeholder="Jurusan Anda Saat di Sekolah" id="jurusan" name="jurusan" required>
                            </div>
                        </div>
                    </div>

                    <!-- Program Studi -->
                    <h5 class="mt-5 bg-primary p-2 rounded-3 text-white">Pilih Program Studi yang Diinginkan</h5>
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="form-group">
                                <select class="form-select" name="prodi" required>
                                    <option selected="true" disabled="disabled">Pilih Program Studi</option>
                                    <option>Manajemen</option>
                                    <option>Psikologi</option>
                                    <option>Akuntansi</option>
                                    <option>Ilmu Komunikasi</option>
                                    <option>Informatika</option>
                                    <option>Sistem Informasi</option>
                                    <option>Desain Komunikasi Visual</option>
                                    <option>Desain Produk</option>
                                    <option>Teknik Sipil</option>
                                    <option>Arsitektur</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-5 btn-lg">Submit</button>
                </form>


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