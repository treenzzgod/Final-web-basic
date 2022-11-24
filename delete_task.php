<?php
    if($_GET['id_task']){
        include 'koneksi.php';
        $id_task = $_GET['id_task'];
        $query = "DELETE FROM tasks WHERE id_task = $id_task";
        $result = mysqli_query($koneksi, $query);
        if($result){
            header('Location: index.php');
        }else{
            echo "Gagal menghapus data";
        }
    }
?>