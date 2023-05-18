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
        <h3>EDIT DATA KEJADIAN LONGSOR</h3>
        <form action="?page=Edit-Data" method="POST">
            <?php
            $id = @$_GET['id'];
      $query = "SELECT * FROM tb_data WHERE id = $id";
      $result = mysqli_query($koneksi, $query);
      while ($data = mysqli_fetch_assoc($result)) :
    ?>
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <div class="form-group">
                <label for="Kabupaten">Kabupaten:</label>
                <input type="text" class="form-control" id="Kabupaten" name="Kabupaten"
                    value="<?= $data['Kabupaten'] ?>" required>
            </div>

            <div class="form-group">
                <label for="Tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="Tanggal" name="Tanggal" value="<?= $data['Tanggal'] ?>"
                    required>
            </div>

            <div class="form-group">
                <label for="Keterangan">Keterangan:</label>
                <input type="text" class="form-control" id="Keterangan" name="Keterangan"
                    value="<?= $data['Keterangan'] ?>" required>
            </div>

            <div class="form-group">
                <label for="latitude">Latitude:</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="<?= $data['latitude'] ?>"
                    required>
            </div>

            <div class="form-group">
                <label for="Longitude">Longitude:</label>
                <input type="text" class="form-control" id="longitude" name="longitude"
                    value="<?= $data['longitude'] ?>" required>
            </div>

            <button type="submit" class="btn btn-success" name="edit">Edit Data</button>
            <button type="reset" class="btn btn-danger">Batal</button>
            <button type="button" class="btn btn-primary" onClick="window.location.href='?page=Data'">Keluar</button>
            <?php
    endwhile;
    mysqli_close($koneksi);
    ?>
        </form>
    </body>

</html>