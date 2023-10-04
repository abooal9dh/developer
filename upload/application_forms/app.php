  <?php
  require ('user.php');
  @$user = $_SESSION['myUser'] ;
  @$pass = $_SESSION['myPass'] ;
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
  <a href="app.php"><img dir="rtl" style="max-width: 72%; display: block;  margin-left: auto; margin-right: auto;" src="img/header.png"></a>
//    <?php
  //  if ($user == "panorama" && $pass == "panorama" ) {
      include ('nav.php');
    //   }
    // ?>
  <body style="background-color: #1E1E1E; background-image: url('img/bg-noise.png'); overflow-x: hidden;">
  <form enctype="multipart/form-data" method="POST" action="app.php" class="droid-arabic-kufi row g-3 text-white px-3" dir="rtl"  >
    <div class="col-md-4">
      <label  dir="rtl" class="form-label">الأسم </label>
      <input name="name_app" type="text" dir="rtl" class="form-control"  value="" required>
    </div>
    <div class="col-md-4" dir="rtl" >
      <label  dir="rtl" class="form-label">رقم الهوية </label>
      <input name="id_app" type="number" min="111111111" max="9999999999" dir="rtl" class="form-control"  value="" required>
    </div>
    <div class="col-md-4" dir="rtl" >
      <label  dir="rtl" class="form-label">رقم الجوال</label>
      <input name="ph_app" type="number" min="111111111" max="9999999999" dir="rtl" class="form-control"  value="" required>
    </div>
    <div class="col-md-4">
      <label  dir="rtl" class="form-label">البريد الإلكتروني </label>
      <div class="input-group">
        <input name="email_app" type="email"  dir="rtl" class="form-control"   aria-describedby="inputGroupPrepend2" >
      </div>
    </div>
       <div class="col-md-4">
      <label dir="rtl" class="form-label">مختصر الدعوى</label>
   <textarea name="sum_app" type="text" dir="rtl" class="form-control"  value="" required></textarea>
    </div>
    <div class="col-md-4">
      <label dir="rtl" class="form-label">الطلبات</label>
      <textarea name="order_app" type="text" dir="rtl" class="form-control"  value="" required></textarea>
    </div>
      <div class="col-md-5">
      <label dir="rtl" class="form-label">التوقيع </label>
      <input name="img_app" type="file" enctype="multipart/form-data" dir="rtl" class="form-control"  required>
    </div>
    <div class="col-12">
      <button class="btn btn-warning" type="submit" name="order">ارسال الطلب</button>
    </div>
  </form>
  <?php
  if (isset($_POST['exit'])) {
            session_destroy();
            echo("<script>location.href = 'log.php';</script>");
            }
  if (isset($_POST['order'])) {
            $name_app = strip_tags($_POST['name_app']);
            $id_app = strip_tags($_POST['id_app']);
            $ph_app = strip_tags($_POST['ph_app']);
            $email_app = strip_tags($_POST['email_app']);
            $sum_app = strip_tags($_POST['sum_app']);
            $order_app = strip_tags($_POST['order_app']);
            $ift = strtolower(pathinfo($_FILES["img_app"]["name"],PATHINFO_EXTENSION));
            if($ift != "jpg" && $ift != "png" && $ift != "jpeg"
              && $ift != "gif" && $ift != "pdf") {
                echo '
              <br><center>
<div class="col-md-4 text-center px-3 alert alert-danger" role="alert">
              ناسف لا يمكنك رفع هذا النوع من الملفات
</div>
</center>

              '
              ;
                $uploadOk = 0;
              }
            else {
              $temp = explode(".", $_FILES["img_app"]["name"]);
              $newfilename = round(microtime(true)) . '.' . end($temp);
              move_uploaded_file($_FILES["img_app"]["tmp_name"], 'signature/'.$newfilename);
              $img_ap = @$newfilename;
              $img_app = "signature/".$img_ap;
              $iims=$msc->prepare("INSERT INTO `app_tab` (`name_app`, `id_app`, `ph_app`, `email_app`, `sum_app`, `order_app`, `img_app`) VALUES ('$name_app', '$id_app', '$ph_app', '$email_app', '$sum_app', '$order_app', '$img_app') ");
              $iims -> execute();
            echo '
<br><center>
<div class="col-md-5 text-center px-3  alert alert-success" role="alert">
تم تقديم طلبك بنجاح في إنتظار ان تتم مراجعتة و التواصل معك .. شكرا
</div>
</center>
            ';
            }

          }
    ?>
  </body>
  </html>