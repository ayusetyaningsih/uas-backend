<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/dist/plugins/fontawesome-free/css/all.min.css') ?> ">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/admin/dist/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>  ">
  <!-- Theme style -->
  <link rel="stylesheet" href=" <?php echo base_url('assets/admin/dist/css/adminlte.min.css'); ?> ">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1"><b>Login</b></a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php echo $this->session->flashdata('message'); ?>

        <form action="<?= base_url('login_15/proses_login') ?>" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="user" id="user" placeholder="Email">
            <?php echo form_error('user', '<p>', '</p>') ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            <?php echo form_error('password', '<p>', '</p>') ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mb-0">
          <a name="register" href=" <?php echo base_url('register_15') ?> " class="text-center">Belum punya akun? Register disini</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src=" <?= base_url('assets/admin/plugins/jquery/jquery.min.js') ?> "></script>
  <!-- Bootstrap 4 -->
  <script src=" <?= base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') ?> "></script>
  <!-- AdminLTE App -->
  <script src=" <?= base_url('assets/admin/dist/js/adminlte.min.js') ?> "></script>
</body>

</html>