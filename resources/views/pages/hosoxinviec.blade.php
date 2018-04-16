<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

 <title>One Page Resume</title>

 <style type="text/css">
 * { margin: 0; padding: 0; }
 body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(img/bg/bg-intro-1.jpg); }
 .clear { clear: both; }
 #page-wrap { width: 800px; margin: 40px auto 60px; }
 #pic { float: right; margin: 10px 0 0 0; }
 #pic1 {  margin: 0px 0px 0 600px; }
 h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
 h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
 h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
 p { margin: 0 0 16px 0; }
 a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
 a:hover { border-bottom-style: solid; color: black; }
 ul { margin: 0 0 32px 17px; }
 #objective { width: 500px; float: left; }
 #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
 dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
 dd { width: 600px; float: right; }
 dd.clear { float: none; margin: 0; height: 15px; }
 #page-wrap input[type="text"] {

  outline: none;
  font-size: 15px;
  font-weight: 400;
  color: #060606;
  padding: 12px 12px 5px 0;
  border:none;
  border-bottom:1px solid #060606;
  width: 87%;
  margin: 0 0 20px;
  display: inline-block;
  background-color: #9FDFA4;
}
</style>
</head>

<body>

  <div id="page-wrap" style="padding: 10px; padding-right:50px;background-color: #9FDFA4; color: #153172;">
    <?php $cv= Auth::user()->cv; ?>
    <a style="color: blue; font-style: italic; font-weight: bold;" class="back-dashboard m-b-sm" href="trangchu"><span><i class="fa fa-arrow-left"></i>Trở về trang chủ</span></a>
    <form method="post" action="hosoxinviec" enctype="multipart/form-data">
                  <input required="" type="hidden" name="_token" value="{{csrf_token()}}">
    <div><input type="file" name="Hinh" id="pic1" value="Hình" ></div>
    <img src="upload/cv/{{$cv->Hinh}}" alt="avatar" id="pic" style="width: 200px; height: 203px;" /><br>


    <div id="contact-info" class="vcard">

      <!-- Microformats! -->

      <input style="width: 585px; font-size: 50px; color: #69A465; " type="text" name="fullname" required="" value="{{$cv->fullname}}">

      <p>
        Điện thoại:&nbsp; <span class="tel"><input style="width: 300px;" type="text" name="phone" required="" value="{{$cv->phone}}"></span><br />
        Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input style="width: 300px;" type="text" name="email" required="" value="{{$cv->email}}"><br />
        Giới tính:&nbsp;&nbsp;&nbsp; <span class="gender"><input style="width: 300px;" type="text" name="gender" required="" value="{{$cv->gender}}"></span><br>
        Ngày sinh:&nbsp; <span class="date"><input style="width: 300px;" type="text" name="birthday" required="" value="{{$cv->birthday}}"></span>

      </p>
    </div>

    <div id="objective">
      <p>
        {{$cv->information}}
      </p>

    </div>

    <div class="clear"></div>

    <dl>
      <dd class="clear"></dd>

      <dt style="margin-right: 50px;">Học vấn</dt>


      <p><strong>Trình độ</strong><br /><input style="width: 500px;" type="text" name="education" required="" value="{{$cv->education}}"></p></p> </p>

      <dd class="clear"></dd>

      <dt style="margin-right: 50px;">Kĩ năng</dt>

      <p>      <input style="width: 500px;" type="text" name="skill" required="" value="{{$cv->skill}}"></p></p>

      <dd class="clear"></dd>

      <dt style="margin-right: 50px;">Vị trí muốn ứng tuyển</dt>

      <p><input style="width: 500px;" type="text" name="job_position" required="" value="{{$cv->job_position}}"></p></p>


      <dd class="clear"></dd>

      <dt style="margin-right: 50px;">Kinh nghiệm</dt>

      <ul>
        <li>       <input style="width: 500px;" type="text" name="experience" required="" value="{{$cv->experience}}"></p></li>

      </ul>

      <dd class="clear"></dd>

      <dt style="margin-right: 50px;">Dự án</dt>

      <p><input style="width: 500px;" type="text" name="project" required="" value="{{$cv->project}}"></p></p>

      <dd class="clear"></dd>

      <dt style="margin-right: 50px;">Tình trạng</dt>

      <p><input style="width: 500px;" type="text" name="status" required="" value="{{$cv->status}}"></p></p>


      <dd class="clear"></dd>
    </dl>

    <div class="clear"></div>
    <input type="submit" name="" value="Cập nhập hồ sơ" style="background-color: #E61B1B; color: white; padding:10px; width: 100%;font-size: 24px;" >
</form>
  </div>

</body>

</html>
