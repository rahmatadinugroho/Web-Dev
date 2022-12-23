<?php 
    
    include "koneksi.php";

    function hapus($id){
        global $conn;

        // query hapus data produk
        $query = "DELETE FROM shoppods WHERE id = $id";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

   // menerima id barang yang dipilih
    $id = $_GET["id"];

    if(hapus($id) > 0){
        echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'data-pods.php';
        </script>
        ";
    } else{
        echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'data-pods.php';
        </script>
        ";
    }


?> 


    
