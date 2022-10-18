<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!-- external css -->
    <link rel="stylesheet"href="homestyle.css">
    <title>Home</title>

</head>
<body>
    <?php 
    require_once("navbar.php");
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1>I'am <a href="About.php" id="nama">Rahmat Adi Nugroho</a></h1>
                <p>Computer Science Student | Front-End <br> Web Development | UI/UX Design </p>
                
                <!-- button -->
                    <a href="About.php">
                        <button  class="btn btn1" style="color:#ffff;">MORE ABOUT ME</button>
                    </a>
                    <a href="Contact.php" class="gradient">
                        <button  class="btn btn2">
                            <text id="hire">HIRE ME</text>
                        </button>
                    </a>
            </div>

            <!-- Image -->
            <div class="col-sm-6">
                <img src="./img/pic1.png" alt="" style="width: 65%; margin-left:70px; margin-top:-220px;">
            </div>

        </div>

        <div id="follow">
            <h5>Follor Me:</h5>
            <?php 
                    include("koneksi.php");
                    if(!koneksi()){
                        die ("Koneksi Error");
                    }
                    $querySQL = "SELECT * FROM follow";
                    $execQuerySQL = mysqli_query(koneksi(), $querySQL);

                    if (mysqli_num_rows($execQuerySQL) > 0){
                        while($row = mysqli_fetch_assoc($execQuerySQL)){
                        ?> 
                        <a href="<?= $row['link']; ?>">
                            <?= $row['logo']; ?>
                        </a>
                        <?php 
                        }
                    }
                ?>
        </div>
    </div>
   
    <footer>
        <div class="footer" style="text-align: center; margin-top:50px;margin-bottom:20px;
        background-image: linear-gradient(#00C2FF,#8862E3,#FF0ECA); -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; font-weight:bold; font-family:'Inter', sans-serif;">
            copyright 2022 by Rahmat Adi Nugroho
        </div>
    </footer>
</body>
</html>