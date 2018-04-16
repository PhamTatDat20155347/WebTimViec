@extends('nhatuyendung.layout.index')
@section('content')
<!-- Page Content -->
<div class="container" style="width: 1000px;">

	<!-- slider -->
	<div class="row carousel-holder">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div  class="panel-heading"><h2 style="font-style: italic; color: black;" align="center">Hãy Tham Gia Cùng Hàng Ngàn Công Ty Đang Sử Dụng VietnamWorks Mỗi Ngày</h2></div>
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
					<form action="nhatuyendung/dangky" method="post">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div>
							<label style="font-style: italic; color: black;">Tên đăng nhập</label>
							<input type="text" class="form-control" placeholder="Tên" name="username" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Họ và tên</label>
							<input type="text" class="form-control" placeholder="Họ và tên" name="fullname" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Email</label>
							<input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
							>
						</div>
						<br>	
						<div>
							<label style="font-style: italic; color: black;">Nhập mật khẩu</label>
							<input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Nhập lại mật khẩu</label>
							<input type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Tên công ty</label>
							<input type="text" class="form-control" placeholder="Công ty" name="congty" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Ngành nghề</label>
							<input type="text" class="form-control" placeholder="Ngành nghề" name="nghe" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Địa chỉ</label>
							<input type="text" class="form-control" placeholder="Địa chỉ" name="diachi" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Điện thoại</label>
							<input type="text" class="form-control" placeholder="Điện thoại" name="dienthoai" aria-describedby="basic-addon1">
						</div>
						<br>
						<button style="background-color: #E7176F; border-radius: 20px; font-size: 30px;color: white; width: 100%;"  type="submit" class="btn btn-default">Đăng ký
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