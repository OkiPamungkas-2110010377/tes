<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>E-Learning | Home</title>
</head>

<body>

    <?php include "header.php" ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h1>Selamat Datang di E-Learning</h1>
                <hr>
                <div class="row">
                    <div class="col-lg-4">
                        <h2>Form Input</h2>
                        <p>Silahkan menginput data pada form dibawah ini...!</p>
                        <form method="post" target="">
                            <div class="mb-3">
                                <label for="npm" class="form-label">NPM</label>
                                <input type="text" class="form-control" id="npm" name="npm" required autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Log In</button>
                            <a href="signin.php" class="btn btn-secondary">Sign In</a>
                        </form>
                    </div>

                    <div class="col-lg-8">
                        <h2>Data Mahasiswa</h2>
                        <p>Berikut data mahasiswa yang berhasil di input...!</p>
                        <table class="table table-bordered table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>
                                        <a href="edit.php" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="hapus.php" class="btn btn-sm btn-danger">Hapus</a>
                                    </th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php" ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>