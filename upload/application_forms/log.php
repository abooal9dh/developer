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
    <?php
        include ('header.php');
      ?>
<body style="background-color: #1E1E1E; background-image: url('img/bg-noise.png'); overflow-x: hidden;">

     <?php
    include ('nav.php');
    include ('slider.html');
    ?>
  <form enctype="multipart/form-data" method="POST" action="" class="d-flex justify-content-center text-center droid-arabic-kufi mx-4 py-6 row p-4 text-warning g-3 text-white px-3" dir="rtl"  >
    <div class="col-md-8">
      <input name="user" type="text" dir="rtl" placeholder="اسم المستخدم" class="form-control"  max= "9" value="" required>
    </div>
    <div class="col-md-8" dir="rtl" >
      <input name="pass" type="password" max="9" dir="rtl" placeholder="كلمة المرور" class="form-control"  value="" required>
    </div>
  </div>
  <div>
    <button class="btn btn-warning my-2" type="submit" name="login">دخول</button>
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
<?php
include('footer.php')
?>
</body>
</html>