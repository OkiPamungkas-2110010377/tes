<?php
session_start();

include "../koneksi.php";

$id_materi = $_GET["id"];

$result_materi = mysqli_query($conn, "SELECT * FROM tbl_materi WHERE id_materi = '$id_materi'");
$row_materi = mysqli_fetch_assoc($result_materi);

if (isset($_POST["submit"])) {

    $id_kelas = $_POST["id_kelas"];
    $judul = $_POST["judul"];
    $materi = $_POST["materi"];

    $edit = mysqli_query($conn, "UPDATE tbl_materi SET id_kelas = '$id_kelas', judul = '$judul', materi = '$materi' WHERE id_materi = '$id_materi'");

    header("Location: materi.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>E-Learning | Edit Materi</title>
</head>

<body>

    <?php include "header.php" ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Edit Materi</h1>
                <hr>
                <div class="row">
                    <div class="col-lg">
                        <h2>Form Input</h2>
                        <p>Silahkan menginput data pada form dibawah ini...!</p>
                        <form method="post" target="">
                            <div class="mb-3">
                                <label for="id_kelas" class="form-label">Kelas</label>
                                <select class="form-select" name="id_kelas" id="id_kelas" required>
                                    <option value="">-- Pilih Kelas --</option>
                                    <?php
                                    $result_kelas = mysqli_query($conn, "SELECT * FROM tbl_kelas");
                                    while ($row_kelas = mysqli_fetch_assoc($result_kelas)) {
                                    ?>
                                        <option value="<?php echo $row_kelas["id_kelas"] ?>" <?php if ($row_kelas["id_kelas"] == $row_materi["id_kelas"]) {
                                                                                                    echo "SELECTED";
                                                                                                } ?>><?php echo $row_kelas["nm_kelas"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="form-label">Judul Materi</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $row_materi["judul"] ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="materi" class="form-label">Isi Materi</label>
                                <textarea class="form-control" name="materi" id="materi" rows="3" required><?php echo $row_materi["materi"] ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                            <a href="materi.php" class="btn btn-secondary">Cancel</a>
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