<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Survey | Log in</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./template/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="./template/AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./template/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./template/AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#">E-<b>Survey</b></a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan login untuk bisa mengakses halaman admin.</p>
        <form id="form-login">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <script src="./template/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./template/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="./template/AdminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./template/AdminLTE/dist/js/adminlte.min.js"></script>
  <script>
  $(document).ready(function () {
    const base_url = '<?= base_url() ?>';
    const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 2500
    });
    $('#form-login').submit(function () {
      $.ajax({
        type: 'POST',
        url: base_url + 'auth-admin.json',
        data: $(this).serialize(),
        success: function (response) {
          response = $.parseJSON(response);
          if (response['status'] == true) {
            Toast.fire({
              type: 'success',
              title: response['message']
            }).then(function () {
              location.replace(base_url + 'admin-dashboard.html');
            });
          }else{
            Toast.fire({
              type: 'error',
              title: response['message']
            }).then(function () {
              $('#form-login')[0].reset();
            });
          }
        }
      });
      return false;
    });
  });
  </script>
</body>
</html>