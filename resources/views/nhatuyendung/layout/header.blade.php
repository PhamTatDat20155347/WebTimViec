    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #0B5C46; color: white;">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="nhatuyendung/trangchu">Trang Chủ</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <a >Giới thiệu</a>
            </li>
            <li>
              <a >Liên hệ</a>
            </li>
          </ul>

          <form class="navbar-form navbar-left" role="search" action="timkiem" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
             <input type="text" class="form-control" name="tukhoa" placeholder="Search">
           </div>
           <button type="submit" class="btn btn-default">Tìm</button>
         </form>

         <ul class="nav navbar-nav pull-right">
          @if(Auth::user())
          @if(!Auth::user()->quyen==1)
          <li>
            <a href="nhatuyendung/dangky">Đăng ký</a>
          </li>
          <li>
            <a href="nhatuyendung/dangnhap">Đăng nhập</a>
          </li>
          @elseif(Auth::user()->quyen==2)
          <li>
            <a href="nhatuyendung/dangky">Đăng ký</a>
          </li>
          <li>
            <a href="nhatuyendung/dangnhap">Đăng nhập</a>
          </li>
          @else
          <li>
           <a href="nhatuyendung/thongtin">
            <span class ="glyphicon glyphicon-user"></span>
            {{ Auth::user()->username}}
          </a>
        </li>

        <li>
         <a href="nhatuyendung/dangxuat">Đăng xuất</a>
       </li>
       @endif

       @else
       <li>
        <a href="nhatuyendung/dangky">Đăng ký</a>
      </li>
      <li>
        <a href="nhatuyendung/dangnhap">Đăng nhập</a>
      </li>
      @endif
    </ul>
  </div>



  <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>