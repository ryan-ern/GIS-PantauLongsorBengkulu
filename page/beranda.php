<?php
  include ("connection/validate.php");
  include ("connection/koneksi.php");
?>
<!DOCTYPE html>
<html>

    <head>
        <title>Responive Carousel Slider</title>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto+Slab:wght@300&display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous" />

        <style>
        body {
            background-color: #d8e8e6;
        }

        .container {
            display: flex;
            max-width: 900px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cards {
            width: 100%;
            box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
            max-height: 200px;
            margin: 30px;
            background: #198754;
            box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
            border-radius: 15px;
            height: 250px;
            transition: all 0.3s;
            padding-top: 20px;
            padding-right: 40px;
            padding-left: 40px;
            background-image: url(https://github.com/indraphy/gambar/blob/main/Frame%201.png?raw=true);
            box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .cards h5 {
            background-color: rgb(255, 255, 255, 0.7);
            margin: 0 auto;
            padding: 15px;
            width: auto;
            color: #ff1808;
            text-align: center;
            border-radius: 10px;
        }

        .overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to bottom,
                    rgba(14, 29, 51, 0.8),
                    rgba(14, 29, 51, 0.2));

        }

        .hero-slider {
            max-width: 815px;
            margin: 0 auto;
            width: 100%;
            height: 60vh;
            overflow: hidden;
            border-radius: 10px;
        }

        .hero-slider .carousel-cell {
            width: 100%;
            height: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .hero-slider .carousel-cell .inner {
            position: relative;
            top: 65%;
            transform: translateY(-35%);
            color: white;
            text-align: center;
        }

        .hero-slider .carousel-cell .inner .subtitle {
            font-family: "Helvetica Neue";
            font-size: 2rem;
            line-height: 1.2em;
            font-weight: 200;
            letter-spacing: 3px;
            color: rgba(255, 255, 255, 0.5);
            margin-bottom: 5px;
            padding-left: 70px;
            padding-right: 70px;
        }

        @media screen and (max-width: 880px) {
            .hero-slider .carousel-cell .inner .subtitle {
                font-size: 1rem;
                top: 70%;
                transform: translateY(-30%);
            }
        }

        @media screen and (max-width: 680px) {
            .hero-slider .carousel-cell .inner .subtitle {
                font-size: 0.8rem;
                top: 70%;
                transform: translateY(-30%);
            }

            .cards h5 {
                font-size: 1rem;
            }
        }

        .hero-slider .carousel-cell .inner .btn {
            border: 1px solid #ffffff71;
            padding: 7px 9px;
            font-family: "Montserrat", sans-serif;
            font-size: 0.8rem;
            letter-spacing: 3px;
            color: #ffffff93;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .hero-slider .carousel-cell .inner .btn:hover {
            background: #fff;
            color: #000;
        }

        .hero-slider .flickity-prev-next-button {
            width: 80px;
            height: 80px;
            background: transparent;
        }

        .hero-slider .flickity-prev-next-button:hover {
            background: transparent;
        }

        .hero-slider .flickity-prev-next-button .arrow {
            fill: white;
        }

        .hero-slider .flickity-page-dots {
            bottom: 10px;
        }

        .hero-slider .flickity-page-dots .dot {
            width: 10px;
            height: 4px;
            opacity: 1;
            background: rgba(255, 255, 255, 0.5);
            border: 0 solid white;
            border-radius: 15px;
        }

        .hero-slider .flickity-page-dots .dot.is-selected {
            background: rgb(3, 142, 255);
            border: 0 solid rgb(41, 194, 255);
        }
        </style>
    </head>

    <body>
        <div class="hero-slider" data-carousel>
            <div class="carousel-cell" style="
          background-image: url(https://github.com/indraphy/gambar/blob/main/img-1.PNG?raw=true);
        ">
                <div class="overlay"></div>
                <div class="inner">
                    <h3 class="subtitle">
                        Banjir dan Tanah Longsor di Bengkulu Utara, Tim Gabungan Lakukan
                        Upaya Penanganan di Dua Kecamatan Terdampak
                    </h3>

                    <a href="https://www.bnpb.go.id/berita/banjir-dan-tanah-longsor-di-bengkulu-utara-tim-gabungan-lakukan-upaya-penanganan-di-dua-kecamatan-terdampak"
                        class="btn" target="_blank">Baca Berita</a>
                </div>
            </div>

            <div class="carousel-cell" style="
          background-image: url(https://github.com/indraphy/gambar/blob/main/img-2.PNG?raw=true);
        ">
                <div class="overlay"></div>
                <div class="inner">
                    <h3 class="subtitle">
                        Derita Korban Longsor Bengkulu: Fasum Rusak, Kebun Tertimbun hingga
                        Hidup Terisolir
                    </h3>

                    <a href="https://news.okezone.com/amp/2019/04/30/340/2049723/derita-korban-longsor-bengkulu-fasum-rusak-kebun-tertimbun-hingga-hidup-terisolir"
                        class="btn" target="_blank">Baca Berita</a>
                </div>
            </div>

            <div class="carousel-cell" style="
          background-image: url(https://github.com/indraphy/gambar/blob/main/img-3.PNG?raw=true);
        ">
                <div class="overlay"></div>
                <div class="inner">
                    <h3 class="subtitle">
                        Sempat Terputus Longsor, Akses Lintas Bengkulu Sudah Bisa Dilalui
                    </h3>

                    <a href="https://news.detik.com/berita/d-5920692/sempat-terputus-longsor-akses-lintas-bengkulu-sudah-bisa-dilalui/amp"
                        class="btn" target="_blank">Baca Berita</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="cards">
                <div>
                    <?php
      $query = "SELECT * FROM tb_peringatan";
      $result = mysqli_query($koneksi, $query);
      $no = 1;
      while ($data = mysqli_fetch_assoc($result)) :
    ?>
                    <h5>
                        <?= $data['pesan'] ?>
                    </h5>
                    <?php
    endwhile;
    mysqli_close($koneksi);
    ?>
                </div>
            </div>
        </div>

        <div class="container">
            <h2 style="margin: 30px;">Dapatkan Informasi Lengkap Lainnya</h2>
            <div class="row">
                <div class="col-sm">
                    <a href="?page=Peta" class="btn">
                        <div class="card" style="width: 15rem;">
                            <div class="">
                                <img src="https://github.com/indraphy/gambar/blob/main/peta.jpg?raw=true"
                                    class="card-img-top" alt="..." height="200px" />
                                <div class="card-body">
                                    <p class="card-text">Pantau Daerah Longsor</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a href="?page=Data" class="btn">
                        <div class="card" style="width: 15rem;">
                            <div class="">
                                <img src="https://github.com/indraphy/gambar/blob/main/datainfo.png?raw=true"
                                    class="card-img-top" alt="..." height="200px" />
                                <div class="card-body">
                                    <p class="card-text">Data Riwayat Kejadian Longsor</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm">
                    <a href="?page=Info-Longsor" class="btn">
                        <div class="card" style="width: 15rem;">
                            <div class="">
                                <img src="https://github.com/indraphy/gambar/blob/main/img-3.PNG?raw=true"
                                    class="card-img-top" alt="..." height="200px" />
                                <div class="card-body">
                                    <p class="card-text">Informasi Tentang Longsor</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js">
        </script>
        <script type="text/javascript">
        var options = {
            accessibility: true,
            prevNextButtons: true,
            pageDots: true,
            setGallerySize: false,
            arrowShape: {
                x0: 10,
                x1: 60,
                y1: 50,
                x2: 60,
                y2: 45,
                x3: 15,
            },
        };

        var carousel = document.querySelector("[data-carousel]");
        var slides = document.getElementsByClassName("carousel-cell");
        var flkty = new Flickity(carousel, options);

        flkty.on("scroll", function() {
            flkty.slides.forEach(function(slide, i) {
                var image = slides[i];
                var x = ((slide.target + flkty.x) * -1) / 3;
                image.style.backgroundPosition = x + "px";
            });
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    </body>

</html>