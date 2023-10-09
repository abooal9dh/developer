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
        <div class="card text-center my-4  col-md-4" style="background-color:rgba(0, 0, 0, 0.0); ">
          <div class="card-body">
            <img class="card-img-top" src="img/law_01.jpeg" height="450" style="border: solid #FFC107;">
            <br>
            <br>
            <h5 class="btn btn-warning" style="font-size: 27px;">عبدالرحمن بن محمد الجمعه</h5>
            <p class="card-text text-warning" style="font-size: 23px;">
محامي
          </p>
          </div>
        </div>
          
        <div class="card text-center my-4  col-md-4" style="background-color:rgba(0, 0, 0, 0.0); ">
          <div class="card-body">
            <img class="card-img-top" src="img/law_02.jpeg" height="450" style="border: solid #FFC107;">
            <br>
            <br>
            <h5 class="btn btn-warning" style="font-size: 27px;"> المثنى الحميد</h5>
            <p class="card-text text-warning" style="font-size: 23px;">
محامي
          </p>
          </div>
        </div>
         <div class="card text-center my-4  col-md-4" style="background-color:rgba(0, 0, 0, 0.0); ">
          <div class="card-body ">
            <img class="card-img-top" src="img/law_03.jpeg" height="450" style="border: solid #FFC107;">
            <br>
            <br>
            <h5 class="btn btn-warning" style="font-size: 27px;"> بدر البلهان</h5>
            <p class="card-text text-warning" style="font-size: 23px;">
محامي
          </p>
          </div>
        </div>


</div>


      </div>
    </div>
  </body>
  </html>