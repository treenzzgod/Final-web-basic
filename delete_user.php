<?php
    if($_GET['id_user']){
        include 'koneksi.php';
        $id_user = $_GET['id_user'];
        $query = "DELETE FROM users WHERE id_user= $id_user";
        $result = mysqli_query($koneksi, $query);
        if($result){
            header('Location: index.php');
        }else{
            echo "Gagal menghapus data";
        }
    }
