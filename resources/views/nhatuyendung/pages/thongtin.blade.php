@extends('nhatuyendung.layout.index')
@section('content')

<!-- Page Content -->
<div class="container">

 <!-- slider -->
 <div class="row carousel-holder">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="panel panel-default">
           <div class="panel-heading"><h2 style="" align="center">Thông Tin Tài Khoản</h2></div>
           <div class="panel-body">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{$err}}<br>
                @endforeach
            </div>
            @endif
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            @if(session('loi'))
            <div class="alert alert-danger">
                {{session('loi')}}
            </div>
            @endif
            <form action="nhatuyendung/thongtin" method="post">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div>
                <label style="font-style: italic; color: black;">Tên đăng nhập</label>
               <input value="{{Auth::user()->username}}" type="text" class="form-control" placeholder="Username" name="username" aria-describedby="basic-addon1">
           </div>
           <br>
           <div>
               <label style="font-style: italic; color: black;">Họ và tên</label>
               <input value="{{Auth::user()->fullname}}" type="text" class="form-control" placeholder="Họ và tên" name="fullname" aria-describedby="basic-addon1">
           </div>
           <br>
           <div>
               <label style="font-style: italic; color: black;">Email</label>
               <input value="{{Auth::user()->email}}" readonly="" type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
               disabled
               >
           </div>
           <br>	
           <div>
            <input type="checkbox" class="" name="checkpassword" id="changePassword">
            <label style="font-style: italic; color: black;">Đổi mật khẩu</label>
            <input type="password" class="form-control password" name="password" aria-describedby="basic-addon1" disabled="">
        </div>
        <br>
        <div>
           <label style="font-style: italic; color: black;">Nhập lại mật khẩu</label>
           <input type="password" class="form-control password" name="passwordAgain" aria-describedby="basic-addon1" disabled="">
       </div>
       <br>
       <div>
        <label style="font-style: italic; color: black;">Tên công ty</label>
        <input value="{{Auth::user()->congty}}" type="text" class="form-control" placeholder="Công ty" name="congty" aria-describedby="basic-addon1">
    </div>
    <br>
    <div>
        <label style="font-style: italic; color: black;">Ngành nghề</label>
        <input value="{{Auth::user()->nghe}}" type="text" class="form-control" placeholder="Ngành nghề" name="nghe" aria-describedby="basic-addon1">
    </div>
    <br>
    <div>
        <label style="font-style: italic; color: black;">Địa chỉ</label>
        <input value="{{Auth::user()->diachi}}" type="text" class="form-control" placeholder="Địa chỉ" name="diachi" aria-describedby="basic-addon1">
    </div>
    <br>
    <div>
        <label style="font-style: italic; color: black;">Điện thoại</label>
        <input value="{{Auth::user()->dienthoai}}" type="text" class="form-control" placeholder="Điện thoại" name="dienthoai" aria-describedby="basic-addon1">
    </div>
    <br>
    <button style="background-color: #E7176F; border-radius: 20px; font-size: 30px;color: white; width: 100%;" type="submit" class="btn btn-default">Sửa
    </button>

</form>
</div>
</div>
</div>
<div class="col-md-2">
</div>
</div>
<!-- end slide -->
</div>
<!-- end Page Content -->

@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $("#changePassword").change(function(){
            if($(this).is(":checked")){
                $(".password").removeAttr('disabled');
            }else{
                $(".password").attr('disabled','');
            }
        });
    });
</script>
@endsection