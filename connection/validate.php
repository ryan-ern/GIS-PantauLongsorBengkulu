<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $user = isset($_POST['username']) ? $_POST['username'] : '';
    $pw = isset($_POST['password']) ? $_POST['password'] : '';

    if (!empty($user) && !empty($pw)) {
        $user = mysqli_real_escape_string($koneksi, $user);
        $pw = mysqli_real_escape_string($koneksi, $pw);
        $pw = md5($pw);

        $query = "SELECT * FROM tb_login WHERE username='$user' AND password='$pw'";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            $fetch = mysqli_fetch_array($result);
            if (!empty($fetch['id'])) {
                $_SESSION['id'] = $fetch['id'];
                $_SESSION['username'] = $fetch['username'];
                header("location: ../index.php");
                exit;
            } else {
                echo "<script>alert('Username atau Password salah');</script>";
                echo "<script>window.location.href='../page/login.php';</script>";
            }
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    }
}
?>