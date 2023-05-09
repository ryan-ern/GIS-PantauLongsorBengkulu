<?php
  include ("connection/validate.php");
  include ("connection/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <style>
        body {
            background: #d8e8e6;
        }
        </style>
    </head>

    <body>
        <h3>EDIT INFO TERKINI</h3>
        <form action="?page=Edit-Data" method="POST">
            <?php
            $id = @$_GET['id'];
      $query = "SELECT * FROM tb_peringatan WHERE id = $id";
      $result = mysqli_query($koneksi, $query);
      while ($data = mysqli_fetch_assoc($result)) :
    ?>
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="form-group">
                <textarea class="form-control" id="pesan" name="pesan" rows="4"
                    required><?= $data['pesan'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-success" name="editinfo">Edit Info</button>
            <button type="reset" class="btn btn-danger">Batal</button>
            <button type="button" class="btn btn-primary" onClick="window.location.href='?page=Beranda'">Keluar</button>
            <?php
    endwhile;
    mysqli_close($koneksi);
    ?>
        </form>
    </body>

</html>