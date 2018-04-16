<!DOCTYPE html>
<html>
<head>
    <title></title>
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
<base href="{{asset('')}}">
  <!-- Color CSS Styles  -->
  <link rel="stylesheet" href="css/custom-components.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" media="screen" />

  <!-- Custom CSS -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link href="css/my.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#em-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <img src="https://images.vietnamworks.com/gen/logo_employer.png?v=1" alt="Trang chủ Vietnamworks" width="184" height="57">
                        </a>
                        <div class="pull-left xs-menu visible-xs link-list">
                                                                                    <a href="#" class="call-me-back-anchor">Liên Hệ Ngay</a>
                            <ul class="dropdown-menu call-me-back-menu">
                                <form role="form" name="ofrm" method="POST" action="https://employer.vietnamworks.com/employers/contactus.php">
                                    <div class="form-group">
                                        <input type="text" name="fullname" id="fullname" class="form-control name" placeholder="Họ Tên">
                                        <span class="help-block error-message" style="display:none;" id="err_fullname">Vui lòng nhập họ tên</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="companyname" id="employerCompany" class="form-control company" placeholder="Tên Công Ty">
                                    </div>
                                    <div class="form-group">
                                        <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" name="employerCity" id="employerCity" class="form-control location ui-autocomplete-input" placeholder="Chọn Địa Điểm" autocomplete="off">
                                        <div class="location-list"><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none;"></ul></div>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Số Điện Thoại">
                                        <span class="help-block error-message" style="display:none;" id="err_phone">Vui lòng nhập số điện thoại</span>
                                        <span class="help-block error-message" style="display:none;" id="err_phone_invalid">Số điện thoại không hợp lệ</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Địa Chỉ Email">
                                        <span class="help-block error-message" style="display:none;" id="err_email">Vui lòng nhập địa chỉ email</span>
                                        <span class="help-block error-message" style="display:none;" id="err_email_invalid">Địa chỉ email không hợp lệ</span>
                                        <span class="help-block error-message" style="display:none;" id="err_email_disposable">Vui lòng không sử dụng địa chỉ email không xác thực</span>
                                    </div>
                                    <input type="hidden" value="" name="companysizetext"> <input type="hidden" value="0" name="issend" id="issend"> <input type="hidden" value="0" name="location" id="location"> <input type="hidden" value="1" name="isContactHomepage"> <input type="hidden" value="1" name="youareid">
                                    <button type="button" class="btn btn-default call-me-back-btn">Liên Hệ Ngay</button>
                                </form>
                            </ul>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="em-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="hidden-xs">
                                <a href="/employers/product_catalog.php">Sản Phẩm &amp; Dịch vụ</a>
                            </li>
                            <li class="dropdown hidden-xs">
                                <a href="#" class="dropdown-toggle call-me-back-anchor">Liên Hệ Ngay</a>
                                <ul class="dropdown-menu call-me-back-menu">
                                    <form role="form" name="ofrm" method="POST" action="https://employer.vietnamworks.com/employers/contactus.php">
                                        <div class="form-group">
                                            <input type="text" name="fullname" id="fullname" class="form-control name" placeholder="Họ Tên">
                                            <span class="help-block error-message" style="display:none;" id="err_fullname">Vui lòng nhập họ tên</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="companyname" id="employerCompany" class="form-control company" placeholder="Tên Công Ty">
                                        </div>
                                        <div class="form-group">
                                            <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" name="employerCity" id="employerCity" class="form-control location ui-autocomplete-input" placeholder="Chọn Địa Điểm" autocomplete="off">
                                            <div class="location-list"><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-2" tabindex="0" style="display: none;"></ul></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Số Điện Thoại">
                                            <span class="help-block error-message" style="display:none;" id="err_phone">Vui lòng nhập số điện thoại</span>
                                            <span class="help-block error-message" style="display:none;" id="err_phone_invalid">Số điện thoại không hợp lệ</span>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Địa Chỉ Email">
                                            <span class="help-block error-message" style="display:none;" id="err_email">Vui lòng nhập địa chỉ email</span>
                                            <span class="help-block error-message" style="display:none;" id="err_email_invalid">Địa chỉ email không hợp lệ</span>
                                            <span class="help-block error-message" style="display:none;" id="err_email_disposable">Vui lòng không sử dụng địa chỉ email không xác thực</span>
                                        </div>
                                        <input type="hidden" value="" name="companysizetext"> <input type="hidden" value="0" name="issend" id="issend"> <input type="hidden" value="0" name="location" id="location"> <input type="hidden" value="1" name="isContactHomepage">
                                        <input type="hidden" value="1" name="youareid">
                                        <button type="button" class="btn btn-default call-me-back-btn">Liên Hệ Ngay</button>
                                    </form>
                                </ul>
                            </li>
                            <li class="visible-xs xs-languages link-list">
                                                                                                            Tiếng Việt
                                                                         |                                                                                                             <a href="/?lang=2">English</a>
                                                                         |                                                                                                             <a href="/?lang=3">日本語</a>
                                                                                                                                    </li>
                            <li class="visible-xs">
                                <a href="/employers/product_catalog.php">Sản Phẩm &amp; Dịch vụ</a>
                            </li>
                            <li class="visible-xs xs-user-account">
                                                                    <a href="/employers/login.php">Đăng Nhập</a>
                                    <a href="/employers/signup.php">Đăng Ký</a>
                                                            </li>
                            <li>
                                <a href="https://www.vietnamworks.com/company/vietnamworks">Giới Thiệu</a>
                            </li>
                            <li>
                                <a href="https://employer.vietnamworks.com/report/series-of-report-2016?utm_source=EMSITE&amp;utm_medium=TABREPORT&amp;utm_campaign=SERIESOFREPORT2016">Báo Cáo</a>
                            </li>
                            <li class="visible-xs">
                                <a href="https://www.vietnamworks.com/">Cho Người Tìm Việc</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right hidden-xs">
                            <li class="languages">
                                <span class="link-list">
                                                                                                                        Tiếng Việt
                                                                                 |                                                                                                                         <a href="/?lang=2">English</a>
                                                                                 |                                                                                                                         <a href="/?lang=3">日本語</a>
                                                                                                                                                    </span>
                            </li>
                            <li>
                                <a href="https://www.vietnamworks.com/">Cho Người Tìm Việc</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <script type="text/javascript">
            var header = {
                cityNames: ["H\u1ed3 Ch\u00ed Minh","H\u00e0 N\u1ed9i","\u0110BSCL","An Giang","B\u00e0 R\u1ecba - V\u0169ng T\u00e0u","B\u1eafc K\u1ea1n","B\u1eafc Giang","B\u1ea1c Li\u00eau","B\u1eafc Ninh","B\u1ebfn Tre","Bi\u00ean H\u00f2a","B\u00ecnh \u0110\u1ecbnh","B\u00ecnh D\u01b0\u01a1ng","B\u00ecnh Ph\u01b0\u1edbc","B\u00ecnh Thu\u1eadn","C\u00e0 Mau","C\u1ea7n Th\u01a1","Cao B\u1eb1ng","\u0110\u00e0 N\u1eb5ng","\u0110\u1eafk L\u1eafk","\u0110i\u1ec7n Bi\u00ean","\u0110\u1ed3ng Nai","\u0110\u1ed3ng Th\u00e1p","Gia Lai","H\u00e0 Giang","H\u00e0 Nam","H\u00e0 T\u00e2y","H\u00e0 T\u0129nh","H\u1ea3i D\u01b0\u01a1ng","H\u1ea3i Ph\u00f2ng","H\u00f2a B\u00ecnh","Hu\u1ebf","H\u01b0ng Y\u00ean","Kh\u00e1nh H\u00f2a","Kon Tum","Lai Ch\u00e2u","L\u00e2m \u0110\u1ed3ng","L\u1ea1ng S\u01a1n","L\u00e0o Cai","Long An","Nam \u0110\u1ecbnh","Ngh\u1ec7 An","Ninh B\u00ecnh","Ninh Thu\u1eadn","Ph\u00fa Th\u1ecd","Ph\u00fa Y\u00ean","Qu\u1ea3ng B\u00ecnh","Qu\u1ea3ng Nam","Qu\u1ea3ng Ng\u00e3i","Qu\u1ea3ng Ninh","Qu\u1ea3ng Tr\u1ecb","S\u00f3c Tr\u0103ng","S\u01a1n La","T\u00e2y Ninh","Th\u00e1i B\u00ecnh","Th\u00e1i Nguy\u00ean","Thanh H\u00f3a","Th\u1eeba Thi\u00ean-Hu\u1ebf","Ti\u1ec1n Giang","Tr\u00e0 Vinh","Tuy\u00ean Quang","Ki\u00ean Giang","V\u0129nh Long","V\u0129nh Ph\u00fac","Y\u00ean B\u00e1i","Kh\u00e1c","Qu\u1ed1c t\u1ebf","H\u1eadu Giang","\u0110\u1eafk N\u00f4ng"],
                cityHash: {"H\u1ed3 Ch\u00ed Minh":"29","H\u00e0 N\u1ed9i":"24","\u0110BSCL":"71","An Giang":"2","B\u00e0 R\u1ecba - V\u0169ng T\u00e0u":"3","B\u1eafc K\u1ea1n":"4","B\u1eafc Giang":"5","B\u1ea1c Li\u00eau":"6","B\u1eafc Ninh":"7","B\u1ebfn Tre":"8","Bi\u00ean H\u00f2a":"9","B\u00ecnh \u0110\u1ecbnh":"10","B\u00ecnh D\u01b0\u01a1ng":"11","B\u00ecnh Ph\u01b0\u1edbc":"12","B\u00ecnh Thu\u1eadn":"13","C\u00e0 Mau":"14","C\u1ea7n Th\u01a1":"15","Cao B\u1eb1ng":"16","\u0110\u00e0 N\u1eb5ng":"17","\u0110\u1eafk L\u1eafk":"18","\u0110i\u1ec7n Bi\u00ean":"69","\u0110\u1ed3ng Nai":"19","\u0110\u1ed3ng Th\u00e1p":"20","Gia Lai":"21","H\u00e0 Giang":"22","H\u00e0 Nam":"23","H\u00e0 T\u00e2y":"25","H\u00e0 T\u0129nh":"26","H\u1ea3i D\u01b0\u01a1ng":"27","H\u1ea3i Ph\u00f2ng":"28","H\u00f2a B\u00ecnh":"30","Hu\u1ebf":"31","H\u01b0ng Y\u00ean":"32","Kh\u00e1nh H\u00f2a":"33","Kon Tum":"34","Lai Ch\u00e2u":"35","L\u00e2m \u0110\u1ed3ng":"36","L\u1ea1ng S\u01a1n":"37","L\u00e0o Cai":"38","Long An":"39","Nam \u0110\u1ecbnh":"40","Ngh\u1ec7 An":"41","Ninh B\u00ecnh":"42","Ninh Thu\u1eadn":"43","Ph\u00fa Th\u1ecd":"44","Ph\u00fa Y\u00ean":"45","Qu\u1ea3ng B\u00ecnh":"46","Qu\u1ea3ng Nam":"47","Qu\u1ea3ng Ng\u00e3i":"48","Qu\u1ea3ng Ninh":"49","Qu\u1ea3ng Tr\u1ecb":"50","S\u00f3c Tr\u0103ng":"51","S\u01a1n La":"52","T\u00e2y Ninh":"53","Th\u00e1i B\u00ecnh":"54","Th\u00e1i Nguy\u00ean":"55","Thanh H\u00f3a":"56","Th\u1eeba Thi\u00ean-Hu\u1ebf":"57","Ti\u1ec1n Giang":"58","Tr\u00e0 Vinh":"59","Tuy\u00ean Quang":"60","Ki\u00ean Giang":"61","V\u0129nh Long":"62","V\u0129nh Ph\u00fac":"63","Y\u00ean B\u00e1i":"65","Kh\u00e1c":"66","Qu\u1ed1c t\u1ebf":"70","H\u1eadu Giang":"72","\u0110\u1eafk N\u00f4ng":"73"}
            };

            jQuery(document).ready(function () {
                $('.switchLayout').click(function (e) {
                    e.preventDefault();
                    $.ajax({
                        url: $(this).attr('href'),
                        dataType: 'json'
                    }).done(function (data) {
                        if (data.status == 'SUCCESS') {
                            window.location = data.redirectURL;
                        }
                    });
                });

                jQuery('.call-me-back-btn').click(function () {
                    var formObj = jQuery(jQuery(this).closest('form').get(0));
                    var isError = false;
                    $('.help-block', formObj).css('display', 'none');
                    $('.error', formObj).removeClass('error');

                    if (vnw_validate.checkRequired($('#fullname', formObj)[0], jQuery('#err_fullname', formObj)) === false) {
                        isError = true;
                        $('#divInputName', formObj).addClass('error');
                    }
                    if (vnw_validate.checkRequired($('#email', formObj)[0], jQuery('#err_email', formObj)) === false) {
                        isError = true;
                        $('#divInputEmail', formObj).addClass('error');
                    }
                    else if (vnw_validate.checkEmail($('#email', formObj)[0], jQuery('#err_email_invalid', formObj)) === false) {
                        isError = true;
                        $('#divInputEmail', formObj).addClass('error');
                    }
                    if (vnw_validate.checkRequired($('#phone', formObj)[0], jQuery('#err_phone', formObj)) === false) {
                        isError = true;
                        $('#divInputPhone', formObj).addClass('error');
                    }
                    else if (vnw_validate.checkPhone($('#phone', formObj)[0], jQuery('#err_phone_invalid', formObj)) === false) {
                        isError = true;
                        $('#divInputPhone', formObj).addClass('error');
                    }
                    $("#location", formObj).val(header.cityHash[$('#employerCity', formObj).val()]);
                    if (isError === true) {
                        return false;
                    }

                    // Validate successful and sending request
                    var jobAlertError = $('#em-navbar-collapse #err_email_disposable');
                    var thisValue = $('#em-navbar-collapse #email').val();
                    $.ajax({
                        url: '/employers/check_disposable_email.php',
                        method: 'POST',
                        data: {"email": thisValue},
                        success: function(data) {
                            if(data == false)
                            {
                                jobAlertError.hide();
                                $('#issend', formObj).val(1);
                                // set referral
                                _gaq.push(['_trackEvent', 'Employer Homepage - Successful Contact Submit', 'Click']);
                                formObj.submit();
                            }
                            else
                            {
                                jobAlertError.show();
                            }
                        },
                        error: function (data) {

                        }
                    });
                });
            });
        </script>
    </header>
    <div id="wrapper">    

    <!-- Jumbotron -->
    <section id="jumbotron" class="parallax-viewport">
        <div class="parallax-layer" style="top: 100%; margin-top: -500px; left: 57.5472%; margin-left: -1178.57px;"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 phone-number" style="opacity: 1;">
                    <strong class="ho-chi-minh"> <i class="fa fa-phone fa-lg text-lg text-white"></i> <span class="text-white  text-lg">HCM
                            : </span> <span class="text-orange text-lg">(84 28) 3925 8456</span> </strong> <strong class="ha-noi">
                        <i class="fa fa-phone fa-lg text-lg text-white"></i> <span class="text-white text-lg">HN: </span>
                        <span class="text-orange text-lg">(84 24) 3944 0568</span> </strong>
                </div>
                <div class="col-sm-4 col-sm-offset-2 user-account" style="opacity: 1;">
                    <div class="text-right">
                                                    <a href="/v2/login" target="_blank" class="btn">Đăng Nhập</a>
                            <a href="/v2/signup" target="_blank" class="btn btn-outline">Đăng Ký</a>
                                            </div>
                </div>
            </div>
            <div class="row">
                <h1 class="text-center text-white">
                    <strong id="head-text" style="opacity: 1;">Giúp doanh nghiệp của bạn vươn xa</strong>
                    <small class="text-white" id="caption-text" style="opacity: 1;">Tìm Đúng Người, Trao Đúng Việc</small>
                </h1>
            </div>
        </div>
    </section>
    <div class="text-center push-top-sm promotion-text visible-xs">
        <span class="text-gray"> <span class="text-center"><strong class="slogan-md">Tháng này</strong><br>Giá Đặc Biệt<br>
                Giảm giá <strong class="slogan-lg">10%</strong></span> </span>
    </div>
    <!-- Main Products -->
    <section id="main-products">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box box-sm post-a-job relative" style="opacity: 1;">
                        <div class="absolute-left promotion-badge hidden-xs">
                            <div class="box-md">
                                <p class="text-center text-white"><strong class="slogan-md">Tháng này</strong><br>Giá Đặc Biệt<br>
                                    Giảm giá <strong class="slogan-lg">10%</strong></p>
                                <p class="text-right slogan-xs white">Thỏa thuận &amp;<br>  điều kiện áp dụng (*)</p>
                            </div>
                        </div>
                        <h1 class="text-center"><strong>Đăng Tuyển</strong>
                            <small>Trang web tuyển dụng hàng đầu Việt Nam</small>
                        </h1>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-check fa-fw text-blue-employer"></i> Đảm bảo hài lòng <strong>100%</strong></li>
                            <li>
                                <i class="fa fa-check fa-fw text-blue-employer"></i> Đăng tuyển <strong>nhanh chóng</strong> và nhận hồ sơ <strong>ngay lập tức</strong>
                            </li>
                            <li><i class="fa fa-check fa-fw text-blue-employer"></i> Quản lý hồ sơ trực tuyến của bạn <strong>dễ dàng</strong>.
                            </li>
                        </ul>
                        <div class="text-center call-to-action">
                            <span class="rotate-effect"> <a class="btn btn-primary btn-xlg" id="emp-buy-job-post" target="_blank" href="/choose-services#product__post-a-job" onclick="_gaq.push(['_trackEvent', 'BuyJobPost', 'Click', 'BuyJobPost']);">
                                    <span class="default-state state">Mua Ngay</span>
                                    <span class="hover-state state">Mua Ngay</span> </a> </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box box-sm search-resume" style="opacity: 1;">
                        <h1 class="text-center"><strong>Tìm Hồ Sơ</strong>
                            <small>Tìm ứng viên tốt nhất trong thời gian nhanh nhất</small>
                        </h1>
                        <ul class="list-unstyled">
                            <li>
                                <i class="fa fa-check fa-fw text-blue-employer"></i> 30 ngày truy cập <strong>không giới hạn</strong> hệ thống dữ liệu chuyên nghiệp
                            </li>
                            <li>
                                <i class="fa fa-check fa-fw text-blue-employer"></i> Tìm ứng viên <strong>hiệu quả và nhanh chóng</strong>
                            </li>
                            <li>
                                <i class="fa fa-check fa-fw text-blue-employer"></i> Chủ động tìm kiếm ứng viên <strong>ngay hôm nay</strong>
                            </li>
                        </ul>
                        <div class="text-center call-to-action">
                            <span class="rotate-effect"> <a class="btn btn-primary btn-xlg" id="emp-try-search-resume" href="/v2/resume/index" target="_blank" onclick="_gaq.push(['_trackEvent', 'TryResumeSearch', 'Click', 'TryResumeSearch']);">
                                    <span class="default-state state">Tìm Kiếm Thử</span>
                                    <span class="hover-state state">Tìm Kiếm Thử</span> </a> <span class="or">hoặc</span> <a class="btn-link" id="emp-buy-search-resume" target="_blank" href="/choose-services#product__search-candidate" onclick="_gaq.push(['_trackEvent', 'BuyResumeSearch', 'Click', 'BuyResumeSearch']);">Mua Ngay</a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3e Test -->
    <section id="three-e-test" class="three-e-test">
        <div class="container">
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-4 col-md-3">
                    <img src="https://images.vietnamworks.com/img/3e-test.png?v=1" width="228">
                </div>
                <div class="col-sm-6 col-md-7">
                    <h1>Bài trắc nghiệm 3E-IP là gì?</h1>
                    <p><strong>3E-IP TEST</strong> is a tool for employers to understand personality and intelligence of potential candidates and existing
                    employees which is crucial to make the right hiring decision and deliver appropriate leadership.
                    </p>
                    <span class="rotate-effect"> <a class="btn btn-primary btn-xlg" href="/choose-services#product__3EIP" target="_blank">
                            <span class="default-state state">Mua Ngay</span>
                            <span class="hover-state state">Mua Ngay</span> </a> <span class="or">hoặc</span>
                        <a class="btn-link" target="_blank" href="./employers/3etest_vi.htm">Xem Thêm</a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center push-top-sm">
        <span class="text-gray">(*) Chương trình giảm giá đặc biệt này kéo dài đến <strong>hết tháng này</strong> và chỉ áp dụng cho đơn hàng trực tuyến. (<strong>Không áp dụng với các chương trình khuyến mãi khác</strong>).</span>
    </div>
    <!-- Why VietnamWorks -->
    <section id="why-vietnamworks" style="opacity: 1;">
        <div class="container">
            <div class="row">
                <span class="line"></span>
            </div>
            <div class="row">
                <div class="col-sm-4 text-center"><strong>#1</strong> Trang tuyển dụng chuyên nghiệp</div>
                <div class="col-sm-4 text-center"><strong>1,600</strong> lượt xem mỗi đăng tuyển</div>
                <div class="col-sm-4 text-center"><strong>2,500,000</strong> ứng viên tiềm năng </div>
            </div>
            <div class="row">
                <span class="line"></span>
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section id="testimonial" style="opacity: 1;">
        <div class="container">
            <div class="row">
                <h1 class="text-center">
                    <strong>Khách hàng đánh giá</strong>
                    <small>Hãy lắng nghe cảm nhận của họ</small>
                </h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo-thoughtwork pull-left"></div>
                    <p class="pull-left">
                        <em> <span class="quote open-quote">“</span>Sự quan tâm và tận tình<br> của VietnamWorks thật sự rất khác biệt
                            <span class="quote close-quote">”</span> </em><br> <em class="author">Gabriel Gavasso, ThoughtWorks</em>
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="logo-transimex-saigon pull-left"></div>
                    <p class="pull-left">
                        <em> <span class="quote open-quote">“</span>Chúng tôi đã tuyển <br>được những chuyên gia giỏi nhất
                            <span class="quote close-quote">”</span> </em><br> <em class="author">Thu Hue, Transimex Sai Gon</em>
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="logo-edge-marketing pull-left"></div>
                    <p class="pull-left">
                        <em> <span class="quote open-quote">“</span>Vietnamworks tư vấn rất chu đáo,<br> nhiệt tình và đáng tin cậy
                            <span class="quote close-quote">”</span> </em><br> <em class="author">Minh Trang, Edge Marketing</em>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="guarantee">
        <div class="container">
            <div class="row">
                <h1 class="text-center">
                    <strong>Chúng tôi cam kết</strong>
                    <small>Đảm bảo hài lòng, hoặc miễn phí đăng lại tin tuyển dụng</small>
                </h1>
                <div class="col-sm-10 col-sm-offset-1 small text-center">
                    <p>
                        <img src="https://images.vietnamworks.com/gen/badge-guaranteed.png" alt="Guarantee logo">
                    </p>
                    <p>Tuyển dụng tại Việt Nam là một việc đầy thử thách, vì thế chúng tôi luôn sẵn sàng hỗ trợ Quý khách. Nếu như Quý khách không <strong>hài lòng 100%</strong> với dịch vụ đăng tin tuyển dụng của VietnamWorks, hãy liên lạc với chuyên viên tư vấn của chúng tôi HCM: (84 28) 3925 8456 / HN: (84 24) 3944 0568 hoặc gửi thư về <a href="mailto:jobsupport@vietnamworks.com">jobsupport@vietnamworks.com</a> để yêu cầu được <strong>đăng lại miễn phí</strong> (không bao gồm các dịch vụ ưu tiên) trong vòng 10 ngày làm việc kể từ khi tin đăng tuyển có trả phí của Quý khách hết hạn. Chương trình không áp dụng cho các tin đăng lại hoặc các tin đăng tuyển miễn phí theo chương trình khuyến mại hoặc tin đăng tuyển hỗ trợ. <a href="/employers/satisfaction-guaranteed.php" target="_blank">Xem chi tiết</a>.</p>
                </div>
            </div>
        </div>
    </section>
</div>
</body>
</html>
