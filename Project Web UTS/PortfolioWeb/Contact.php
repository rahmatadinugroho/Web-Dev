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
    <!-- external css -->
    <link rel="stylesheet"href="contactstyle.css">
    <title>Contact Me</title>

</head>
<body>
    <?php 
    require_once("navbar.php");
    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <img src="./img/pic3.png" alt="">
            </div>
            <div class="col-sm-6">
                <h2>CONTACT ME</h2>
                <div class="contact">
                <?php 
                    include("koneksi.php");
                    if(!koneksi()){
                        die("Koneksi Error");
                    }

                    $querySQL = "SELECT * FROM contact";
                    $execQuerySQL = mysqli_query(koneksi(),$querySQL);

                    if (mysqli_num_rows($execQuerySQL) > 0){
                        while($row = mysqli_fetch_assoc($execQuerySQL)){
                        ?> 
                        <tr>
                            <td>
                                <?= $row['imglogo'];?>
                            </td>
                            <td><?= $row['isicontact'];?></td>
                            <br>
                        </tr>
                        <?php 
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer" style="text-align: center; margin-top:130px;margin-bottom:20px;
        background-image: linear-gradient(#00C2FF,#8862E3,#FF0ECA); -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; font-weight:bold; font-family:'Inter', sans-serif;">
            copyright 2022 by Rahmat Adi Nugroho
        </div>
    </footer>
</body>
</html>