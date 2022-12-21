<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rek="stylesheet" href="bootstrap-5.0.0-dist/css/bootstrap.min.css">
</head>
<style>
.banner {
    height: 90vh;
    background: url('img/peta.jpg');
    background-size: cover;
    background-position: center;
}

.banner-content {
    height: 100%;
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>

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
                        <a class="nav-link active" aria-current="page" href="view.php">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href=" form_input.php">Input Data</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">Dropdown</a>
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
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container-fluid banner"><b>
            <div class="container banner-content col-lg-6">
                <div class="text-center shadow">
                    <p class=" fs-1">
                        DINAS KEPENDUDUKAN
                    </p>
                    <p class="d-none d-sm-block">
                        Selamat datang di dinas kependudukan Republik Indonesia
                    </p>
                    <p>
                        Jl.Jendral Sudirman Jakarta-Indonesia
                    </p>
                </div>
            </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>