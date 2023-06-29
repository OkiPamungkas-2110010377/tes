<?php
session_start();

include "../koneksi.php";

$tgl = date('Y-m-d');
$npm = $_SESSION["npm"];
$id_materi = $_GET["id"];

if (isset($_POST["submit"])) {

    $status_absen = $_POST["status_absen"];

    $simpan = mysqli_query($conn, "INSERT INTO tbl_absen VALUES(NULL, '$tgl', '$npm', '$id_materi', '$status_absen')");

    if ($simpan) {
        header("Location: materi.php");
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>E-Learning | Absen</title>
</head>

<body>

    <?php include "header.php" ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Input Absen</h1>
                <hr>
                <div class="row">
                    <div class="col-lg">
                        <h2>Form Input Absen</h2>
                        <p>Silahkan menginput data absen pada form dibawah ini...!</p>
                        <form method="post" target="">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_absen" id="status_absen1" value="1" checked>
                                    <label class="form-check-label" for="status_absen1">
                                        Hadir
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_absen" id="status_absen2" value="2">
                                    <label class="form-check-label" for="status_absen2">
                                        Izin
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_absen" id="status_absen3" value="3">
                                    <label class="form-check-label" for="status_absen3">
                                        Sakit
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status_absen" id="status_absen4" value="4">
                                    <label class="form-check-label" for="status_absen4">
                                        Alfa
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Absen</button>
                            <a href="materi.php" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <?php include "footer.php" ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>