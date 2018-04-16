    @extends('nhatuyendung.layout.index')

    @section('content')
    <div class="container">

    	<!-- slider -->
		@include('nhatuyendung.layout.slide')
        <!-- end slide -->

        <div class="space20"></div>


        <div class="row main-left">
			@include('nhatuyendung.layout.menu')
            <div class="col-md-9">
	            <div class="panel panel-default">
	            	<div class="panel-heading" style="background-color: #0B5C46; color:white;" >
	            		<h2 style="margin-top:0px; margin-bottom:0px;">Bài Đăng</h2>
	            	</div>

	            	<div class="panel-body">
					</div>
	            </div>
        	</div>
        </div>
        <!-- /.row -->
    </div>
    @endsection