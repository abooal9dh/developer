  <?php
  require ('user.php');
  @$user = $_SESSION['myUser'] ;
  @$pass = $_SESSION['myPass'] ;
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


   <div class="row d-flex justify-content-center droid-arabic-kufi" dir="rtl">   
        <div class="card text-center my-4 mx-4 " style="background-color:rgba(0, 0, 0, 0.0); border: solid #FFC107;">
          <div class="card-body">
        
            <p class="card-text text-warning" style="font-size: 23px;">

السلام عليكم ورحمة الله وبركاته ،، لخدمتك ودراسة مالديك ؛ فضلا قم بتعبئة المرفق ، وفقك ربي ورعاك


            </p>
          </div>
        </div>
      </div>


  <form style="background-color:rgba(0, 0, 0, 0.0);border-radius:9; " enctype="multipart/form-data" method="POST" action="" class="droid-arabic-kufi mx-4 py-6 row p-4 text-warning " dir="rtl"  >
    <div class="col-md-4">
      <label  dir="rtl" class="form-label">المدعي</label>
      <input name="name_app" type="text" dir="rtl" class="form-control"  value="" required>
    </div>
    <div class="col-md-4">
      <label  dir="rtl" class="form-label">المدعى عليه</label>
      <input name="name2_app" type="text" dir="rtl" class="form-control"  value="" required>
    </div>
    <div class="col-md-4" dir="rtl" >
      <label  dir="rtl" class="form-label">رقم الجوال</label>
      <input name="ph_app" type="number" min="111111111" max="9999999999" dir="rtl" class="form-control"  value="" required>
    </div>
    <div class="col-md-12 py-1">
      <br>
      <label dir="rtl" class="form-label">نوع الدعوى</label>
  <select name="order_app" id="order_app" required>
    <option value="القضايا التجاريه">القضايا التجاريه</option>
    <option value="القضايا الإدارية">القضايا الإدارية</option>
    <option value="المحاكم العامة">المحاكم العامة</option>
    <option value="المنازعات التامينية" >المنازعات التامينية</option>
    <option value="المحاكم العمالية">المحاكم العمالية</option>
    <option value="قسمة التركات">قسمة التركات</option>
    <option value="التوثيق">التوثيق</option>
    <option value="التحكيم">التحكيم</option>
    <option value="الوصايا والأوقاف ">الوصايا والأوقاف </option>
    <option value="الصلح">الصلح</option>
    <option value="صياغة العقود">صياغة العقود</option>
    <option value="تأسيس الشركات">تأسيس الشركات</option>
    <option value="اخرى">اخرى</option>
  </select>
    </div>
    </div>
       <div class="col-md-12 py-1">
      <label dir="rtl" class="form-label">تفصيل الدعوى بشكل موجز</label>
   <textarea name="sum_app" type="text" dir="rtl" class="form-control"  value="" required></textarea>
    </div>
      <div class="col-md-12 py-1">
      <label dir="rtl" class="form-label">المرفقات</label>
      <input name="img_app" type="file" enctype="multipart/form-data" dir="rtl" class="form-control"  >
    </div>
    <div class="col-12 py-2">
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
            $name2_app = strip_tags($_POST['name2_app']);
            @$id_app = strip_tags($_POST['id_app']);
            $ph_app = strip_tags($_POST['ph_app']);
            @$email_app = strip_tags($_POST['email_app']);
            $sum_app = strip_tags($_POST['sum_app']);
            $order_app = strip_tags($_POST['order_app']);
            $ift = strtolower(pathinfo($_FILES["img_app"]["name"],PATHINFO_EXTENSION));
            if($ift != NULL && $ift != "jpg" && $ift != "png" && $ift != "jpeg"
              && $ift != "gif" && $ift != "pdf") {
                
              echo '
              <br><center>
<div class="col-md-5 mx-3  text-center px-3 alert alert-danger droid-arabic-kufi" role="alert" id="fone">
              ناسف لا يمكنك رفع هذا النوع من الملفات
</div>
</center>

     <script>location.href = "/app.php#fone";</script>';
              $uploadOk = 0;
              }
            else {
              $temp = explode(".", $_FILES["img_app"]["name"]);
              $newfilename = round(microtime(true)) . '.' . end($temp);
              move_uploaded_file($_FILES["img_app"]["tmp_name"], 'signature/'.$newfilename);
              $img_ap = @$newfilename;
              $img_app = "signature/".$img_ap;
              $iims=$msc->prepare("INSERT INTO `app_tab` (`name_app`,`name2_app`, `id_app`, `ph_app`, `email_app`, `sum_app`, `order_app`, `img_app`) VALUES ('$name_app','$name2_app', '$id_app', '$ph_app', '$email_app', '$sum_app', '$order_app', '$img_app') ");
              $iims -> execute();
            echo '
<center>
<div class="col-md-5 mx-3 text-center px-3  alert alert-success droid-arabic-kufi " role="alert" id="done">
تم تقديم طلبك بنجاح في إنتظار ان تتم مراجعتة و سيتم التواصل معك عن طريق الواتساب في اقرب فرصه .. وشكرا
</div>
</center>
<script>location.href = "/app.php#done";</script>
            ';

          }

        }
    ?>
    <?php
include('footer.php')
?>
  </body>
  </html>