@extends('../layout/index1')
@section('content')
<div style="margin-top: 50px;" class="container">	
	<table style="margin-top:20px;">
		<div class="row form_login" style="width: 850px;margin: auto;background: #27E4B1;padding: 20px 20px;">
			<form method="post" action="" >
				<input type="hidden" name="_token" value="{{csrf_token()}}" >
				<h2 style="text-align: center;color: #902CB1;">Hãy Tham Gia Cùng Hàng Ngàn Công Ty<br>Đang Sử Dụng Vietnamjob Mỗi Ngày</h2>
				<div class="form-group">
{{-- 				@if(count($errors)>0)
					<div class="alert alert-danger">
						@foreach($errors->all() as $err)
							{{$err}};
						@endforeach
					</div>
				@endif
			    @if(Session::has('thanhcong'))
			    	<div class="alert alert-success">{{Session::get('thanhcong')}}</div>
			    	@endif --}}
			    </div>
			    <div class="form-group">
			    	<b>Tên đăng nhập</b>
			    	<input  type="text" class=" form-control"  aria-describedby="emailHelp" placeholder="Nhập Tên tài khoản" name="username">
			    </div>
			    <div class="form-group">
			    	<b>Học và tên</b>
			    	<input type="text" class="form-control" name="fullname" aria-describedby="emailHelp" placeholder="Nhập Địa chỉ">
			    </div>
			    <div class="form-group">
			    	<b>Email</b>
			    	<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Nhập Email">
			    </div>
			    <div class="form-group">
			    	<b>Mật khẩu</b>
			    	<input type="password" class="form-control" name="password" placeholder="Nhập Mật khẩu">
			    </div>

			    <div class="form-group">
			    	<b>Nhập lại mật khẩu</b>
			    	<input type="text" class="form-control" name="passwordAgain" aria-describedby="emailHelp" placeholder="Nhập lại mật khẩu">
			    </div>
			    <div class="form-group" style="text-align: center">
			    	<button type="submit" class=" col-6 btn btn-danger">Đăng ký</button>
			    </div>

			</form>
		</table>
	</div>

	@endsection