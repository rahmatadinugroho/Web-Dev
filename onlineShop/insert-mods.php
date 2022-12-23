<?php 
include "koneksi.php";

if(isset($_POST['submit'])){
    $proname    = $_POST['proname'];
    $deskripsi  = $_POST['deskripsi'];
    $harga      = $_POST['harga'];
    $gambar     = upload_file();

    // cek upload gambar
    if(!$gambar){
        return false;
    }

    $sql = "INSERT INTO `shopmods`(`id`, `proname`, `deskripsi`, `harga`, `gambar`) VALUES (NULL,'$proname','$deskripsi','$harga','$gambar')";

    $result = mysqli_query($conn, $sql);
}

// fungsi untuk upload file
function upload_file(){
    $namaFile   = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error      = $_FILES['gambar']['error'];
    $tmpName    = $_FILES['gambar']['tmp_name'];

    // cek file yg di upload
    $extensifileValid   = ['jpg', 'jpeg', 'png'];
    $extensifile        = explode('.', $namaFile);
    $extensifile        = strtolower(end($extensifile));

    // check format file
    if (!in_array($extensifile, $extensifileValid)) {
        // pesan gagal
        echo "<script>
                alert('Format File Tidak Valid');
                document.location.href = 'insert-mods.php';
            </script>";
        die();
    }

    // check ukuran file 2 mb
    if ($ukuranFile > 2048000) {
        // pesan gagal
        echo "<script>
                alert('Ukuran file maks. 2 MB');
                document.location.href = 'insert-mods.php';
            </script>";
        die();
    }

    // generate nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensifile;

    // pindahkan ke folder local
    move_uploaded_file($tmpName, 'images/'. $namaFileBaru);
    return $namaFileBaru;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Input Produk</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@600&display=swap" rel="stylesheet">
    </head>

    <body>
        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="admin-choose.php" style="font-weight: bold; font-size: x-large;
                font-family: 'Lexend', sans-serif;">
                    <img src="./images/favicon.ico" alt="" style="margin-right: 5px;">
                    Toys World Admin
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <!-- home button -->
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="admin-choose.php">Home</a></li>
                        <!-- drop down shop -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Product</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="data-mods.php">Gundam</a></li>
                                <li><a class="dropdown-item" href="data-pods.php">Action Figure Anime</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Header-->
        <header class="bg-dark py-4 ">
            <div class="container px-4 px-lg-5 my-6">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Admin Data gundam</h1>
                </div>
            </div>
        </header>

        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-6">
                <form action="" method="POST" enctype="multipart/form-data">

                    <!-- Nama Produk  -->
                    <label for="proname" class="form-label mt-3">Nama Produk :</label>
                    <div class="form-floating mb-2 ">
                        <input type="text" class="form-control" id="proname" placeholder="Input Nama Produk" name="proname">
                        <label for="proname">Nama Produk</label>
                    </div>

                    <!-- Deskripsi Produk  -->
                    <label for="deskripsi" class="form-label mt-3">Deskripsi Produk :</label>
                    <div class="form-floating mb-2 ">
                        <input type="text" class="form-control" id="deskripsi" placeholder="Input Nama Produk" name="deskripsi">
                        <label for="deskripsi">Desikripsi</label>
                    </div>

                    <!-- Harga Produk  -->
                    <label for="harga" class="form-label mt-3">Harga Produk :</label>
                    <div class="form-floating mb-2 ">
                        <input type="number" class="form-control" id="harga" placeholder="Input Nama Produk" name="harga">
                        <label for="harga">Harga Produk</label>
                    </div>

                    <!-- Gambar Produk  -->
                    <label for="gambar" class="form-label mt-3">Gambar Produk :</label>
                    <div class="mb-2">
                        <input type="file" class="form-control" id="gambar" placeholder="Input Nama Produk" name="gambar">
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                </form>

            </div>
                
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Cloudys 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
