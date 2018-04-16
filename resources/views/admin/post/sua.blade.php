        
@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bài đăng
                    <small>{{$post->description}}</small>
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
                <form action="admin/post/sua/{{$post->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Nhà tuyển dụng</label>
                        <select class="form-control" name="user_id" id="NhaTD">
                            @foreach($user as $user)
                            <option 
                            @if($post->user->id == $user->id)
                            {{'selected'}} 
                            @endif 
                            value="{{$user->id}}">{{$user->congty}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Ngành tuyển dụng</label>
                    <select class="form-control" name="category_id" id="NganhTD">
                        @foreach($category as $category)
                        <option 
                        @if($post->category->id == $category->id)
                        {{'selected'}} 
                        @endif
                        value="{{$category->id}}">{{$category->title}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Tiêu đề</label>
                <input class="form-control" name="title" placeholder="Nhập tiêu đề" value="{{$post->title}}" />
            </div>
            <div class="form-group">
                <label>Ngành</label>
                <input required="" class="form-control" name="description" placeholder="Ngành" value="{{$post->description}}"/>
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea value="{{$post->content}}" required="" name="content" id="demo" class="form-control ckeditor" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Từ khóa</label>
                <input value="{{$post->keywork}}" required="" class="form-control" name="keywork" placeholder="keywork" />
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file" name="Hinh" class="form-control">
            </div>
            <button type="submit" class="btn btn-default">Sửa</button>
            <button type="reset" class="btn btn-default">Reset</button>
            <form>
            </div>
        </div>
        <!-- /.row -->
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection
<!-- /#page-wrapper -->