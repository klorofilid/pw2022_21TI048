<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://dukcapil.kemendagri.go.id/">
                <img src="img/logocapil.jpg" width="10%"> DUKCAPIL </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view.php">Data</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="logout.php">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <h2 style="padding:0.4% 0.8%; background-color:#009900;
    color:#fff; border-radius: 2px; text-decoration:none" class=" text-center">Input Data Penduduk</h2>

        <form action="" method="POST">
            <table class="table table-hover table-striped" border="1" cellspacing="10" width="50%">
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><input type="text" name="nik" placeholder="NIK" required> </td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" placeholder="Nama Lengkap" required> </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <select name="jenis">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><input type="text" name="agama" placeholder="Agama" required> </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status">
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><input type="text" name="pekerjaan" placeholder="Pekerjaan" required> </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" placeholder="Alamat" required> </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan" type='button' class='btn btn-primary'> </td>
                </tr>
            </table>
        </form>
        <?php
        include 'koneksi.php';
        if (isset($_POST['simpan'])) {
            $insert = mysqli_query($koneksi, "INSERT INTO dt_penduduk VALUES
        ('" . $_POST['nik'] . "',
        '" . $_POST['nama'] . "',
        '" . $_POST['jenis'] . "',
        '" . $_POST['agama'] . "',
        '" . $_POST['status'] . "',
        '" . $_POST['pekerjaan'] . "',
        '" . $_POST['alamat'] . "')");
            if ($insert) {
                echo 'Berhasil Disimpan';
            } else {
                echo 'gagal disimpan' . mysqli_error($koneksi);
            }
        }
        ?>
    </div>
</body>

</html>