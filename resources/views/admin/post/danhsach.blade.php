        @extends('admin.layout.index')
        @section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài tuyển dụng
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Nhà tuyển dụng</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Content</th>
                                <th>Keywork</th>
                                <th>Hinh</th>
                                <th>Ngành nghề</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($post as $post)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->user->congty}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->description}}</td>
                                    <td>{{$post->content}}</td>
                                    <td>{{$post->keywork}}</td>
                                    <td>
                                        <img width="100px"  src="upload/post/{{$post->Hinh}}">
                                    </td>
                                    <td>{{$post->category->title}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/post/xoa/{{$post->id}}"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/post/sua/{{$post->id}}">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection