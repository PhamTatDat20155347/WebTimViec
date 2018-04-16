@extends('nhatuyendung.layout.index')
@section('content')
    <div class="container">
        <div class="row">

 		@include('nhatuyendung.layout.menu')

            <div class="col-md-9 ">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;">
                        <h4><b>Bài Tuyển Dụng</b></h4>
                    </div>
					@foreach($post as $post1)
	                    <div class="row-item row">
	                        <div class="col-md-3">

	                            <a href="">
	                                <br>
	                                <img width="200px" height="200px" class="img-responsive" src="upload/post/{{$post1->Hinh}}" alt="">
	                            </a>
	                        </div>

	                        <div class="col-md-9">
	                            <h3>{{$post1->title}}</h3>
	                            <p>{{$post1->content}}</p>
	                            <a class="btn btn-primary" href="nhatuyendung/baipost/{{$post1->id}}.html">Xem thêm<span class="glyphicon glyphicon-chevron-right"></span></a>
	                        </div>
	                        <div class="break"></div>
	                    </div>
					@endforeach

                    <!-- Pagination -->
                    <div style="text-align: center;">
                    	<?php echo $post->links(); ?>
                    </div>
						
                    <!-- /.row -->

                </div>
            </div> 

        </div>

    </div>
@endsection