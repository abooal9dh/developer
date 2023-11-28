  <?php
session_start();
require ('connect.php');
  if (@$_SESSION['myUser'] != "panorama" && @$_SESSION['myPass'] != "panorama") {
      echo("<script>location.href = 'log.php';</script>");
      }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <?php
 include ('header.php') ;?>
    <script>
    function myFunction() {  alert("!هل تريد حذف هذه الدعوه حقا ؟؟");}
   </script>
  </head>
  <body style="background-color: #1E1E1E; background-image: url('img/bg-noise.png'); overflow-x: hidden;">
    <?php

    if ($_SESSION['myUser'] == "panorama" && $_SESSION['myPass'] == "panorama") {
      include ('nav.php');
      }
    include ('slider.html');
    if (isset($_POST['exit'])) {
            session_destroy();
            echo("<script>location.href = 'log.php';</script>");
            }
    if (isset($_GET["page"])) { $page  = $_GET["page"]; } 
    else { $page=1; };
          $res_page = 10;
          $start_from = ($page-1) * $res_page;
          $gdms=$msc->prepare ("SELECT COUNT(id_count) AS total from app_tab");
          $gdms -> execute();
          $ddms = $gdms-> get_result();
          $cdta=$ddms->fetch_assoc();
          $rows = $cdta["total"];
          $ro = ceil($rows / $res_page);
          $gdms=$msc->prepare ("SELECT * FROM app_tab ORDER BY id_count  desc LIMIT $start_from ,".$res_page);
          $gdms -> execute();
          $ddms = $gdms-> get_result();
          while ($cdta=$ddms->fetch_assoc()) {
    ?>
<section dir="rtl" class="justify-content-center d-flex"> 
   <div class="col-md-1 px-2 align-items-center justify-content-center p-10  align-items-center">
                <?php echo '<a href="'.$cdta["img_app"].'"><img src="'.$cdta["img_app"].'" alt="avatar" width="60"
                height="60" class="rounded-circle shadow-1-strong me-3" /></a>';
echo '<br>
<br><center>
                <form method = "POST" action="del.php?id='.$cdta["id_count"].'">
                <button  onclick="myFunction()" class="btn btn-outline-warning droid-arabic-kufi" type="submit" name="'.$cdta["id_count"].'">حذف</button>
                </form>
              </center>' ?>
        </div>
        <div class="card col-md-8  px-4 mx-2 align-items-right droid-arabic-kufi text-warning justify-content-right  align-items-rigth" style="background-color:rgba(0, 0, 0, 0.0); border: solid #FFC107;">
          <br>
        <!--  <p class="small mb-0 " style="font-family: tahoma; font-weight: bold;" dir="ltr">
                  <?php echo $cdta["date"]; ?>
                </p>
                <h6 class="  fw-bold mb-1" style="margin-top:-23px;">
                  <p class="  fw-bold mb-1" style="padding-bottom: 15px; padding-top: 15px;">رقم الجوال : <?php echo $cdta["ph_app"]; ?></p>
                </h6>
                 <p class="  fw-bold mb-1"><?php echo $cdta["email_app"]; ?></p> -->
                
                <center style=" margin-top:27px; margin-bottom:27px;">
                  <p class="  fw-bold mb-1"><?php echo $cdta["date"]; ?></p>
                    <p class="  fw-bold col-md-4 mb-1" style="background-color:rgba(0, 0, 0, 0.0); border: solid 1px #FFC107; border-radius: 5px;" >رقم الجوال</p>
                  <p class="  fw-bold mb-1"><?php echo $cdta["ph_app"]; ?></p>
                    <p class="  fw-bold col-md-4 mb-1" style="background-color:rgba(0, 0, 0, 0.0); border: solid 1px #FFC107; border-radius: 5px;" >المدعي</p>
                  <p class="  fw-bold mb-1"><?php echo $cdta["name_app"]; ?></p>
                  <p class="  fw-bold col-md-4 mb-1" style="background-color:rgba(0, 0, 0, 0.0); border: solid 1px #FFC107; border-radius: 5px;" >المدعى عليه</p>
                  <p class="  fw-bold mb-1"><?php echo $cdta["name2_app"]; ?></p>
                  <p class="  fw-bold mb-1 col-md-4" style="background-color:rgba(0, 0, 0, 0.0); border: solid 1px #FFC107;border-radius: 5px;">نوع الدعوى </p>
                  <p class="  fw-bold mb-1"><?php echo $cdta["order_app"]; ?></p>
                  <p class="  fw-bold col-md-4 mb-1" style="background-color:rgba(0, 0, 0, 0.0); border: solid 1px #FFC107; border-radius: 5px;" >موجز الدعوى</p>
                  <p class="  fw-bold mb-1"><?php echo $cdta["sum_app"]; ?></p>
                  <a href='https://api.whatsapp.com/send/?phone=966<?php echo $cdta["ph_app"]; ?>'><img src="/img/layer_3.png" height="54px"></a>
                </center>
                  
                  <!-- <p class="  fw-bold mb-1">رقم الهوية : <?php echo $cdta["id_app"]; ?></p> -->
              </div>  

</section>
<br>

<?php 


}


for ($i=1; $i<=$ro; $i++) {  // print links for all pages
            echo "
            <div dir='rtl' class='justify-content-center d-flex px-3 col-12' >
            <a  class='text-warning page-item' href='cp.php?page=".$i."'";
            if ($i==$page) { echo " class='curPage'"; }
            echo ">".$i."</a>";

          }
          ?>
          </div>
</center>
<?php
include('footer.php')
?>
</body>
</html>