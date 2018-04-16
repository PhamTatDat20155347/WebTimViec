<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
  <title>Hồ sơ</title>
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
  <style type="text/css">
    a:hover{
      color: white;
    }
  </style>
</head>
<body>

  <div class="header">

    <div class="header-main">
      <a style="color: white; border-radius:10px;background: #ff3366; padding: 10px; font-style: italic;" class="back-dashboard m-b-sm" href="trangchu"><span><i style="color: white;" class="arrow left"></i>Bỏ qua</span></a><br><br><br>
     <h1>Hồ sơ cá nhân</h1>


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

          <form action="themhoso" method="post" enctype="multipart/form-data">
            <input required="" type="hidden" name="_token" value="{{csrf_token()}}">
            <input required="" type="text"  placeholder="Họ và tên" name="fullname" value="{{Auth::user()->fullname}}" />
            <input type="text"  placeholder="YYYY-mm-dd" name="birthday" required=""/>
            <input type="text"  placeholder="Email" name="email" required="" value="{{Auth::user()->email}}"/>
            <input type="text"  placeholder="Điện thoại" name="phone" required=""/>
            <input type="text"  placeholder="Học vấn" name="education" required=""/>
            <div>
              <label style="color: #FFFFFF;">Giới Tính</label>
              <label class="radio-inline">
                <input name="gender" value="Nam" checked="" type="radio">Nam
              </label>
              <label class="radio-inline">
                <input name="gender" value="Nữ" type="radio">Nữ
              </label>
              <label class="radio-inline">
                <input type="radio" name="gender1" value="Khác">Khác
              </label>

            </div>
            <br>
            <input type="text"  placeholder="Ngành nghề muốn ứng tuyển" name="job_position" required=""/>
            <input type="text"  placeholder="Thông tin" name="infomation" required=""/>
            <input type="text"  placeholder="Kĩ năng" name="skill" required=""/>
            <input type="text"  placeholder="Kinh nghiệm" name="experience" required=""/>
            <input type="text"  placeholder="Dự án" name="project" required=""/>
            <input type="text"  placeholder="Tình trạng" name="status" required=""/>
            <input type="file" name="Hinh" value="Hình">
            <input type="submit" value="Cập nhật hồ sơ">
          </form> 
        </div>
      </div>

    </div>
  </div>
</div>
</body>
</html>