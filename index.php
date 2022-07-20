<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STMIK Widya Pratama Pekalongan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>

<!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#3d948b">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PPDB 2022</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto" style="padding-left:10px">
                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                <a class="nav-link active" href="form-daftar.php">DAFTAR</a>
                <a class="nav-link active" href="list-siswa.php">TAMPIL DATA</a>
                <a class="nav-link active" href="cetak.php">CETAK DATA</a>
            </div>
            </div>
        </div>
    </nav>

        <!-- Tutup Navbar -->
    <!-- Isi Beranda -->
    <!-- <section id="hero-area">
        <div id="slider-hero-nav"></div>
        <div class="owl-carousel" id="slider-hero">
            <div class="slider-item">
                <div class="slider-item-img">
                    <img src="img/profil/slider.jpg" alt="STMIK">
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-item-img">
                    <img src="img/profil/slider_1.jpg" alt="Akredutasi">
                </div>
            </div>
            <div class="slider-item">
                <div class="slider-item-img">
                    <img src="img/profil/PMB-2223.jpeg" alt="Kegiatan Stmik">
                </div>
            </div>
        </div>
    </section> -->

    <nav>
        <?php if(isset($_GET['status'])): ?>
            <p>
                <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran Siswa Baru Berhasil!";
                } else {
                    echo "";
                }
                ?>
            </p>
            <?php endif; ?>
    </nav>

    <!-- ##### Features Area Start ###### -->
    <section class="wow fadeInUp" data-wow-delay="100ms" style="background-color: #003679;">
        <div class="container-fluid">
            <div class="row justify-content-center py-2">
                <div class="col-6 col-md-4 col-lg-2 text-white px-3 py-3" align="center">
                    <ion-icon name="school-outline" style="font-size: 80px;"></ion-icon>
                    <div class="text-white font-weight-bold">Beasiswa Pendidikan</div>
                    <small class="text-white">Beasiswa Pendidikan tersedia untuk mahasiswa baru</small>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-white px-3 py-3" align="center">
                    <ion-icon name="business-outline" style="font-size: 80px;"></ion-icon>
                    <div class="text-white font-weight-bold">Inkubator Bisnis untuk Mahasiswa</div>
                    <small class="text-white">Membina mahasiswa bagaimana cara berbisnis di era modern.</small>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-white px-3 py-3" align="center">
                    <ion-icon name="laptop-outline" style="font-size: 80px;"></ion-icon>
                    <div class="text-white font-weight-bold">Workshop IT &amp; Entrepreneurship</div>
                    <small class="text-white">Mahasiswa dilatih untuk menjadi wirausaha muda serta membuat startup.</small>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-white px-3 py-3" align="center">
                    <ion-icon name="map-sharp" style="font-size: 80px;"></ion-icon>
                    <div class="text-white font-weight-bold">Lokasi Strategis</div>
                    <small class="text-white">Lokasi STMIK WIdya Pratama berada di jalan Patriot No.25, Kota Pekalongan.</small>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-white px-3 py-3" align="center">
                    <ion-icon name="wallet-outline" style="font-size: 80px;"></ion-icon>
                    <div class="text-white font-weight-bold">Biaya tidak mahal &amp; dapat diangsur</div>
                    <small class="text-white">Biaya pendaftaran dan SPP untuk STMIK Widya Pratama  relatif murah.</small>
                </div>
                <div class="col-6 col-md-4 col-lg-2 text-white px-3 py-3" align="center">
                    <ion-icon name="people-outline" style="font-size: 80px;"></ion-icon>
                    <div class="text-white font-weight-bold">Bekerjasama dengan Perusahaan IT</div>
                    <small class="text-white">STMIK Bandung bekerjasama dengan IT seperti Microsoft, Google, dan Perusahaan Ternama lainnya.</small>
                </div>
            </div>
        </div>

    </section>


    <!-- PROFILE -->
    <section id="sambutan">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="video-wrapper">
                        <iframe width="600" height="410" src="https://www.youtube.com/embed/i5XVTtz5lZ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2> PROFILE
                        <h2>
                            <h3>STMIK Widya Pratama Pekalongan</h3>
                            <p>
                                <b>STMIK Widya Pratama merupakan Kampus pendidikan tinggi informasi swasta dengan fokus untuk mencetak tenaga profesional dan techopreneur IT</b>
                            </p>
                </div>
            </div>
        </div>
    </section>
    <!-- TUTUP  -->

    <!-- tentang -->
    <section id="visi">
        <div class="container">
            <div class="row text-center">
                <div class="col md-4">
                    <h2 class="textJudul">VISI & MISI</h2>
                </div>
            </div>

            <div class="row justify-content-center fs-5">
                <div class="col-md-4">
                    <p class="textform1 text-center"> VISI<br/> <br>MENJADI PERGURUAN TINGGI YANG MEMILIKI WAWASAN GLOBAL DALAM BIDANG TEKNOLOGI INFORMASI,<br> MENERAPKAN ILMU PENGETAHUAN DAN TEKNOLOGI YANG MENDUKUNG NILAI-NILAI KEUNGGULAN LOKAL TAHUN 2030
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="textform1 text-center"> MISI<br/>
                        <ol type='a' class="textform2">
                            <li>Melaksanakan tridharma perguruan tinggi yang berkualitas dalam bidang Teknologi Informasi </li>
                            <li>Menjalankan tatakelola institusi yang kredibel, trasparan, akuntabel, bertanggungjawab dan adil </li>
                            <li>Menjalin kerjasama strategis yang berkelanjutan dengan stakeholder </li>
                            <li>Meningkatkan citra intitusi sebagai perguruan tinggi yang terdepan dalam penguasaan IPTEKS yang mendukung nilai-nilai keunggulan lokal</li>
                        </ol>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#15477a" fill-opacity="1" d="M0,128L40,149.3C80,171,160,213,240,213.3C320,213,400,171,480,176C560,181,640,235,720,224C800,213,880,139,960,117.3C1040,96,1120,128,1200,128C1280,128,1360,96,1400,80L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg> -->

    </section>
    <!-- tutup beranda -->

    <footer>

        <font face="Times New Roman">
            <b><div class="copy" style="color: rgb(250, 244, 244); background-color: #040c79; text-align: center;">&copy; 2021 | 21.230.0016 - Anin Naba Anzila.</div></b>
        </font>

    </footer>

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>


</body>

</html>