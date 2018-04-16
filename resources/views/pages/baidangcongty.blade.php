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
    @endsection
    {{-- <section class="find-job section" style="background-color: white;"> --}}
    	<div class="container" >

    		<?php $i=0; ?>
    		@if(!Auth::user())
    		<h2 class="section-title">Việc Làm Tốt Nhất</h2>
    		@foreach($post as $post1)
    		<?php $i++; ?>
    		<div class="row" style="margin-left: 10px; ">
    			<div class="col-md-12" >
    				<div class="job-list" style="width: 1200px;">
    					<div class="thumb" style="">
    						<a href="job-details.html"><img width="200px;" height="150px;" src="upload/post/{{$post1->Hinh}}" alt=""></a>
    					</div>
    					<div class="job-list-content" style="display: inline-block; margin-left: 20px; width: 850px;">
    						<h4><a href="job-details.html">{{$post1->title}}</a><span class="full-time">Full-Time</span></h4>
    						<p>{{$post1->content}}</p>
    						<div class="job-tag">
    							<div class="pull-left">
    								<div class="meta-tag">
    									<span><a href="browse-categories.html"><i class="ti-brush"></i>by TatDat</a></span>
    									<span><i class="ti-location-pin"></i>{{$post1->user->diachi}}</span>
    									<span><i class="ti-time"></i>{{$post1->user->congty}}</span>
    								</div>
    							</div>
    							<div class="pull-right">
    								<div class="icon">
    									<i class="ti-heart"></i>
    								</div>
    								<a href="xembaidang/{{$post1->id}}.html" class="btn btn-common btn-rm">Xem thêm</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		@endforeach
    		@else
    		<h2 class="section-title">Việc Làm Của Công Ty</h2>
    		@foreach($post as $post1)
    		<?php $i++; ?>
    		<div class="row" style="margin-left: 10px; ">
    			<div class="col-md-12" >
    				<div class="job-list" style="width: 1200px; border: none;">
    					<div class="thumb" style="">
    						<a href="job-details.html"><img width="200px;" height="150px;" src="upload/post/{{$post1->Hinh}}" alt=""></a>
    					</div>
    					<div class="job-list-content" style="display: inline-block; margin-left: 20px; width: 850px;">
    						<h4 style="color: white;">{{$post1->title}}<span class="full-time">Full-Time</span></h4>
    						<p>{{$post1->content}}</p>
    						<div class="job-tag">
    							<div class="pull-left">
    								<div class="meta-tag">
    									<span><a href="browse-categories.html"><i class="ti-brush"></i>by TatDat</a></span>
    									<span><i class="ti-location-pin"></i>{{$post1->user->diachi}}</span>
    									<span><i class="ti-time"></i>{{$post1->user->congty}}</span>
    								</div>
    							</div>
    							<div class="pull-right">
    								<div class="icon">
    									<i class="ti-heart"></i>
    								</div>
    								<a href="xembaidang/{{$post1->id}}.html" class="btn btn-common btn-rm">Xem thêm</a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    		@endforeach
    		@endif
    		<div class="col-md-12">
    			<div class="showing pull-left">
    				<a href="#">Showing {{$i}} Jobs</a>
    			</div>                    
    			<ul class="pagination pull-right">              
    				<li>{{$post->links()}}</li>
    			</ul>
    		</div>
    	</div>
{{--     </section> --}}

    @endsection