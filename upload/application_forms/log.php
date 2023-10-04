 <?php
session_start();
require ('connect.php');
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
  if (@$_SESSION['myUser'] == "panorama" && @$_SESSION['myPass'] == "panorama") {
      echo("<script>location.href = 'cp.php';</script>");
      }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>طلبات المكتب</title>
  <link rel="icon" type="image/x-icon" href="img/icon.jpeg">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #1E1E1E; background-image: url('img/bg-noise.png'); overflow-x: hidden;">
  <a href="app.php"><img dir="rtl" style="max-width: 72%; display: block;  margin-left: auto; margin-right: auto;" src="img/header.png"></a>
  <?php
  include ('nav.php');
  ?>
  <form enctype="multipart/form-data" method="POST" action="" class="droid-arabic-kufi row g-3 text-white px-3" dir="rtl"  >
    <div class="col-md-4">
      <label  dir="rtl" class="form-label">اسم المستخدم</label>
      <input name="user" type="text" dir="rtl" class="form-control"  max= "9" value="" required>
    </div>
    <div class="col-md-3" dir="rtl" >
      <label  dir="rtl" class="form-label">كلمة المرور</label>
      <input name="pass" type="password" max="9" dir="rtl" class="form-control"  value="" required>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-warning" type="submit" name="login">دخول</button>
  </div>
</form>
<?php
if (isset($_POST['login'])) {
  @$user = strip_tags($_POST['user']); 
  @$pass = strip_tags($_POST['pass']);
  if($user == "panorama" && $pass == "panorama") {
    $_SESSION['myUser'] = $user ;
    $_SESSION['myPass'] = $pass ;
    echo("<script>location.href = 'cp.php';</script>");
  }
  else { echo '
  <center><br>
  <div class="col-md-4  text-center px-3  alert alert-danger" role="alert">
  ناسف لايمكنك الدخول للوحة التحكم بهذه البيانات
  </div>
  </center>';

}
}
?>
</body>
</html>