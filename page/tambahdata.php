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
        <h3>TAMBAH DATA KEJADIAN LONGSOR</h3>
        <form action="?page=Tambah-Data" method="POST">
            <div class="form-group">
                <label for="kabupaten">Kabupaten:</label>
                <input type="text" class="form-control" id="kabupaten" name="kabupaten" required>
            </div>

            <div class="form-group">
                <label for="kecamatan">Kecamatan:</label>
                <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>

            <div class="form-group">
                <label for="korban_jiwa">Total Korban Jiwa:</label>
                <input type="number" class="form-control" id="korban_jiwa" name="korban" required>
            </div>

            <div class="form-group">
                <label for="latitude">Latitude:</label>
                <input type="text" class="form-control" id="latitude" name="latitude" required>
            </div>

            <div class="form-group">
                <label for="Longitude">Longitude:</label>
                <input type="text" class="form-control" id="longitude" name="longitude" required>
            </div>

            <button type="submit" class="btn btn-success" name="tambah">Tambah Data</button>
            <button type="button" class="btn btn-primary" onClick="window.location.href='?page=Data'">Keluar</button>
        </form>

    </body>

</html>