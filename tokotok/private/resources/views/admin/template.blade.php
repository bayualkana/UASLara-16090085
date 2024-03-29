<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Title -->
    <title>Admin Groceris</title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('public/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">
</head>
<body id="page-top">
{{--include file sidebar.blade.php--}}
 <div id="wrapper">
    @include('admin.sidebar')
    
          
    <div id="content-wrapper" class="d-flex flex-column">
    @include('admin.navbar')
    
    <div class="container-fluid">
        @yield('main')

</div>
        
   
    </div>
    </div>

    <!-- ##### All Javascript Script ##### -->
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('public/admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/admin/js/sb-admin-2.min.js')}}"></script>
</body>
</html>