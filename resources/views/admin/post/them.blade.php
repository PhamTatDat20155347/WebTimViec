        
@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tuyển dụng
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
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
                <form action="admin/post/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Nhà tuyển dụng</label>

                        <select class="form-control" name="user_id" id="NhaTD">
                            @foreach($user as $user)
                            <option value="{{$user->id}}">{{$user->congty}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ngành tuyển dụng</label>
                        <select class="form-control" name="category_id" id="NganhTD">
                            @foreach($category as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tiêu đề</label>
                        <input required="" class="form-control" name="title" placeholder="Nhập tiêu đề" />
                    </div>
                    <div class="form-group">
                        <label>Ngành</label>
                        <input required="" class="form-control" name="description" placeholder="Ngành" />
                    </div>
                    <div class="form-group">
                        <label>Nội dung</label>
                        <textarea required="" name="content" id="demo" class="form-control ckeditor" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Từ khóa</label>
                        <input required="" class="form-control" name="keywork" placeholder="keywork" />
                    </div>
                    <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" name="Hinh" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection
        @section('script')
{{--         <script type="text/javascript">
            $(document).ready(function(){
                $("#NhaTD").change(function(){
                    var idTheLoai = $(this).val();
                        //alert(idTheLoai);
                        $.get("admin/ajax/loaitin/"+idTheLoai,function(data){
                            $("#LoaiTin").html(data);
                        });
                    });
            });
        </script> --}}
        @endsection