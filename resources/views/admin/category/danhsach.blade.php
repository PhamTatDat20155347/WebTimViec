            @extends('admin.layout.index')
            @section('content')
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Ngành tuyển dụng
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
                                    <th>Tên</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($nganh as $n)

                                <tr class="odd gradeX" align="center">
                                    <td>{{$n->id}}</td>
                                    <td>{{$n->title}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/category/xoa/{{$n->id}}"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/category/sua/{{$n->id}}">Edit</a></td>
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