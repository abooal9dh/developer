<html>
<head>
    <title>مكتب الزواج </title>
    <link rel="stylesheet" type="text/css" href="{{url('sign/bootstrap.css')}}">
    <script type="text/javascript" src="{{url('sign/jquery.min.js')}}"></script> 
    <link type="text/css" href="{{url('sign/jquery-ui.css')}}" rel="stylesheet"> 
    <script type="text/javascript" src="{{url('sign/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{url('sign/jquery.signature.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{url('sign/jquery.signature.css')}}">
  
    <style>
        .kbw-signature { width: 100%; height: 200px;}
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
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success  alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>  
                            <strong>{{ $message }} </strong>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('signaturepad.upload') }}">
                        @csrf
                         <div class="text-right col-12 my-2">
                             <input placeholder="الاسم" type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                         </div > 
                         <div class="text-right col-12 my-2">
                             <input placeholder="رقم الهاتف" type="text" id="origin" name="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                         </div>
                         <div class="text-right mb-6 col-12 my-2">
                             <input placeholder="رقم البطاقه" type="text" id="link" name="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                         </div>
                    
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