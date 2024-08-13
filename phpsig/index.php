<html>
<head>
    <title>مكتب الزواج </title>
    <script type="text/javascript" src="sign/jquery.min.js"></script> 
    <link type="text/css" href="sign/jquery-ui.css" rel="stylesheet"> 
    <script type="text/javascript" src="sign/jquery-ui.min.js"></script>
    <script type="text/javascript" src="sign/jquery.signature.js"></script>
    <link rel="stylesheet" type="text/css" href="sign/jquery.signature.css">
    <script type="text/javascript" src="sign/jquery.ui.touch-punch.min.js"></script>
  
    <style>
        .kbw-signature { width: 50%; height: 200px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
    </style>
  
</head>
<body class="bg-dark">
<div class="container">
   <div class="row">
       <div class="col-md-6 offset-md-3 mt-5" dir="rtl">
           <div class="card">
               <div class="card-header text-center">
                   <h5>مكتب الزواج  </h5>
               </div>
               <div class="card-body" >
            
                    <form method="POST" action="upload.php" enctype="multipart/form-data">
                    
                        <div class="col-md-12 text-center" >
                            <label class="" for="">التوقيع:</label>
                            <br/>
                            <div id="sig" ></div>
                            <br/>
                            <button id="clear" class="btn btn-danger btn-sm">إزالة التوقيع</button>
                            <textarea id="signature64" name="signed" style="display: none"></textarea>
                        </div>
                        <br/>
                        <button class="btn btn-success">حفظ</button>
                        
                    </form>
               </div>
           </div>
       </div>
   </div>
</div>

<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>

</body>
</html>