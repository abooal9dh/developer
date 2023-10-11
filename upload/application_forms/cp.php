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
                <form method = "POST" action="">
                <button onclick="myFunction()" class="btn btn-outline-warning" type="submit" name="'.$cdta["id_count"].'">حذف</button>
                </form>
              </center>' ?>
        </div>
        <div class="card col-md-8 bg-warning px-4 mx-2 align-items-right droid-arabic-kufi text-dark justify-content-right  align-items-rigth">
          <br>
          <p class="small mb-0 " style="font-family: tahoma; font-weight: bold;" dir="ltr">
                  <?php echo $cdta["date"]; ?>
                </p>
                <h6 class="  fw-bold mb-1">
                  <?php echo $cdta["name_app"]; ?>
                </h6>
                <p class="  fw-bold mb-1"><?php echo $cdta["email_app"]; ?></p>
                
                <center>
                  <p class="  fw-bold mb-1">***.. مختصر الدعوى ..***</p>
                  <p class="  fw-bold mb-1"><?php echo $cdta["sum_app"]; ?></p>
                  <p class="  fw-bold mb-1">***.. الطلبات ..***</p>
                  <p class="  fw-bold mb-1"><?php echo $cdta["order_app"]; ?></p>
                  <p class="  fw-bold mb-1">_________</p>
                </center>
                  <p class="  fw-bold mb-1">رقم الجوال : <?php echo $cdta["ph_app"]; ?></p>
                  <p class="  fw-bold mb-1">رقم الهوية : <?php echo $cdta["id_app"]; ?></p>
              <br>
              </div>  

</section>
<br>

<?php 
@$del = $cdta['id_count'];
if (isset($cdta['id_count'])) {
            $dfms = $msc->prepare("DELETE FROM app_tab WHERE id_count = '$del'");
        $dfms -> execute();
            }
}

for ($i=1; $i<=$ro; $i++) {  // print links for all pages
            echo "
            <div dir='rtl' class='justify-content-center d-flex px-3' >
            <a  class='text-warning page-item' href='cp.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> 
            
            ";}
          ?>
          </div>
</center>
<?php
include('footer.php')
?>
</body>
</html>