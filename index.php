<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemrograman Web 1 | TUGAS UAS</title>
    <link rel="icon" type="image/x-icon" href="dashboard/assets/img/user.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="dashboard/assets/css/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dashboard/assets/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white elevation-1">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="dashboard/assets/img/user.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">TUGAS UAS</span>
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
               <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="pages/registrasi.php" class="nav-link btn-outline-primary btn text-bold"><i class="fa fa-user-plus"></i> Registrasi</a>
                    </li>&nbsp;
                    <li class="nav-item">
                        <a href="dashboard" class="nav-link btn-outline-primary btn text-bold"><i class="fa fa-chalkboard"></i> Dashboard</a>
                    </li>
                </ul>
                <form class="form-inline ml-0 ml-md-3" id="formCari">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Cari Informasi" aria-label="Cari" id="cari" name="cari" required>
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Pemrograman Web 1</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="container" id="kontenInformasi">
                <div class="card card-default elevation-1" id="informasi">
                    <div class="card-header"  id="informasi-header"></div>
                    <div class="card-body"  id="informasi-body"></div>
                    <div class="card-footer"  id="informasi-footer"></div>
                </div>
            </div>
            <div class="container" id="cariInformasi">
            </div>
        </div>
    </div>

    <footer class="main-footer elevation-1">
        <span>
            <strong>Hak Cipta &copy; 2024 | 23552012008 - Ikhsan Pratama | <a href="#">UAS Web 1</a>.</strong>
        </span>
    </footer>
</div>
<script src="dashboard/assets/js/jquery.min.js"></script>
<script src="dashboard/assets/js/bootstrap.bundle.min.js"></script>
<script src="dashboard/assets/js/adminlte.min.js"></script>
<script src="dashboard/assets/js/axios.min.js"></script>
<script src="assets/js/informasi.js"></script>
<script src="assets/js/detail.js"></script>
<script src="assets/js/cari.js"></script>

</body>
</html>
