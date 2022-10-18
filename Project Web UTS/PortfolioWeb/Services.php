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
        <!-- external link -->
        <link rel="stylesheet" href="servicestyle.css">
        <title>Services</title>
    </head>
    <body>
    <?php 
    require_once("navbar.php");
    ?>

    <div class="container mt-5">
        <h2>Services</h2>
        <div class="row">
        <?php 
                include("koneksi.php");
                if(!koneksi()){
                    die("Koneksi Error");
                }

                $querySQL = "SELECT * FROM services";
                $execQuerySQL = mysqli_query(koneksi(),$querySQL);

                if (mysqli_num_rows($execQuerySQL) > 0){
                    while($row = mysqli_fetch_assoc($execQuerySQL)){
                    ?> 
                    <div class="col-lg-5" style="margin-left: 0px;">
                        <div class="border">
                            <div class="card" style="width:260px">
                                <?= $row['icon']; ?>
                                <div class="card-body">
                                    <h4 class="card-title"><?= $row['judul'];?></h4>
                                    <p><?= $row['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }
                }  
            ?>
        </div>
    </div>
    
    </body>
</html>