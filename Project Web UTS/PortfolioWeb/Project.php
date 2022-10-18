<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!-- External css -->
    <link rel="stylesheet" href="projectstyle.css">
    <title>My Projects</title>

    <style>
    .btn{
    font-weight: 600;
    font-family: 'Inter', sans-serif;
    }
    </style>
</head>
<body>
    <?php 
    require_once("navbar.php");
    ?>

    <div class="container-fluid mt-3">
        <h2>My Projects</h2>

        <div class="row">
            <?php 
                include("koneksi.php");
                if(!koneksi()){
                    die("Koneksi Error");
                }

                $querySQL = "SELECT * FROM projects";
                $execQuerySQL = mysqli_query(koneksi(),$querySQL);
                if (mysqli_num_rows($execQuerySQL) > 0){
                    while($row = mysqli_fetch_assoc($execQuerySQL)){
                    ?> 
                    <div class="col-lg-3">
                        <a href="<?= $row['link'];?>">
                        <div class="border">
                            <div class="card">
                                <img class="card-img-top" src="./img/<?= $row['img']; ?>" alt="Card image" style="width: 60%;">
                                <div class="card-body">
                                    <h4 class="card-title"><?= $row['judul'];?></h4>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <?php 
                    }
                } 
            ?>
        </div>

</body>
</html>