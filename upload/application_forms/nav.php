<?php 
  if (@$_SESSION['myUser'] != "panorama" && @$_SESSION['myPass'] != "panorama") {
  
echo '           

  <a href="index.php"><img dir="rtl" style="max-width: 100%; display: block; padding-left:13px ;padding-right: 13px  ;  margin-left: auto; margin-right: auto; margin-top: 50px; margin-bottom: 50px;" src="img/header.png"></a> 
   <div class="d-flex d-grid gap-2 d-md-flex justify-content-center droid-arabic-kufi" >
                <form method = "POST" action="" id="we">
                
                </form>         
<nav class="navbar navbar-expand-lg btn-outline-warning droid-arabic-kufi" dir="rtl">
  <div class="container-fluid btn-outline-warning">
    <a class="btn btn-outline-warning mx-1" href="index.php" style="font-size: 23px;">عن المكتب</a>
    <button class="navbar-toggler btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon btn-outline-warning " style="width:45px; height: 45px; border-radius:3px; border:solid #FFC107 ;background-color:#FFC107 !important;"></span>
    </button>
    <div class="collapse navbar-collapse text-left" id="navbarNav">
    <a class="btn btn-outline-warning mx-1" href="law.php" style="font-size: 23px;">المحامون لدينا</a>
                <br>
                <a class="btn btn-outline-warning mx-1" href="why.php" style="font-size: 23px;">لماذا تختارنا</a>
                <br>
                <a class="btn btn-outline-warning mx-1" href="rc.php" style="font-size: 23px;">المسؤلية الإجتماعية</a>
                <br>
                <a class="btn btn-outline-warning mx-1" href="sr.php" style="font-size: 23px;">خدمات المكتب</a>
                <br>
                <a class="btn btn-outline-warning mx-1" href="app.php" style="font-size: 23px;">تقديم طلبك</a>
    </div>
  </div>
</nav>
<header>
                </div>
<br>';

      }
      else {
    echo '           

  <a href="index.php"><img dir="rtl" style="max-width: 100%; display: block; padding-left:13px ;padding-right: 13px  ;  margin-left: auto; margin-right: auto; margin-top: 50px; margin-bottom: 50px;" src="img/header.png"></a> 
   <div class="d-flex d-grid gap-2 d-md-flex justify-content-center droid-arabic-kufi" >
                <form method = "POST" action="" id="we">
                
                </form>         
<nav class="navbar navbar-expand-lg btn-outline-warning droid-arabic-kufi" dir="rtl">
  <div class="container-fluid btn-outline-warning">
    <a class="btn btn-outline-warning mx-1" href="index.php" style="font-size: 23px;">الرئيسية</a>
    <button class="navbar-toggler btn btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon btn-outline-warning " style="width:45px; height: 45px; border-radius:3px; border:solid #FFC107 ;background-color:#FFC107 !important;"></span>
    </button>
   <a class="btn btn-outline-warning mx-1" href="law.php" style="font-size: 23px;">المحامون لدينا</a>
                <br>
                <a class="btn btn-outline-warning mx-1" href="why.php" style="font-size: 23px;">لماذا تختارنا</a>
                <br>
                <a class="btn btn-outline-warning mx-1" href="rc.php" style="font-size: 23px;">المسؤلية الإجتماعية</a>
                <br>
                <a class="btn btn-outline-warning mx-1" href="sr.php" style="font-size: 23px;">خدمات المكتب</a>
                <br>
                <a class="btn btn-outline-warning mx-1" href="app.php" style="font-size: 23px;">تقديم طلبك</a>
                <br>
                <button class="btn btn-outline-warning mx-1" type="submit" form="we" name="exit" style="font-size: 23px;">خروج</button>
    </div>
  </div>
</nav>
<header>
                </div>
<br>'; }


?>