<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Gundam</title>
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
                    <h1 class="display-4 fw-bolder">Admin Data Gundam</h1>
                </div>
            </div>
        </header>

        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-6">
                <a href="insert-mods.php" class="btn btn-primary mb-3" style="font-size: larger; font-weight:600;">Input Data</a>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php 
                        include "koneksi.php";
    
                        $querySQL = "SELECT * FROM shopmods";
                        $execQuerySQL = mysqli_query($conn,$querySQL);
                        
                        if (mysqli_num_rows($execQuerySQL) > 0){
                            while($row = mysqli_fetch_assoc($execQuerySQL)){
                    ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="./images/<?= $row['gambar']; ?>">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $row['proname']; ?></h5>
                                    <!-- Product price-->
                                    Rp. <?= number_format($row['harga'],0,',','.'); ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="button" style="margin-left: 25px; padding-bottom: 15px;">
                                <a href="edit-mods.php?id=<?= $row['id']; ?>" class="btn btn-success" style="margin: 5px">Edit Data</a>
                                <a href="hapus-mods.php?id=<?= $row['id']; ?>" class="btn btn-danger" style="margin: 5px" onclick="return confirm(Ingin m   enghapus produk ?);">Hapus Data</a>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                    }
                    ?>    
                </div>
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
