<?php
include 'koneksi.php';
if (isset($_POST['Submit'])) {
    $id_task = $_POST['id_task'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];
    $query = "UPDATE tasks SET title = '$title', description = '$description', status = '$status' WHERE id_task = '$id_task'";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        header('Location: index.php');
    } else {
        echo "Gagal mengupdate data";
    }
}
