@extends('nhatuyendung.layout.index')
@section('content')
<!-- Page Content -->
<div class="container" >
@include('nhatuyendung.layout.menu')

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
					<form action="nhatuyendung/them" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div>
							<label style="font-style: italic; color: black;">Tiêu đề</label>
							<input type="text" class="form-control" placeholder="tiêu đề" name="title" aria-describedby="basic-addon1">
						</div>
						<br>
						<div class="form-group">
							<label>Ngành tuyển dụng</label>
							<select class="form-control" name="category_id" id="NganhTD">
								@foreach($category as $category)
								<option value="{{$category->id}}">{{$category->title}}</option>
								@endforeach
							</select>
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Nội dung</label>
							<input type="text" class="form-control" placeholder="Nội dung" name="content" aria-describedby="basic-addon1"
							>
						</div>
						<br>	
						<div>
							<label style="font-style: italic; color: black;">Từ khóa</label>
							<input type="text" class="form-control" name="keywork" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Tên công ty</label>
							<input value="{{Auth::user()->congty}}" readonly="" type="text" class="form-control" placeholder="Công ty" name="congty" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Email</label>
							<input value="{{Auth::user()->email}}" type="text" class="form-control" placeholder="Email" readonly="" name="email" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Địa chỉ</label>
							<input value="{{Auth::user()->diachi}}" readonly="" type="text" class="form-control" placeholder="Địa chỉ" name="diachi" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Điện thoại</label>
							<input value="{{Auth::user()->dienthoai}}" readonly="" type="text" class="form-control" placeholder="Điện thoại" name="dienthoai" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label style="font-style: italic; color: black;">Hình</label>
							<input type="file" class="form-control" name="Hinh">
						</div>
						<br>
						<button style="background-color: #E7176F; border-radius: 20px; font-size: 30px;color: white; width: 100%;"  type="submit" class="btn btn-default">Đăng Bài
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