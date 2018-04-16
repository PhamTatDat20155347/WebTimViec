@extends('nhatuyendung.layout.index')
@section('content')
@section('css')
<style type="text/css">
* { margin: 0; padding: 0; }
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
@endsection
<div class="container" >
    <div class="row">

     @include('nhatuyendung.layout.menu')

     <div class="col-md-9 " >
        <div class="panel panel-default" style="border: 1px solid #121212;" >
            <div class="panel-heading" style="background-color:#337AB7; color:white;">
                <h4><b>Hồ sơ ứng tuyển</b></h4>
            </div>
            <div id="page-wrap" >

                <img width="200px;" height="200px;" src="upload/cv/{{$cv->Hinh}}" alt="Photo of Cthulu" id="pic" />

                <div id="contact-info" class="vcard">

                    <!-- Microformats! -->

                    <h1 class="fn">{{$cv->fullname}}</h1>

                    <p>
                        Điện thoại: <span class="tel">{{$cv->phone}}</span><br />
                        Email: <a class="email">{{$cv->email}}</a><br>
                        Giới tính: <span class="tel">{{$cv->gender}}</span><br />
                        Ngày sinh: <span class="tel">{{$cv->birthday}}</span><br />
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

                    <dt>Trình độ học vấn</dt>
                    <dd>
                        <h2>Education</h2>
                        <p>{{$cv->education}}<br />

                        </dd>

                        <dd class="clear"></dd>

                        <dt>Kĩ năng</dt>
                        <dd>

                            <p>{{$cv->skill}}</p>
                        </dd>

                        <dd class="clear"></dd>

                        <dt>Ngành muốn ứng tuyển</dt>
                        <dd>
                            <h2>Ngành</h2>
                            <ul>
                                <li>{{$cv->job_position}}</li>
                            </ul>

                            <h2>Mức lương</h2>
                            <ul>
                                <li>10.000.000 VND</li>
                            </ul> 
                        </dd>

                        <dd class="clear"></dd>

                        <dt>Kinh nghiệm</dt>
                        <dd>{{$cv->experience}}</dd>

                        <dd class="clear"></dd>

                        <dt>Dự án</dt>
                        <dd>{{$cv->project}}</dd>
                        <dd class="clear"></dd>

                        <dt>Tình trạng hiện nay</dt>
                        <dd>{{$cv->status}}</dd>
                        <dd class="clear"></dd>
                    </dl>

                    <div class="clear"></div>

                </div>

            </div>
                    <a href="nhatuyendung/chapnhancv/{{$cv->users_id}}/{{$cv->id}}"><input type="submit" value="Chấp nhận" style="width: 30%; font-size: 30px; background-color: #3720C6; padding: 5px; color: white;"></a>
        </div> 


    </div>

</div>
@endsection