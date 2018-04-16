    @extends('nhatuyendung.layout.index')
    @section('content')
    <!-- Page Content -->
    <a href="nhatuyendung/sua/{{$post->id}}" style="font-size: 25px; margin-left:100px; padding: 5px; background-color: #973CAA; border-radius: 20px;">Sửa</a>
        <a href="nhatuyendung/xoa/{{$post->id}}" style="font-size: 25px; margin-left:10px; padding: 5px; background-color: #973CAA; border-radius: 20px;">Xóa</a>
    <div class="container">
        <div class="row">
        
            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{$post->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">Tất Đạt</a>
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="upload/post/{{$post->Hinh}}" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at}}</p>
                <hr>

                <!-- Post Content -->
                <p class="lead">
                    {!! $post->content !!}
                </p>

                <hr>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>Bài khác</b></div>
                    <div class="panel-body">

                        <!-- item -->
                        @foreach($post1 as $tt)
                            <div class="row" style="margin-top: 10px;">
                                <div class="col-md-5">
                                    <a href="nhatuyendung/baipost/{{$tt->id}}.html">
                                        <img class="img-responsive" src="upload/post/{{$tt->Hinh}}" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <a href="nhatuyendung/baipost/{{$tt->id}}.html"><b>{{$tt->description}}</b></a>
                                </div>
                                <p style="padding-left: 2px;">{{$tt->content}}</p>
                                <div class="break"></div>
                            </div>
                        @endforeach
                        <!-- end item -->

                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
    @endsection