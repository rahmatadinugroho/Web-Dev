<?php 
$name = "Rahmat Adi Nugroho";
$Bdate = "12 Desember 2001";
$age = 20;
$gender = "Male";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        footer {
            background-color: #D9D9D9;
            margin-top:50px;
        }
        #profile {
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <?php 
    require_once ("navbar.php");
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-5 mt-5">
                <img src="profile-bg2.png" alt="bg-profile2" style="width:65%; float: left;">
            </div>
            <div class="col-sm-7 mt-5">
                <h4 id="profile">PROFILE</h4>

                <table>
                    <tr>
                        <td>Name</td>
                        <td></td>
                        <td> :</td>
                        <td></td>
                        <td><?= $name;?></td>
                    </tr>
                    <tr>
                        <td>Birth Date</td>
                        <td></td>
                        <td> :</td>
                        <td></td>
                        <td><?= $Bdate;?></td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td></td>
                        <td> :</td>
                        <td></td>
                        <td><?= $age;?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td></td>
                        <td> :</td>
                        <td></td>
                        <td><?= $gender;?></td>
                    </tr>
                </table>
            </div>

        </div>

        
    </div>

    <?php 
    require_once ("footer.php");
    ?>
</body>
</html>