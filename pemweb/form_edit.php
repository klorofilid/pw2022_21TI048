<?php
include 'koneksi.php';
$data_edit = mysqli_query($koneksi, "SELECT * FROM dt_penduduk WHERE nik='" . $_GET['nik'] . "'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data</title>
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
                    <li class="nav-item">
                        <a class="nav-link active" href=" form_input.php">Input Data</a>
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
        <h2 href="view.php" style="padding:0.4% 0.8%; background-color:#009900;
    color:#fff; border-radius: 2px; text-decoration:none" class="text-center">Edit Data Penduduk</h2>

        <form action="" method="POST">
            <table class="table table-hover table-striped" border="1" cellspacing="0" width="50%">
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><input type=" text" name="nik" placeholder="NIK" value="<?php echo $result['nik'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $result['nama'] ?>"
                            required> </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <select name="jenis">
                            <option value="<?php echo $result['jenis_kelamin'] ?>">
                                <?php echo $result['jenis_kelamin'] ?>
                            </option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><input type="text" name="agama" placeholder="Agama" value="<?php echo $result['agama'] ?>"
                            required>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status">
                            <option value="<?php echo $result['status'] ?>"><?php echo $result['status'] ?></option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Menikah">Menikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                    <td><input type="text" name="pekerjaan" placeholder="Pekerjaan"
                            value="<?php echo $result['pekerjaan'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" placeholder="Alamat" value="<?php echo $result['alamat'] ?>"
                            required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="edit" value="Simpan"> </td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['edit'])) {
            $update = mysqli_query($koneksi, "UPDATE dt_penduduk SET
        nama='" . $_POST['nama'] . "',
        jenis_kelamin='" . $_POST['jenis'] . "',
        agama='" . $_POST['agama'] . "',
        status='" . $_POST['status'] . "',
        pekerjaan='" . $_POST['pekerjaan'] . "',
        alamat='" . $_POST['alamat'] . "'
        WHERE nik='" . $_GET['nik'] . "'");
            if ($update) {
                echo 'Berhasil Edit';
            } else {
                echo 'Gagal Edit';
            }
        }
        ?>
    </div>
</body>

</html>