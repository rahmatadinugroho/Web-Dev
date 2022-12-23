<?php 
include "koneksi.php";

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $produk = $_POST['produk'];

    $sql = "INSERT INTO `buyer`(`id`, `nama`, `telp`, `email`, `alamat`, `produk`) VALUES (NULL,'$nama','$telp','$email','$alamat','$produk')";

    $result = mysqli_query($conn, $sql);
}




?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Diri</title>
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
                <a class="navbar-brand" href="Home.php" style="font-weight: bold; font-size: x-large; 
                font-family: 'Lexend', sans-serif;">
                <img src="./images/favicon.ico" alt="" style="margin-right: 5px;">
                Toys World
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <!-- home button -->
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="Home.php">Home</a></li>
                        <!-- about button -->
                        <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
                        <!-- drop down shop -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="shopMods.php">Gundam</a></li>
                                <li><a class="dropdown-item" href="shopPods.php">Action Figure Anime</a></li>
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
                    <h1 class="display-4 fw-bolder">Pengisian Data Diri</h1>
                </div>
            </div>
        </header>

        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    
                    <!-- Nama buyer  -->
                    <label for="nama" class="form-label mt-3">Nama:</label>
                    <div class="form-floating mb-2 ">
                        <input type="text" class="form-control" id="nama" placeholder="Input Nama Produk" name="nama">
                        <label for="nama">Nama anda</label>
                    </div>

                    <!-- no telp  -->
                    <label for="telp" class="form-label mt-3">No. telpon anda</label>
                    <div class="form-floating mb-2 ">
                        <input type="text" class="form-control" id="telp" placeholder="Input Nama Produk" name="telp">
                        <label for="telp">08xxxxxxxx</label>
                    </div>

                    <!-- email  -->
                    <label for="email" class="form-label mt-3">Email anda:</label>
                    <div class="form-floating mb-2 ">
                        <input type="text" class="form-control" id="email" placeholder="Input Nama Produk" name="email">
                        <label for="email">example@gmail.com</label>
                    </div>

                    <!-- alamat  -->
                    <label for="alamat" class="form-label mt-3">Alamat anda :</label>
                    <div class="mb-2">
                        <input type="text" class="form-control" id="alamat" placeholder="Input Nama Produk" name="alamat">
                    </div>
                    
                    <!-- Produk yang dibeli  -->
                    <label for="produk" class="form-label mt-3">Produk yang anda Beli:</label>
                    <div class="form-floating mb-2 ">
                        <input type="text" class="form-control" id="produk" placeholder="Input produk Produk" name="produk">
                        <label for="produk">Nama produk</label>
                    </div>

                    <button type="submit" class="btn btn-success" name="submit">Checkout</button>
                </form>

            </div>
                
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Toys World 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
