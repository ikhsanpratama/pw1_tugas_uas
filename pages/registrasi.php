<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>>Pemrograman Web 1 | TUGAS UAS | Registrasi</title>
    <link rel="icon" type="image/x-icon" href="../dashboard/assets/img/user.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../dashboard/assets/css/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../dashboard/assets/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="../" class="h1"><b>Tugas</b>UAS</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg text-bold">REGISTRASI | <small>Pemrograman Web 1</small></p>

            <form method="post" id="formRegistrasi">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nama Depan" id="nama_depan" name="nama_depan" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nama Belakang" id="nama_belakang" name="nama_belakang" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" id="username" name="username" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<br/>
<footer class="text-center">
    <strong>Hak Cipta &copy; 2024 | 23552012008 - Ikhsan Pratama |  <a href="#">UAS Web 1</a>.</strong>
</footer>
<script src="../dashboard/assets/js/jquery.min.js"></script>
<script src="../dashboard/assets/js/bootstrap.bundle.min.js"></script>
<script src="../dashboard/assets/js/adminlte.min.js"></script>
<script src="../dashboard/assets/js/axios.min.js"></script>
<script src="../assets/js/registrasi.js"></script>
</body>
</html>
