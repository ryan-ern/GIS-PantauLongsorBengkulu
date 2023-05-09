<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

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
if (isset($_POST['tambah'])) {
    $kbptn = $_POST['kabupaten'];
    $kcmtn = $_POST['kecamatan'];
    $tgl = $_POST['tanggal'];
    $korban = $_POST['korban'];
    $lat = $_POST['latitude'];
    $long = $_POST['longitude'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_data (kabupaten, kecamatan, tanggal, korban, latitude, longitude) VALUES ('$kbptn', '$kcmtn', '$tgl', '$korban', '$lat', '$long')");
     if ($query) {
    mysqli_close($koneksi);
    echo "<script>alert('Berhasil Tambah Data'); window.location.href = '?page=Data';</script>";
    exit();
  } else {
    echo "<script>alert('Gagal Tambah Data');</script>";
  }
}

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $query = mysqli_query($koneksi, "DELETE FROM tb_data WHERE id='$id'");
    mysqli_close($koneksi);
    header("Location: ?page=Data");
}

if (isset($_POST['edit'])) {
  $id = $_POST['id'];
  $kbptn = $_POST['kabupaten'];
  $kcmtn = $_POST['kecamatan'];
  $tgl = $_POST['tanggal'];
  $korban = $_POST['korban'];
  $lat = $_POST['latitude'];
  $long = $_POST['longitude'];

  $query = "UPDATE tb_data SET kabupaten='$kbptn', kecamatan='$kcmtn', tanggal='$tgl', korban='$korban', latitude='$lat', longitude='$long' WHERE id='$id'";
  $result = mysqli_query($koneksi, $query);

  if ($result) {
    echo "<script>alert('Berhasil mengedit data'); window.location.href = '?page=Data';</script>";
    exit;
  } else {
    echo "<script>alert('Gagal mengedit data');</script>";
  }
}

if (isset($_POST['editinfo'])) {
  $id = $_POST['id'];
  $pesan = $_POST['pesan'];

  $query = "UPDATE tb_peringatan SET pesan='$pesan' WHERE id='$id'";
  $result = mysqli_query($koneksi, $query);

  if ($result) {
    echo "<script>alert('Berhasil Mengedit Info Terkini'); window.location.href = '?page=Beranda';</script>";
    exit;
  } else {
    echo "<script>alert('Gagal Mengedit Info Terkini');</script>";
  }
}
?>