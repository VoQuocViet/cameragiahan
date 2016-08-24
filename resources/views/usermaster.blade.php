<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<base href="http://localhost:8181/camera/" extention=".php" />-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Công Ty Cổ Phần Công Nghệ Gia Hân Smart</title>
<meta name="description" content="Gia Hân Smart">
<meta name="keywords" content="Gia Hân Smart">
<link rel="shortcut icon" href="{{ url('public/img/icon.png') }}" />
<link rel="icon" href="{{ url('public/img/icon.png') }}" />
<meta name="google-signin-client_id" content=""></meta>
<meta property="og:title" content="Gia Hân Smart" />
<meta property="og:image" content="" />
<meta property="og:description" content="Gia Hân Smart" />
<meta property="og:site_name" content="Gia Hân Smart" />
<meta property="fb:admins" content="1843560253" />

<!-- Include JS/CSS -->
<script src="https://apis.google.com/js/client:platform.js" async defer></script>
<!-- Reset cac thuoc tinh ve mac dinh cho toan bo trinh duyet -->
<!-- <link href="{{ url('public/css/reset.css') }}" rel="stylesheet" media="screen"> -->
<!-- End Reset css-->
<!-- Bootstrap css framework 3  -->
<link rel="stylesheet" href="{{ url('public/css/bootstrap.css') }}">
<!-- End Bootstrap css framework 3 -->
<!--- End css responsive cho cac thiet bi khac nhau -->
<!-- <link href="{{ url('public/css/font-awesome.min.css') }}" rel="stylesheet" media="screen"> -->
<!--- Css validation -->
<link href="{{ url('public/css/validationEngine.jquery.css') }}" rel="stylesheet">
<!--- Css Loading -->
<!-- <link href="{{ url('public/css/loading.css') }}" rel="stylesheet" media="screen"> -->
<!-- <link href="{{ url('public/css/jquery.nouislider.min.css') }}" rel="stylesheet"> -->

<!-- Css toan bo templete -->
<link href="{{ url('public/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('public/css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ url('public/css/owl.theme.css') }}" rel="stylesheet">
<link href="{{ url('public/css/style.css') }}" rel="stylesheet">
<!-- <link rel="stylesheet" href="{{ url('public/css/demo.css') }}" type="text/css" media="screen" /> -->
<link rel="stylesheet" href="{{ url('public/css/flexslider.css') }}" type="text/css" media="screen" />
<!-- End css toan bo templete -->
<script src="{{ url('public/js/owl.carousel.js') }}"></script>
<script defer src="{{ url('public/js/jquery.flexslider.js') }}"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{ url('public/js/jssor.slider.min.js') }}"></script>
<!-- <link rel="stylesheet" type="text/css" href="{{ url('public/css/responsive.css') }}" media="screen"> -->

<style>
body {
	background: #ffffff;
	background-position: center top;
	background-attachment: fixed;
}
</style>
			<script type="text/javascript" src="{{ url('public/js/jssor.slider.min.js') }}"></script>
			<!-- use jssor.slider.debug.js instead for debug -->
			<script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:3000,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:3000,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 1,
                $Align: 0
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 910);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

			<style>

.jssorb01 {
	position: absolute;
}

.jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
	position: absolute;
	/* size of bullet elment */
	width: 12px;
	height: 12px;
	filter: alpha(opacity = 70);
	opacity: .7;
	overflow: hidden;
	cursor: pointer;
	border: #000 1px solid;
}

.jssorb01 div {
	background-color: gray;
}

.jssorb01 div:hover, .jssorb01 .av:hover {
	background-color: #d3d3d3;
}

.jssorb01 .av {
	background-color: #fff;
}

.jssorb01 .dn, .jssorb01 .dn:hover {
	background-color: #555555;
}

.jssora05l, .jssora05r {
	display: block;
	position: absolute;
	/* size of arrow element */
	width: 40px;
	height: 40px;
	cursor: pointer;
	background: url('img/a17.png') no-repeat;
	overflow: hidden;
}

.jssora05l {
	background-position: -10px -40px;
}

.jssora05r {
	background-position: -70px -40px;
}

.jssora05l:hover {
	background-position: -130px -40px;
}

.jssora05r:hover {
	background-position: -190px -40px;
}

.jssora05l.jssora05ldn {
	background-position: -250px -40px;
}

.jssora05r.jssora05rdn {
	background-position: -310px -40px;
}

/* jssor slider thumbnail navigator skin 09 css */
.jssort09-600-45 .p {
	position: absolute;
	top: 0;
	left: 0;
	width: 600px;
	height: 45px;
}

.jssort09-600-45 .t {
	font-family: verdana;
	font-weight: normal;
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	color: #fff;
	line-height: 45px;
	font-size: 20px;
	padding-left: 10px;
}
</style>
			<input name="state" type="hidden" value= />
			<div id="target"></div>
			<!-- HTML cua header -->
			<!-- <div class="wrapper"> -->
				<!-- <div class="header"> -->
					<!-- <div class="headertop"> -->
						<!-- <div class="container"> -->
<!--
							<div class="row_logo">
								<div class="logo">
									<h1>
										<a href="" title="" rel="nofollow" class="logo"> <img
											src="{{ url('public/img/logo1.png') }}" alt="" /></a>
									</h1>
								</div>
								@if(Auth::user())
			                    <div class="" style="text-align: right; font-size: 14px">
									Xin chào <a href="">{!! Auth::user()->username !!}</a> | 
									<a href="{!! route('admin.cate.list') !!}"> Hệ Admin</a> |
									<a href="{!! url('auth/logout') !!}">Logout</a>
								</div>
								@else
								<div class="" style="text-align: right; font-size: 14px">
									<a href="{!! url('auth/login') !!}">Đăng Nhập</a> | 
									<a href="{!! url('auth/register') !!}">Đăng Ký</a>
								</div>
								@endif
						
								

							<!--Start mainmenu-->
							<nav class="navbar navbar-default navbar-fixed-top">
						      <div class="container">
						        <div class="navbar-header">
						          <button type="button" class="navbar-toggle collapsed" style="height: auto;" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
						            <span class="sr-only">Toggle navigation</span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						          </button>
						          <!-- <a class="navbar-brand" href="#">Nha Khoa Lê Hoàng</a> -->
						        </div>
						        <div id="navbar" class="navbar-collapse collapse">
						          <ul class="nav navbar-nav">
						            <li><a class='active' href="{!! URL('index') !!}">Trang chủ</a></li>
						            <li><a href="{!! URL('gioi-thieu') !!}">Giới thiệu</a></li>
						            <li class="dropdown">
						              <a href="{!! URL('tin-tuc',[1, "tin-tuc-moi"]) !!}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tin Tức <span class="caret"></span></a>
						              <ul class="dropdown-menu">
						              	<?php 
											$tintuc = DB::table('news_cates')->where('menu',1)->get();
										?>
										@foreach ($tintuc as $item)
											<li><a href="{!! URL('tin-tuc',[$item->id, $item->alias]) !!}">{!! $item->name !!}</a></li>
								        @endforeach
						              </ul>
						            </li>
									<li class="dropdown">
						              <a href="{!! URL('danh-muc',[13, "camera-quan-sat"]) !!}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sản Phẩm <span class="caret"></span></a>
						              <ul class="dropdown-menu">
						              	<?php 
											$danhmuc = DB::table('cates')->where('parent_id',0)->get();
										?>
										@foreach ($danhmuc as $item)
											<li><a href="{!! URL('danh-muc',[$item->id, $item->alias]) !!}">{!! $item->name !!}</a></li>
								        @endforeach
						              </ul>
						            </li>
						            <li><a href="{!! URL('dich-vu') !!}">Dịch Vụ</a></li>
							        <li><a href="{!! URL('giai-phap') !!}">Giải Pháp</a></li>
							        <li><a href="{!! URL('du-an') !!}">Dự Án</a></li>
							        <li class="dropdown">
						              <a href="{!! URL('tin-tuc',[1, "tin-tuc-moi"]) !!}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hỗ Trợ <span class="caret"></span></a>
						              <ul class="dropdown-menu">
						              	<?php 
											$tintuc = DB::table('news_cates')->where('menu',2)->get();
											?>
											@foreach ($tintuc as $item)
												<li><a href="{!! URL('tin-tuc',[$item->id, $item->alias]) !!}">{!! $item->name !!}</a></li>
									        @endforeach
						              </ul>
						            </li>
						            <!-- <li><a href="{!! URL('bao-hanh') !!}">Bảo Hành</a></li> -->
											<li><a href="{!! URL('lien-he') !!}">Liên Hệ</a></li>
						          </ul>
						          <ul class="nav navbar-nav navbar-right">
						            <!-- <li><a href="../navbar/"></a></li> -->
						            <li class="dropdown">
						            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						            @if(!Auth::user())
						            Tài Khoản
						            @else
						            Chào: {{ Auth::user()->username }}
						            @endif

						            <span class="caret"></span></a>
						              <ul class="dropdown-menu">
						              	@if(!Auth::user())
						                <li><a href="{!! url('auth/login') !!}">Đăng Nhập</a></li>
						                <!-- <li><a href="{!! url('auth/register') !!}">Đăng Ký</a></li> -->

						                @else
						                <li><a href="">Thiết lập</a></li>
						                <li><a href="{!! route('admin.cate.list') !!}">Vào hệ quản trị</a></li>
						                <li><a href="{!! url('auth/logout') !!}">Đăng xuất</a></li>
						                @endif
						               </ul>
						            </li>
						          </ul> 
						        </div><!--/.nav-collapse -->
						      </div>
						    </nav>
						    <div class="clear:both"></div>
						    
							<!--End mainmenu-->
                    <!-- </div> -->
							<!--end maintop-->
						<!-- </div> -->
						<!--end container-->
					<!-- </div> -->
					<!--end headertop-->
				<!-- </div> -->
				<!--end header-->
				<script type="text/javascript">
                $(document).ready(function() {
                        $(".menu-mobile").click(function() {
                                $(".mainmenu").slideToggle(300);
                        });
                });
        </script>
        <div class="clear:both"></div>
				<div class="main">
					<div class="box_adv_top">
						<div class="container" style="position: relative" id="header_middle">
				                <div id="logo">
				                    <a href="" class="link-logo">
				                        <img src="{{ url('public/img/newlogo3.png') }}" alt="logo" title="" height="115px" />
				                    </a>
				                </div>
				                <div class="box_services txt_14 cufon txt_left">
				                    <div class="box_content">
				                      <a href="/bao-hanh"><i class="icon icon_camket"></i>
				                      <span class="services_text">Chính sách <br> bảo hành</a></span>
				                    </div>
				                    <div class="box_content">
				                      <a href="/van-chuyen"><i class="icon icon_giaohang"></i>
				                      <span class="services_text">Giao hàng toàn quốc</a></span>
				                    </div>
				                    <div class="box_content">
				                        <a href="/thanh-toan"><i class="icon icon_thanhtoan"></i>
				                      <span class="services_text">Thanh toán <br>tại nhà</a></span>
				                    </div>
				                    <div class="box_content">
				                      <a href="/doi-hang"><i class="icon icon_doitra"></i>
				                      <span class="services_text">Đổi trả hàng trong 7 ngày</a></span>
				                    </div>
				                </div>
				                <div class="hotline">
				                  	<span class="txt_u">(08) 66 538 538</span>
				                  		<p>T2 - T7 (8H-17H00) <b>     </b><br>
				                        Chủ nhật (8h30-17h00) <b>     </b></p>
				                </div> 
				            </div>
						    <div class="clear:both"></div>
					</div>
					<!-- START: Đây là nơi chưa nội dung -->
                    @yield('content')
                    <!-- END : Đây là nơi chứa nội dung -->
					
				<!--end main-->
				<div class="clear:both"></div>
        <div class="footer">
            <div class="footer-top">
                <div class="container" style="position: relative">
                    <div class="footer-first">
                        <div class="f-aboutus">
                            <a href="/info.html"><h3>CHÀO MỪNG BẠN ĐẾN VỚI GIA HÂN SMART</h3></a>
                            <div class="f-text">
                                <p>
                                    <strong>Gia Hân Smart</strong>
                                </p>

                                <p>
                                    <span style="font-size: 14px">1275D Đường 3/2, PHƯỜNGG 16, QUẬN 11, TPHCM</span>
                                </p>

                                <p>
                                    <span style="font-size: 14px">Tel: (08)66.538.538<br />
                                        Fax: (08)39.604.468<br /> Website: cameraquansatip.vn
                                    </span>
                                </p>
                            </div>
                            <!--end f-text-->

                        </div>
                        <!--end f-aboutus-->
                    </div>
                    <!--end footer-first-->
                    <div class="footer-two">
                        <div class="f-aboutus">
                            <a href="/info.html"><h3>CAM KẾT CỦA CHÚNG TÔI</h3></a>
                            <div class="f-text">
                                <p>Gia Hân Smart cam kết tất cả quyền lợi dành cho khách hàng.</p>
                            </div>
                            <!--end f-text-->
                        </div>
                        <!--end f-aboutus-->
                    </div>
                    <!--end footer-first-->
                    <div class="footer-two">
                        <div class="f-aboutus">
                            <a href="/info.html"><h3>ĐĂNG KÝ NHẬN TIN</h3></a>
                            <div class="f-text">
                                <div class="dknt">
                                    <span style="font-size: 14px; color: #fff; margin-bottom: 5px;">
                                        Đăng ký nhận tin từ Gia Hân Smart<br />
                                    </span>

                                    <p>Địa chỉ email của bạn</p>
                                    <input id="txtEmailReg" class="footer__item__input"
                                           name="email" type="text"><br />
                                        <button id="btnReg"
                                                class="footer__item__button footer__item__button-man form-item-button"
                                                name="subscription">Theo dõi</button>
                                </div>
                            </div>
                            <!--end f-text-->
                        </div>
                        <!--end f-aboutus-->
                    </div>
                    <!--end footer-first-->
                    <div class="footer-two">
                        <div class="f-aboutus">
                            <a href="/info.html"><h3>KẾT NỐI TRÊN MẠNG XÃ HỘI</h3></a>
                            <div class="f-text">
                                <div class="FollowUs">
                                    <ul>
                                        <li class="youtube"><a href="#" rel="nofollow"
                                                               target="_blank"><i class="fa fa-youtube-play fa-2x"></i></a>
                                        </li>
                                        <li class="twitter"><a href="#" rel="nofollow"
                                                               target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
                                        <li class="facebook"><a
                                                href="https://www.facebook.com/profile.php?id=100009295145430&fref=ts"
                                                rel="nofollow" target="_blank"><i
                                                    class="fa fa-facebook fa-2x"></i></a></li>
                                        <li class="gplus"><a href="#" rel="nofollow"
                                                             target="_blank"><i class="fa fa-google-plus fa-2x"></i></a></li>
                                        <li class="rss"><a href="#"><i
                                                    class="fa fa-rss fa-2x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--end f-text-->
                        </div>
                        <!--end f-aboutus-->
                    </div>
                    <!--end footer-first-->
                    <div class="goto">
                        <a href="#" id="go_top"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
                    </div>
                </div>
                <!--end container-->
            </div>
            <!--end footer-top-->
            <!-- 
            <div class="footer-bottom">
                <div class="container">
                    <div class="copyright">
                        <p>
                            Copyright © 2015. All rights reserved. Hotline: <b> Kinh Doanh: (08)66.538.538 - Kỹ Thuật: (08)66.538.538 </b>
                        </p>
                    </div>
                   
                </div>
                
            </div>
             -->
            <!--end footer bottom-->
        </div>
        <!--end footer-->
			</div>
			<!--end wrapper-->
			
			<!-- <script type="text/javascript" -->
				<!-- src="{{ url('public/themes/1/statics/scripts/product.js') }}"></script> -->
			<!-- <script type="text/javascript"
				src="{{ url('public/modules/user/themes/resource/js/nbh-google.js') }}"></script> -->
			<script type="text/javascript">
            $(document).ready(function() {
                    $('body').data('home_url', 'http://localhost/camera/');
                    //$('body').data('page_url', '');
                    $('body').data('extension', '.html');
                    Product.init();
                    WebCommon.init();
                    // alert("-Golbal aler- "+$('body').data('home_url'));
            });
    </script>

			<script type="text/javascript">
            (function() {
                    $(window).scroll(function() {
                            if ($(window).scrollTop() == 0) {
                                    $('#go_top').stop(false, true).fadeOut(600);
                            } else {
                                    $('#go_top').stop(false, true).fadeIn(600);
                            }
                    });

                    $('#go_top').click(function() {
                            $('body,html').animate({
                                    scrollTop : 0
                            }, 400);
                            return false;

            })
        })(jQuery);
    </script>

</script>
			<script type="text/javascript">
        $(window).load(function () {
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 210,
                itemMargin: 5,
                asNavFor: '#slider',
                maxItems: 6,
                minItems: 5,
            });
            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: true,
                slideshowSpeed: 2500,
                sync: "#carousel",
                start: function (slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
			<script type="text/javascript">
        $("#btnReg")
                .click(
                        function () {
                            var email = $('#txtEmailReg').val();
                            var email_regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
                            if (email == "") {
                                alert("Email không được để trống");
                                return false;
                            }
                            $
                                    .ajax({
                                        type: "POST",
                                        url: "user-regis-regisEmail.html",
                                        data: "&email=" + email,
                                        success: function () {
                                            alert('Bạn đã đăng ký email nhận tin thành công!');
                                            $('#txtEmailReg').val('');
                                        }
                                    });
                        });
    </script>
    <!-- Chung ta se su dung LESS.JS de lam viec -->
			<!-- <script type="text/javascript" src="{{ url('public/js/less.js') }}"></script> -->
			<!-- <script type="text/javascript" src="{{ url('public/js/jwplayer.js') }}"></script> -->
			<!-- <script src="{{ url('public/js/jquery.nouislider.all.min.js') }}"></script> -->
			<script type="text/javascript" src="{{ url('public/js/bootstrap.min.js') }}"></script>
			<!-- <script type="text/javascript" src="{{ url('public/js/started_js.js') }}"></script> -->
			<!-- <script type="text/javascript" src="{{ url('public/js/webcommon.js') }}"></script> -->
			<!-- <script type="text/javascript" src="{{ url('public/js/jquery.validationEngine.js') }}"></script> -->
			<!-- <script type="text/javascript" src="{{ url('public/js/jquery.validationEngine-vi.js') }}"></script> -->
			<!-- <script type="text/javascript" src="{{ url('public/js/loading-overlay.min.js') }}"></script> -->
			<!-- <script type="text/javascript" src="{{ url('public/js/loading-overlay/load.js') }}"></script> -->
			<!-- <script type="text/javascript" src="{{ url('public/js/fastCart.js') }}"></script> -->
			<!-- <link rel="stylesheet" href="{{ url('public/js/jquery.fancybox.css') }}" /> -->
			<!-- <script src="{{ url('public/js/jquery.fancybox.pack.js') }}" type="text/javascript"></script> -->
			<script type="text/javascript" src="{{ url('public/js/jquery.elevatezoom.js') }}"></script>
			<!-- <script type="text/javascript" src="{{ url('public/js/jquery.cookie.js') }}"></script> -->
			<!-- Placed at the end of the document so the pages load faster -->
		    <script src="{{ asset('/public/js/jquery.min.js') }}"></script>
		    <script>window.jQuery || document.write('<script src="{{ asset('/public/js/jquery.min.js') }}"><\/script>')</script>
		    <script src="{{ asset('/public/js/bootstrap.min.js') }}"></script>
		    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		    <script src="{{ asset('/public/js/ie10-viewport-bug-workaround.js') }}"></script>
			<div id="fb-root"></div>
		</body>

</html>
