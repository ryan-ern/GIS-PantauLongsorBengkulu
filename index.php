<?php
  include ("connection/validate.php");
  include ("connection/koneksi.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <title><?php
    $title = @$_GET["page"];
    if (!empty($title)) {
      if ($title == "Beranda") {
        echo "Pantau Longsor Bengkulu";
      } elseif ($title == "Data") {
        echo "Halaman Data";
      } elseif ($title == "Info-Longsor") {
        echo "Halaman Info Longsor";
      } elseif ($title == "Peta") {
        echo "Halaman Peta";
      } else {
        echo "404 Not Found";
      }
    } else {
      echo "Pantau Longsor Bengkulu";
    }
    ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Vertical navbar -->
    <div class="vertical-nav bg-white" id="sidebar">
      <div class="py-2 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center">
          <div class="media-body">
            <h4 class="m-0">
              PANTAU LONGSOR BENGKULU
            </h4>
          </div>
        </div>
      </div>

      <ul class="nav flex-column bg-white mb-0">
        <li class="nav-item">
          <a href="?page=Beranda" class="nav-link text-dark">
            <i class="bi bi-house-door-fill mr-3 text-success fa-fw"></i>
            Beranda
          </a>
          <hr />
        </li>

        <li class="nav-item">
          <a href="?page=Peta" class="nav-link text-dark">
            <i class="bi bi-geo-alt-fill mr-3 text-success fa-fw"></i>
            Peta
          </a>
          <hr />
        </li>
        <li class="nav-item">
          <a href="?page=Data" class="nav-link text-dark">
            <i class="bi bi-table mr-3 text-success fa-fw"></i>
            Data
          </a>
          <hr />
        </li>
        <li class="nav-item">
          <a href="?page=Info-Longsor" class="nav-link text-dark">
            <i class="bi bi-journals mr-3 text-success fa-fw"></i>
            Info Longsor
          </a>
          <hr />
        </li>
        <?php
        if (isset($_SESSION['id']) && $_SESSION['id'] == '1') {
        ?>
        <li class="nav-item">
          <a href="?page=Data" class="nav-link text-dark">
            <i class="bi bi-table mr-3 text-success fa-fw"></i>
            Aksi Data
          </a>
          <hr />
        </li>
        <?php
        }
        ?>
      </ul>
    </div>
    <!-- End vertical navbar -->

    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
      <!-- Toggle button -->
      <button
        id="sidebarCollapse"
        type="button"
        class="btn btn-light bg-white shadow-sm px-4 mb-4"
      >
        <i class="bi bi-menu-button-wide-fill text-success fa-fw"></i>
        <small class="text-uppercase font-weight-bold">Menu</small>
      </button>
      <?php
        if (isset($_SESSION['id']) && $_SESSION['id'] == '1') {
        ?>
      <a href="page/logout.php">
      <button
        type="button"
        class="btn btn-light bg-white shadow-sm px-4 mb-4 float-right"
      >
        <i class="bi bi-person-circle text-success fa-fw"></i>
        
        <small class="text-uppercase font-weight-bold">Logout</small>
      </button>
      </a>
      <?php
        }else{
      ?>
      <a href="page/login.php">
      <button
        type="button"
        class="btn btn-light bg-white shadow-sm px-4 mb-4 float-right"
      >
        <i class="bi bi-person-circle text-success fa-fw"></i>
        
        <small class="text-uppercase font-weight-bold">Login</small>
      </button>
      </a>
      <?php
    }
    ?>
      <div class="col-lg-12">
        <?php
        $page = @$_GET["page"];
        if (!empty($page)) {
          switch ($page) {
            case "Beranda":
              include "page/beranda.php";
              break;
            case "Peta":
              include "page/peta.php";
              break;
            case "Data":
              include "page/data.php";
              break;
            case "Info-Longsor":
              include "page/info.php";
              break;
            default:
              include "page/404.php";
              break;
          }
        } else {
          include "page/beranda.php";
        }
        ?>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="main.js"></script>
  </body>
</html>
