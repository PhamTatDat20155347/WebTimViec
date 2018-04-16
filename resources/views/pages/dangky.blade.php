<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
  <title>Đăng ký</title>
  <script src="dn_dk/js/jquery.min.js"></script>
  <!-- Custom Theme files -->
  <link href="dn_dk/css/style.css" rel="stylesheet" type="text/css" media="all"/>
  <!-- for-mobile-apps -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <!-- //for-mobile-apps -->
  <!--Google Fonts-->
  <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="header">
    <div class="header-main" >
     <h1>Đăng ký</h1>
     <div class="header-bottom">
      <div class="header-right w3agile">
        <div class="header-left-bottom agileinfo">
          @if(count($errors)>0)
          <div class="alert alert-danger">
            @foreach($errors->all() as $err)
            {{$err}}<br>
            @endforeach
          </div>
          <br>
          @endif
          @if(session('thongbao'))
          <div class="alert alert-success" style="color: #FFFFFF;">
            {{session('thongbao')}}
          </div>
          <br>
          @endif
          @if(session('loi'))
          <div class="alert alert-danger">
            {{session('loi')}}
          </div>
          <br>
          @endif
          <form action="dangky" method="post">
            <input required="" type="hidden" name="_token" value="{{csrf_token()}}">
            <div>
              <input required="" class="" type="text"  placeholder="Username" name="username"/>
              <input required="" type="text"  placeholder="Họ và tên" name="fullname"/>
              <input type="text"  placeholder="Email" name="email"/>
              <input required="" type="password"  placeholder="Mật khẩu" name="password" />
              <input required="" type="password"  placeholder="Nhập lại mật khẩu" name="passwordAgain" />

              <input type="submit" value="Đăng ký">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
</div>
</body>
</html>