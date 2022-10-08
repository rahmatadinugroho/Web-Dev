<?php 
$name = ("Rahmat Adi Nugroho");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        footer {
            background-color: #D9D9D9;
            margin-top:50px;
        }
    </style>
</head>
<body>
    <?php 
    require_once ("navbar.php");    
    ?>

    <div class="container-fluid" >
        <div class="row">
            <div class="col-sm-6" style=" margin-top: 100px; margin-left: 50px;">
                <h3 style="margin-bottom: -10px;">Hi,</h3>
                <h3>I Am 
                <a href="About.php">
                    <button type="button" class="btn btn-transparant mb-2" style="font-weight: 450; font-size: 40px; color:#f25cea; margin-left:-10px;"><?= $name;?></button>
                </a>
                <p style="text-align:justify; font-size:15px;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Faucibus nisl tincidunt eget nullam non nisi est. Urna neque viverra justo nec ultrices dui sapien eget. Quis hendrerit dolor magna eget. Arcu ac tortor dignissim convallis aenean et tortor at. Egestas fringilla phasellus faucibus scelerisque eleifend. Orci a scelerisque purus semper eget duis at tellus at. Eros donec ac odio tempor orci. Donec ultrices tincidunt arcu non sodales neque. Interdum velit laoreet id donec. Vel facilisis volutpat est velit. Nulla facilisi etiam dignissim diam quis. Etiam sit amet nisl purus. Tellus integer feugiat scelerisque varius morbi enim nunc faucibus. Nulla posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus. Nec nam aliquam sem et tortor consequat id. Nunc id cursus metus aliquam eleifend. Nullam vehicula ipsum a arcu cursus vitae congue mauris rhoncus. Arcu dictum varius duis at consectetur lorem donec massa. Vitae elementum curabitur vitae nunc sed velit dignissim sodales ut. Eu turpis egestas pretium aenean pharetra magna ac placerat. Sed enim ut sem viverra aliquet eget sit amet.
                </p>
                </h3>

                <a href="About.php" style="float:right;">
                    <button type="button" class="btn btn-outline-primary btn-lg">
                        About Me 
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </a>
            </div>

            <div class="col-sm-5 mt-5">
                <img src="profile-bg.png" alt="bg-profile" style="width:65%; float:right; ">
            </div> 
        </div>
    </div>

    <?php
    require_once ("footer.php");
    ?>
</body>
</html>