<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pemrograman Web 1 | Log in</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../assets/css/fontawesome-free/css/all.min.css">  
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Pemrograman Web 1</b> Tugas API Hosting</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">L O G I N</p>

      <form  id="formLogin" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">          
          <div class="col-12">
            <button type="button" class="btn btn-primary btn-block" onclick="login()">M A S U K</button>
          </div>
        </div>
      </form><br/>
      <div>
          <span>Login Info : </span>
          <ul class="font-italic text-info text-sm">
              <li>Username : ikhsan</li>
              <li>Password : pratama</li>
          </ul>
      </div>
      <div class="text-center">
          <a href="../../"><i class="fa fa-arrow-alt-circle-left"></i> Kembali ke Website</a>
      </div>
      <div class="text-center"><br/><span id="pesan" class="text-danger font-italic"></span></div>
  </div>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/adminlte.min.js"></script>
<script src="../assets/js/axios.min.js"></script>
<script src="../include/login.js"></script>
</body>
</html>
