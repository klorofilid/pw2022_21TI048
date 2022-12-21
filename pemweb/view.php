<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Penduduk</title>

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
        <h2 style="padding:0.4% 0.8%; background-color: #59820d;
    color:#fff; border-radius: 2px; text-decoration:none" class="text-center">Data Kependudukan</h2><br>
        <table class="table table-hover " border="1" cellspacing="0" width="50%">
            <thead>
                <tr class="table-primary">
                    <td>No</td>
                    <td>NIK</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Agama</td>
                    <td>Status</td>
                    <td>Pekerjaan</td>
                    <td>Alamat</td>
                    <td>Opsi</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $select = mysqli_query($koneksi, "Select * FROM dt_penduduk");
                while ($hasil = mysqli_fetch_array($select)) { ?>
                <tr>
                    <td><?php echo $no++ ?> </td>
                    <td><?php echo $hasil['nik'] ?></td>
                    <td><?php echo $hasil['nama'] ?></td>
                    <td><?php echo $hasil['jenis_kelamin'] ?></td>
                    <td><?php echo $hasil['agama'] ?></td>
                    <td><?php echo $hasil['status'] ?></td>
                    <td><?php echo $hasil['pekerjaan'] ?></td>
                    <td><?php echo $hasil['alamat'] ?></td>
                    <td>
                        <a type='button' class='btn btn-primary'
                            href="form_edit.php?nik=<?php echo $hasil['nik'] ?> ">Edit</a>
                        <a type='button' class='btn btn-danger'
                            href="delete.php?nik=<?php echo $hasil['nik'] ?>">Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>