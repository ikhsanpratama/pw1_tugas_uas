<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pemrograman Web 1 | TUGAS UAS</title>
  <link rel="icon" type="image/x-icon" href="assets/img/user.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="assets/css/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/css/Chart.min.css">
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>      
    </ul>

    <ul class="navbar-nav ml-auto">                  
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-bold">PW1 | TUGAS UAS</span>
    </a>
    
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="assets/img/user.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><span id="nama"></span></a>
            </div>
        </div>     
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          </li>
            <li class="nav-item">
                <a href="" class="nav-link menu" onClick="window.reload()">
                    <i class="fas fa-home nav-icon"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link menu" id="berita">
                    <i class="fas fa-newspaper nav-icon"></i>
                    <p>Berita</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link menu" id="user">
                    <i class="fas fa-list nav-icon"></i>
                    <p>User</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link bg-danger" onclick="logout()">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
      </nav>      
    </div>
  </aside>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>              
            </ol>
          </div>
        </div>
      </div>
    </div>
    
    <div class="content">
      <div class="container-fluid">
        <div id="konten">
          <div class="row">
            <div class="col-lg-6 col-6">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3 id="jml_berita"></h3>

                  <p class="text-bold">Akumulasi Berita</p>
                </div>
                <div class="icon">
                  <i class="fas fa-newspaper"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-6">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3 id="jml_user"></h3>

                  <p class="text-bold">Akumulasi User</p>
                </div>
                <div class="icon">
                  <i class="fas fa-users"></i>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-6">
                <div class="card card-gray-dark elevation-1">
                    <div class="card-header">
                        <h3 class="card-title text-bold"><i class="fa fa-chart-line"></i> Grafik Berita</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tahun"> Pilih Tahun</label>
                                <select class="form-control" id="tahun"></select>
                            </div>
                        </div>
                        <canvas id="chartBerita" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-6 d-pri">
                <div class="card card-navy elevation-1">
                    <div class="card-header">
                        <h3 class="card-title text-bold"><i class="fa fa-file-download"></i> Report</h3>
                    </div>
                    <div class="card-body">
                        <button class="btn btn-outline-success" onclick="excelDownload()"><i class="fas fa-file-excel"></i> Excel </button>
                        <button class="btn btn-outline-danger" onclick="pdfDownload()"><i class="fas fa-file-pdf"></i> PDF </button>
                        <button class="btn btn-outline-primary" onclick="print()"><i class="fas fa-print q"></i> PRINT </button>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>

  <footer class="main-footer">
    <strong>Hak Cipta &copy; 2024 | 23552012008 - Ikhsan Pratama | <a href="#">UAS Web 1</a>.</strong>
  </footer>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/adminlte.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/xlsx.full.min.js"></script>
<script src="assets/js/pdfmake.min.js"></script>
<script src="assets/js/vfs_fonts.js"></script>
<script src="assets/js/axios.min.js"></script>
<script src="assets/js/Chart.min.js"></script>
<script src="include/session.js"></script>
<script src="include/logout.js"></script>
<script src="include/pages.js"></script>
<script src="include/jumlahBerita.js"></script>
<script src="include/jumlahUser.js"></script>
<script src="include/getChart.js"></script>
<script src="include/report.js"></script>
<script>
    check_session();
</script>
</body>
</html>
