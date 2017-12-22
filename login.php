<?php
session_start();

if (!empty($_SESSION)) {
  header("location:index.php");
}
//cek cookie, dalam sistem login sederhana ini, cookie diberinama "cookielogin"
if(!empty($_COOKIE['member_login'])){
    session_start();
    include "config/koneksi.php";
    $level  = '';

    $query  = mysqli_query($connect, "SELECT * FROM tuser WHERE username = '" . $_COOKIE["member_login"] . "' AND password = '" . md5($_COOKIE["member_password"]) . "' LIMIT 1");

    $result = mysqli_fetch_array($query);
    if ($result) {
      $_SESSION['id']           = $result['id'];
      $_SESSION['username']         = $result['username'];
      $_SESSION['level']        = $result['level'];
      if(!empty($_POST["remember"])) {
        setcookie ("member_login",$_POST["member_name"],time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("member_password",$_POST["member_password"],time()+ (10 * 365 * 24 * 60 * 60));
      } else {
        if(isset($_COOKIE["member_login"])) {
          setcookie ("member_login","");
        }
        if(isset($_COOKIE["member_password"])) {
          setcookie ("member_password","");
        }
      }
        header("location:index.php");
        exit();
      } else {
        header("location:login.php?status=gagal");
      }
}
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SI TOKO MODERN</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>Login</b></a>
      <?php if (!empty($_GET['status']) && $_GET['status'] == 'gagal') : ?>
        <div class=""><b><h4>Login Anda Gagal</h4></b></div>
      <?php endif; ?>

      <?php if (!empty($_GET['status']) && $_GET['status'] == 'sukses') : ?>
        <div class=""><b><h4>Anda Berhasil Logout</h4></b></div>
      <?php endif; ?>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form action="login_proses.php" method="post">
      <div class="form-group has-feedback">
        <input name="member_name" type="text" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" class="form-control input-field" placeholder="Username" autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="member_password" type="password" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" class="form-control input-field" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label for="setcookie">
              <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> /> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="#">I forgot my password</a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
