<?php
require '../koneksi.php';

//ambildata dari url
$id = $_GET["id"];

//query data tempat wisata berdasarkan id
$edit = query("SELECT * FROM tempat_wisata WHERE id = $id ")[0];

//cek apakah tombol bisa ditekan
if (isset($_POST["submit"])) {

    //cek data pakah sudah berhasil diubah atau belum
    if (ubah($_POST) > 0) {
        echo
        "<script>
         alert('Data berhasil diubah');
         window.location.href = 'index2.php';
        </script>";
    } else {
        echo
        "<script>
         alert('Data gagal diubah ');
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- link font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <title>Menu</title>
</head>

<body>

    <!-- ini navbar -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#Menu.php">
                <img src="../gambar/logo1.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Pesona Indonesia
            </a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#Menu.php">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#servis.php">Servis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#destination.php">destination</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#recomendation.php">recomendation</a>
                            </li>

                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
    </nav>

    <!-- konten edit-->
    <h1>EDIT</h1>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $edit["id"]; ?>">
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Gambar</label>
        </div>
        <div class="mb-3">
            <label for="nama_tempat" class="form-label">nama tempat</label>
            <input type="text" class="form-control" id="nama_tempat" value="<?= $edit["nama_tempat"]; ?>" name="nama_tempat" placeholder="masukan tempat">
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">keterangan</label>
            <input type="text" class="form-control" id="keterangan" value="<?= $edit["keterangan"]; ?>" name="keterangan" placeholder="masukan keterangan...">
        </div>

        <div class="mb-3">
            <button type="submit" name="submit" class="btn btn-dark text-light">submit</button>
            <a href="index2.php" class="btn btn-dark text-light">kembali</a>
        </div>
    </form>