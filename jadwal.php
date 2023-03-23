<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ruang Ujian | UNBN</title>
    <!-- icon -->
    <link rel="icon" href="img/icon-logo.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">

    <!-- Animation On Scroll -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg p-2" style="background-color: #108bd3;">
        <div class="container ">
            <a class="navbar-brand" href="#">
                <img src="img/logo.png" alt="logo.jpg" style="height:40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="jadwal.php">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link color-success" href="login/index.php">Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">v1.2</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container text-center p-5 rounded">
        <div class="row">
            <div class="col">
                <h1 style="color:#042940">
                    Jadwal Ujian
                </h1>
                <p>Ujianlah sesuai dengan jadwal yang sudah di tentukan.</p>
            </div>
        </div>
    </div>
    <section class="jumbotron ">
        <div class="container rounded-5 text-center shadow p-5" style="background: #fff;">
            <div class="row">
                <div class="col-md" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <thead>
                                <th>NO</th>
                                <!-- <th>ID MK</th> -->
                                <th>Nama Matakuliah</th>
                                <th>Kategori</th>
                                <th>Tanggal Ujian</th>
                                <th>Waktu Ujian</th>
                                <th>Durasi Ujian</th>
                            </thead>
                        </tr>
                        <tbody>
                            <?php
                            include'login/config.php';
                            $no = 1;
                            $kueri = mysqli_query($conn, 'SELECT * FROM tb_mk');
                            while ($data =  mysqli_fetch_array($kueri)) {
                                ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <!-- <td><?php echo $data['id_mk'] ?>
                                -->
                                </td>
                                <td style="text-align:left">
                                    <?php echo ucwords($data['nama_mk']) ?>
                                </td>
                                <td><?php echo "MK ". ucwords($data['kat_mk']) ?>
                                </td>
                                <td><?php echo $data['tanggal_ujian'] ?>
                                </td>
                                <td><?php echo $data['waktu_ujian'] ?>
                                </td>
                                <td><?php echo $data['durasi_ujian'] . " Menit"; ?>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- animation On Scroll -->
    <script>
        AOS.init();
    </script>
</body>

</html>