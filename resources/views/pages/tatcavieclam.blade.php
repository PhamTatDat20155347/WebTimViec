@extends('layout.index')
@section('content')
<!-- Công ty hàng đầu -->
<section class="bnrs container home__featured-companies">
  <div id="ads_TOP_COMPANIES_HORISONTAL" class="row">
    <h1 align="center" style="padding: 50px;">Các Công Ty Lớn Nhất</h1>
    <div class="animated fadeIn">

      <div class="col-md-2 col-sm-4 col-xs-6">
        <a class="single-bnr" target="_blank" href="//www.vietnamworks.com/tim-viec-lam/nha-tuyen-dung/-4326085/?utm_source=vnw_homepage&amp;utm_medium=viplogo&amp;utm_campaign=4326085&amp;utm_term=VB">
          <div class="logo-box flex-center-y">
            <img class="salesLogoImage" src="img/88x43-T_102007.jpg" width="88" height="43">

          </div>
          <span class="ad-slogan">Perfect Your English</span>
        </a>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6">
        <a class="single-bnr" target="_blank" href="//www.vietnamworks.com/tim-viec-lam/nha-tuyen-dung/-698582/?utm_source=vnw_homepage&amp;utm_medium=viplogo&amp;utm_campaign=698582&amp;utm_term=VB">
          <div class="logo-box flex-center-y">
            <img class="salesLogoImage" src="img/canon_fe_88x43_3_100991.png" width="88" height="43">

          </div>
          <span class="ad-slogan">CANON</span>
        </a>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6">
        <a class="single-bnr" target="_blank" href="http://panasonic.vietnamworks.com/?utm_source=vnw_homepage&amp;utm_medium=viplogo&amp;utm_campaign=387276&amp;utm_term=VB">
          <div class="logo-box flex-center-y">
            <img class="salesLogoImage" src="img/panasonic-vip_2_100005.jpg" width="88" height="43">
            <span class="new-job-tag flex-center-xy">Việc mới</span>
          </div>
          <span class="ad-slogan">Panasonic Vietnam Group</span>
        </a>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6">
        <a class="single-bnr" target="_blank" href="http://topit.vietnamworks.com/companies/company/FPT-Software/?utm_source=vnw_homepage&amp;utm_medium=viplogo&amp;utm_campaign=529938&amp;utm_term=VB">
          <div class="logo-box flex-center-y">
            <img class="salesLogoImage" src="img/88x43-FPT_100004.jpg" width="88" height="43">

          </div>
          <span class="ad-slogan">FPT SOFTWARE</span>
        </a>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6">
        <a class="single-bnr" target="_blank" href="http://topit.vietnamworks.com/companies/company/Evolable-Asia/?utm_source=vnw_homepage&amp;utm_medium=viplogo&amp;utm_campaign=26652&amp;utm_term=VB">
          <div class="logo-box flex-center-y">
            <img class="salesLogoImage" src="img/logo1_101809.jpg" width="88" height="43">

          </div>
          <span class="ad-slogan">EVOLABLE ASIA</span>
        </a>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6" style="padding-bottom: 50px;">
        <a class="single-bnr" target="_blank" href="http://pyco.vietnamworks.com/vi/?utm_source=vnw_homepage&amp;utm_medium=viplogo&amp;utm_campaign=3189099&amp;utm_term=VB">
          <div class="logo-box flex-center-y">
            <img class="salesLogoImage" src="img/logo-Pyco-88x43_102572.jpg" width="88" height="43">

          </div>
          <span class="ad-slogan">Tuyển 100 Senior Developers</span>
        </a>
      </div>

    </div>
  </div>
</section>
<!-- Hot Job -->
<section class="find-job section">
  <div class="container">

    <?php $i=0; ?>
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
    <div class="col-md-12">
      <div class="showing pull-left">
        <a href="#">Showing {{$i}} Jobs</a>
      </div>                    
      <ul class="pagination pull-right">              
        <li>{{$post->links()}}</li>
      </ul>
    </div>
  </div>
</section>
@endsection
      <!-- End hot Job -->