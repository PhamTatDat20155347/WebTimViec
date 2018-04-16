<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tất Đạt | Đại học Bách Khoa Hà Nội</title>
    <base href="{{asset('')}}">
    <!-- Bootstrap Core CSS -->
    <link href="tuyendung/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="tuyendung/css/shop-homepage.css" rel="stylesheet">
    <link href="tuyendung/css/my.css" rel="stylesheet">
    @yield('css')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	@include('nhatuyendung.layout.header')

    <!-- Page Content -->
	@yield('content')
    <!-- end Page Content -->

    <!-- jQuery -->
    <script src="tuyendung/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="tuyendung/js/bootstrap.min.js"></script>
    <script src="tuyendung/js/my.js"></script>
    
    @yield('script')

</body>

</html>
