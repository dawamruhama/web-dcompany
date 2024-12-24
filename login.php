<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>D Company - Admin Panel</title>
  <link rel="icon" href="assets/img/logo-d1.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>

<body class="hold-transition login-page" style="background-image: url('dist/img/photo2.png'); background-size:cover;">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <img src="assets/img/logo-d1.png" width="170px" alt="">
      </div>

      <div class="card-body">
        <p class="login-box-msg"><strong>Silahkan Login Admin</strong></p>
        <div class="d-flex">
          <a href="login_pelamar.php" class="mb-3">login pelamar</a>
        </div>

        <form action="conf/autentikasi.php" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name='password'>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            <div class="col-6 ml-auto">
              <a type="submit" class="btn btn-secondary btn-block" href="register.php">Register</a>
            </div>
          </div>
        </form>
        </p>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrbootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="diadminlte.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="plugins/sweetalert2/sweetalert2.min.js"></script>
</body>
<?php
if (isset($_GET['error'])) {
  $x =  ($_GET['error']);
  if ($x == 1) {
    echo "
    <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'center-top',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'error',
      title: 'Login Gagal'
    })
    </script>";
  } else if ($x == 2) {
    echo "
    <script>
    var Toast = Swal.mixin({
      toast: true,
      position: 'center-top',
      showConfirmButton: false,
      timer: 3000
    });
    Toast.fire({
      icon: 'warning',
      title: 'Silahkan Inputkan Username & Password'
    })
    </script>";
  } else {
    echo '';
  }
}
?>

</html>