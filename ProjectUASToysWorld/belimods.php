<?php 
include "koneksi.php";

$id =$_GET['id'];

$produk = select("SELECT * FROM shopmods WHERE id = $id")[0];


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toys World - Checkout</title>
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="Home.php" style="font-weight: bold; font-size: x-large;
                font-family: 'Lexend', sans-serif;">
                    <img src="./images/favicon.ico" alt="" style="margin-right: 5px;">
                    Toys World
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <!-- home button -->
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <!-- about button -->
                        <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
                        <!-- drop down shop -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
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
        <header class="bg-dark py-5 mt-5">
            <div class="container px-4 px-lg-5 my-6">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Toys World</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Anime & Figure World</p>
                </div>
            </div>
        </header>

        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>    
                            <th scope="col">Gambar Produk</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row"><?= $produk['id'];?></th>
                            <td><img src="./images/<?= $produk['gambar'];?>" alt="" style="max-width: 20%;"></td>
                            <td><?= $produk['proname'];?></td>
                            <td>Rp. <?= number_format($produk['harga'],0,',','.');?></td>
                            
                            </tr>
                        </tbody>
                    </table>
                    <span style="font-weight: bold; margin-bottom:20px;">Total bayar: Rp. <?= number_format($produk['harga'],0,',','.');?></span>

                </div>
                <a href="data-diri.php?id=<?= $produk['id'];?>" class="btn btn-success mb" style="margin-bottom: 20px; float:right; width: 200px">Checkout</a>
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
