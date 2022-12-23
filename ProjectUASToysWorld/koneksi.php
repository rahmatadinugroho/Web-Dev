<?php 

    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "cloudys";

    $conn = mysqli_connect($host,$username,$password,$db);

    if(!$conn){
        die("Koneksi gagal". mysqli_connect_error());
    }
    else{
        // echo "Koneksi berhasil";
    }

    // fungsi select
    function select($query){
        global $conn;

        $result = mysqli_query($conn, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }


?>