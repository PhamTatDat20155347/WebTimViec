    @extends('layout.index1')
    @section('content')

    @section('css')
    <base href="{{asset('')}}">
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">    
    <link rel="stylesheet" href="css/jasny-bootstrap.min.css" type="text/css">  
    <link rel="stylesheet" href="css/bootstrap-select.min.css" type="text/css">  
    <!-- Material CSS -->
    <link rel="stylesheet" href="css/material-kit.css" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="fonts/font-awesome.min.css" type="text/css"> 
    <link rel="stylesheet" href="fonts/themify-icons.css"> 

    <!-- Animate CSS -->
    <link rel="stylesheet" href="extras/animate.css" type="text/css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="extras/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="extras/owl.theme.css" type="text/css">
    <!-- Rev Slider CSS -->
    <link rel="stylesheet" href="extras/settings.css" type="text/css"> 
    <!-- Slicknav js -->
    <link rel="stylesheet" href="css/slicknav.css" type="text/css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <!-- Responsive CSS Styles -->
    <link rel="stylesheet" href="css/responsive.css" type="text/css">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" href="css/custom-components.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/colors/red.css" media="screen" />

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/my.css" rel="stylesheet">
    <script type="text/javascript">
        // function guicv(){
        //     alert('Phạm Đạt');
        // }
    </script>
    <!-- Page Content -->
    @endsection
    @if(session('thongbao'))
    <div class="alert alert-success" style="color: #FFFFFF;">
        <h3 align="center">{{session('thongbao')}}</h3>
    </div>
    <br>
    @endif
    <div class="container" style="width: 1200px; padding: 15px;" >
        <div class="row" >
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
            <div class="alert alert-danger" style="">
               <h2 align="center"> {{session('loi')}}</h2>
            </div>
            @endif
            <!-- Blog Post Content Column -->
            <div class="col-lg-9" style="width: 850px;">

                <!-- Blog Post -->

                <!-- Title -->
                <h1>{{$post->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#">TatDat</a>
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" src="upload/post/{{$post->Hinh}}" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on {{$post->created_at}}</p>
                <hr>

                <!-- Post Content -->
                <p class="lead">
                    {!! $post->content !!}
                </p><hr>
                <p class="lead">
                    Liên Hệ: {!! $post->user->dienthoai !!}
                </p>
                <p class="lead">
                    Công ty: {!! $post->user->congty !!}
                </p>
                <p class="lead">
                    Địa chỉ: {!! $post->user->diachi !!}
                </p>
                <hr>
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-3" style="width: 350px;    ">
                <div class="panel panel-default">
                    @if(Auth::user())
                    <h2 align="center" style=" background-color: #2E2D2D;">

                        <form action="guicv/{{$post->id}}" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input  type="submit" name="guicv" value="Nộp đơn" style=" border-radius: 10px; background-color: #DD2E6C; color: white; padding: 10px;">
                        </form>
                    </h2>
                    @else
                    <h1 align="center" style=" background-color: #2E2D2D;">
                        <input style="font-size: 30px;"  type="submit" name="guicv" value="Nộp đơn" style=" border-radius: 10px; background-color: #DD2E6C; color: white; padding: 10px;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                        <div id="myModal" class="modal fade" role="dialog">
                          <div class="modal-dialog" style="width: 100%; height: 800px;">

                            <div  >
                                <div class="col-md-4 col-md-offset-4">
                                    <div class="login-panel panel panel-default">
                                        <div class="panel-heading">
                                            <h2 style="font-size: 30px;" class="panel-title">Please Sign In</h2>
                                        </div>
                                        <div class="panel-body">

                                            <form role="form" action="dangnhap/{{$post->id}}" method="POST">
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <fieldset>
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                                    </div>
                                                    <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Modal content-->
{{--                             <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </h1>
            @endif
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"><b><h3 align="center">Bài liên quan</h3></b></div>
            <div class="panel-body">

                <!-- item -->
                @foreach($postlienquan as $tt)
                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-5">
                        <a href="xembaidang/{{$tt->id}}.html">
                            <img width="200px" class="img-responsive" src="upload/post/{{$tt->Hinh}}" alt="">
                        </a>
                    </div>
                    <div class="col-md-7">
                        <a href="xembaidang/{{$tt->id}}.html"><b>{{$tt->title}}</b></a>
                    </div>
                    <p style="padding-left: 20px; color: black;">{{$tt->content}}</p>
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