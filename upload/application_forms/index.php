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
  
    <div class="rtl card mx-4" style="text-align: right; background-color:rgba(0, 0, 0, 0.0); /*border: solid #FFC107;*/ color: #FFC107;">
    
      <div class="rtl card-body rtl droid-arabic-kufi text-center ">
   <div class="row d-flex justify-content-center" dir="rtl">   
        <div class="card text-center my-4 mx-4 col-md-5" style="background-color:rgba(0, 0, 0, 0.0); border: solid #FFC107;">
          <div class="card-body text-end">
            <h5 class="btn btn-warning" style="font-size: 27px;">من نحن</h5>
            <p class="card-text text-warning" style="font-size: 23px;">مكتب عبدالرحمن محمد الجمعة محامون ومستشارون وموثقون هو مكتب مرخص له بمزاولة المحاماة بموجب ترخيص المحاماة رقم 39389 وتاريخ 1/7/1439 وترخيص التوثيق رقم 1767 /40 وتاريخ 1/9/1440هـ الصادرين من وزارة العدل بالمملكة العربية السعودية 
            </p>
          </div>
        </div>


        <div class="card text-center my-4  col-md-5" style="background-color:rgba(0, 0, 0, 0.0); border: solid #FFC107;">
          <div class="card-body text-end">
            <h5 class="btn btn-warning" style="font-size: 27px;">رسالتنا </h5>
            <p class="card-text text-warning" style="font-size: 23px;">خدمة متميزة منجزة وعادلة بشراكة مجتمعية

            </p>
          </div>
        </div>
</div>
<div class="row d-flex justify-content-center" dir="rtl">
           <div class="card text-center my-2 mx-4 col-md-5" style="background-color:rgba(0, 0, 0, 0.0); border: solid #FFC107;">
          <div class="card-body text-end">
            <h5 class="btn btn-warning" style="font-size: 27px;">رؤيتنا</h5>
            <p class="card-text text-warning" style="font-size: 23px;">الريادة في تقديم خدمات المحاماة الشرعية والقانونية بجودة وكفاءة تحقيقاً للعدالة ورضى 
الشركاء

 </p>
          </div>
        </div>


   <div class="card text-center my-2 col-md-5" style="background-color:rgba(0, 0, 0, 0.0); border: solid #FFC107;">
          <div class="card-body text-end">
            <h5 class="btn btn-warning" style="font-size: 27px;">قيمنا</h5>
            <p class="card-text text-warning" style="font-size: 23px;">الإنجاز والجودة، الشفافية والمصداقية، الأمانة والنزاهة، المحافظة على الأسرار
  </p>
          </div>
        </div>

</div>




<?php
include('footer.php')
?>

  </body>
  </html>