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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    </head>

    <body>
        <h3>DATA RIWAYAT KEJADIAN LONGSOR</h3>
        <?php
      if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin') {
    ?>
        <a href="?page=Tambah-Data">
            <button type="button" class="btn btn-light bg-white shadow-sm px-3 py-2 mt-3 mb-2 float-left">
                <i class="bi bi-file-earmark-plus-fill text-success"></i>
                <small class="text-uppercase font-weight-bold">Tambah Data</small>
            </button>
        </a>
        <?php
      }
        ?>
        <div class="table-responsive">
            <table border="1" width="700px" cellpadding="4" cellspacing="2"
                class="table table-bordered table-dark table-striped-columns" style="color:black;">
                <thead>
                    <tr bgcolor="#00FF7F" align="center">
                        <th>No</th>
                        <th>Kabupaten</th>
                        <th>Kecamatan</th>
                        <th>Tanggal</th>
                        <th>Total Korban Jiwa</th>
                        <?php
           if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin') {
            ?>
                        <th>Aksi</th>
                        <?php
            }
            ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
      $query = "SELECT * FROM tb_data ORDER BY id DESC";
      $result = mysqli_query($koneksi, $query);
      $no = 1;
      while ($row = mysqli_fetch_assoc($result)) :
    ?>
                    <tr bgcolor="white" align="center">
                        <td><?= $no++ ?></td>
                        <td><?= $row['kabupaten'] ?></td>
                        <td><?= $row['kecamatan'] ?></td>
                        <td><?= $row['tanggal'] ?></td>
                        <td><?= $row['korban'] ?></td>
                        <?php
            if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin') {
            ?>
                        <td>
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <form action="?page=Hapus-Data" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <button type="submit" class="btn btn-danger btn-sm" name="hapus">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </div>
                                <div class="col-4">
                                    <a href="?page=Edit-Data&id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </div>
                            </div>

                        </td>
                        </td>
                        <?php
            }
            ?>
                    </tr>
                    <?php
    endwhile;
    mysqli_close($koneksi);
    ?>
                </tbody>
            </table>
        </div>
        <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
        </script>
    </body>

</html>