<?php
include 'koneksi.php';
if (isset($_POST['Submit'])) {
    $id_user = $_POST['id_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "UPDATE users SET username = '$username', password = '$password' WHERE id_user = '$id_user'";
    $result = mysqli_query($koneksi, $query);   
    if ($result) {
        header('Location: index.php');
    } else {
        echo "Gagal mengupdate data";
    }
}
