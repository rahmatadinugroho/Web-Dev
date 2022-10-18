<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
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
    <link rel="stylesheet"href="aboutstyle.css">
    <title>About Me</title>

</head>

<body>
    <?php 
    require_once("navbar.php");
    ?>

    <div class="container-fluid">
        <div class="profileimg">
            <img src="./img/pic2.png" alt="">
            <h3 id="quote">“ If You Choose To Stop Learning, It Means Death To Your Life ”</h3>
        </div>

        <div class="about">
            <h3 id="about">ABOUT ME</h3>
            <p>“I am a computer science student at Pembangunan Jaya University. I have an interest in Front-End Web Development and UI/UX Design. <br>In my free time I like to design some web interfaces and then try to implement them into programming“</p>
        </div>

        <div class="skills">
            <h3 id="skills">SKILLS</h3>

            <div class="container mt-4">
                <div class="probar1">
                    <h5>HTML</h5>
                    <div class="progress">
                        <div class="progress-bar" style="width:60%">60%</div>
                    </div>
                </div>
                <div class="probar2 mt-2">
                    <h5>CSS</h5>
                    <div class="progress">
                        <div class="progress-bar" style="width:40%">40%</div>
                    </div>
                </div>
                <div class="probar3 mt-2">
                    <h5>PHP</h5>
                    <div class="progress">
                        <div class="progress-bar" style="width:20%">20%</div>
                    </div>
                </div>
                <div class="probar4 mt-2">
                    <h5>Bootstrap 5</h5>
                    <div class="progress">
                        <div class="progress-bar" style="width:40%">40%</div>
                    </div>
                </div>
            </div>
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