<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=\, initial-scale=1.0" />
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="global-container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">L O G I N</h1>
            </div>
            <div class="card-text">
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Username </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria - describedby="emailHelp"
                            name="fusername" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> Password </label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="fpassword" />
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                        <label class="form-check-label" for="exampleCheck1"> Check me out </label>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary" name="fmasuk">Submit</button>
                    </div>
            </div>
        </div>
    </div>
    </form>

    <?php
  if (isset($_POST['fmasuk'])) {
    $username = $_POST['fusername'];
    $password = $_POST['fpassword'];
    $qry = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$username' AND password=md5('$password')");
    $cek = mysqli_num_rows($qry);
    if ($cek == 1) {
      $_SESSION['userweb'] = $username;
      header("location:admin.php");
      exit;
    } else {
      echo "Maaf Username dan Password Anda Salah !";
    }
  }
  ?>
</body>

</html>