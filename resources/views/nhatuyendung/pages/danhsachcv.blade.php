@extends('nhatuyendung.layout.index')
@section('content')
    <div class="container">
        <div class="row">

 		@include('nhatuyendung.layout.menu')

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Danh sách CV ứng tuyển</b></h4>
                    </div>
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>id_Post</th>
                                <th>Tiêu đề</th>
                                <th>Người ứng tuyển</th>
                                <th>Email</th>
                                <th>Công việc ứng tuyển</th>
                                <th>Xem thêm</th>
                                <th>Chấp nhận</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($recruitment as $rec)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$rec->id}}</td>
                                    <td>{{$rec->post->title}}</td>
                                    <td>{{$rec->cv->fullname}}</td>
                                    <td>{{$rec->cv->email}}</td>
                                    <td>{{$rec->post->category->title}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="nhatuyendung/xemcv/{{$rec->cv_id}}"> Xem thêm</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="nhatuyendung/chapnhancv/{{$rec->cv_id}}">Chấp nhận</a></td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>



                </div>
            </div> 

        </div>

    </div>
@endsection