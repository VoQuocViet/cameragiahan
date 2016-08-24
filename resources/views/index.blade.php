@extends('usermaster') 

<!-- @section('controller','Category') -->

<!-- @section('action','List')  -->

@section('content')

<div class="container">

	<div class="mainslide">

		<div id="jssor_1"

			style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 910px; height: 330px; overflow: hidden; visibility: hidden;">

			<!-- Loading Screen -->

			<div data-u="loading"

				style="position: absolute; top: 0px; left: 0px;">

				<div

					style="filter: alpha(opacity = 70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>

				<div

					style="position: absolute; display: block; background: url('img/loading.gif') no-repeat center center; top: 0px; left: 0px; width: 100%; height: 100%;"></div>

			</div>

			<div data-u="slides"

				style="cursor: default; position: relative; top: 0px; left: 0px; width: 910px; height: 330px; overflow: hidden;">

				<div data-p="112.50" style="display: none;">

					<img data-u="image" src="{{ url('public/img/slider/cameragiahan1.png') }}" />

					<div data-u="thumb">Gia Hân Smart - Dịch vụ lắp đặt Camera quan sát IP</div>

				</div>

				<div data-p="112.50" style="display: none;">

					<img data-u="image" src="{{ url('public/img/slider/cameragiahan2.png') }}" />

					<div data-u="thumb">Hệ thống ghi hình Camera IP</div>

				</div>

				<div data-p="112.50" style="display: none;">

					<img data-u="image" src="{{ url('public/img/slider/cameragiahan3.png') }}" />

					<div data-u="thumb">Giải Pháp ghi hình Camera IP tập trung</div>

				</div>

				<div data-p="112.50" style="display: none;">

					<img data-u="image" src="{{ url('public/img/slider/cameragiahan4.png') }}" />

					<div data-u="thumb">Ứng Dụng camera quan sát IP</div>

				</div>

				<div data-p="112.50" style="display: none;">

					<img data-u="image" src="{{ url('public/img/slider/cameragiahan5.png') }}" />

					<div data-u="thumb">Ứng Dụng camera quan sát IP</div>

				</div>

			</div>

			<!-- Thumbnail Navigator -->

			<div data-u="thumbnavigator" class="jssort09-600-45"

				style="position: absolute; bottom: 0px; left: 0px; width: 910px; height: 45px;">

				<div

					style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #000; filter: alpha(opacity = 40.0); opacity: 0.4;"></div>

				<!-- Thumbnail Item Skin Begin -->

				<div data-u="slides" style="cursor: default;">

					<div data-u="prototype" class="p">

						<div data-u="thumbnailtemplate" class="t"></div>

					</div>

				</div>

				<!-- Thumbnail Item Skin End -->

			</div>

			<!-- Bullet Navigator -->

			<div data-u="navigator" class="jssorb01"

				style="bottom: 16px; right: 10px;">

				<div data-u="prototype" style="width: 12px; height: 12px;"></div>

			</div>

			<!-- Arrow Navigator -->

			<span data-u="arrowleft" class="jssora05l"

				style="top: 123px; left: 8px; width: 40px; height: 40px;"

				data-autocenter="2"></span> <span data-u="arrowright"

				class="jssora05r"

				style="top: 123px; right: 8px; width: 40px; height: 40px;"

				data-autocenter="2"></span> <a href="http://www.jssor.com"

				style="display: none">Bootstrap Carousel</a>

		</div>

		<script>

						        jssor_1_slider_init();

						    </script>



		<!-- #endregion Jssor Slider End -->

	</div>

	<!--end mainslide-->

<div class="f-block-news">

             <a href="" target='_blank' rel='nofollow'>

             	<img border=0 src="{!! url('public/img/banner_8f14e45f.png') !!}" width='250' height='116' alt=""/>

             </a> 



            <div class="clear space5px"></div>

          	<iframe width="240" height="193" src="https://www.youtube.com/embed/BbI4ku7pXdE" frameborder="0" allowfullscreen></iframe>

</div>

	<div class="clear space10px"></div>

	<div class="">

		<img border=0 src="{!! url('public/img/banner_c9f0f895.png') !!}" width='100%' height='80' alt=""/>

	</div>

	<div class="clear space10px"></div>

	<ul class="nav nav-tabs">

			<li class="active"><a data-toggle="tab" href="#menu1">SẢN PHẨM BÁN CHẠY</a></li>

			<li><a data-toggle="tab" href="#menu2">SẢN PHẨM MỚI</a></li>

		</ul>



		<div class="tab-content">

			<div id="menu1" class="tab-pane fade in active">

				<ul class="f-product-viewid row f-product ">

				<?php $count_row = 0; ?>

				@foreach ($hot_product_list as $item)

				<li class="col-lg-2 col-md-3 col-sm-4 col-xs-12 " id="">

					 <div class="v2-pr-item">

					 	<span class="pin_sale">-{!! $item["promote_percent"]*100 !!}<sub>%</sub></span>

						 <div class="v2-pr-item-img">

							 <a href="{!! URL('san-pham',[$item["id"], $item["name"]]) !!}" title="{!! $item["name"] !!}">

							 <img alt="{!! $item["name"] !!}" src="http://giahansmart.vn/resources/upload/{!! $item["image"] !!}" id="f-pr-image-zoom-id-12288" class="img-responsive BNC-image-add-cart-12288" /></a>

						 </div>

						 <div class="v2-pr-item-boxdetail">

							 <div class="v2-pr-item-price-gr">

							 <p class="v2-pr-item-price-old no-price">{!! number_format($item["price_old"], 0, ',', '.'); !!} VNĐ</p> <br/>

							 <p class="v2-pr-item-price no-price">{!! number_format($item["price"], 0, ',', '.'); !!} VNĐ</p>

							 </div>

							 <a class="v2-pr-item-name" href="{!! URL('san-pham',[$item["id"], $item["name"]]) !!}" title="{!! $item["name"] !!}" title="{!! $item["name"] !!}"><h2>{!! $item["name"] !!}</h2></a>

						 </div>

					 </div>

				 </li>

				 <?php $count_row ++; ?>

				 @if($count_row == 12) break;

				 @endif

				 @endforeach								

				</ul>

			</div>

			<div id="menu2" class="tab-pane fade">

				<ul class="f-product-viewid row f-product ">

				 <?php $count_row = 0; ?>

				 @foreach ($hot_product_list as $item)

				<li class="col-lg-2 col-md-3 col-sm-4 col-xs-12" id="like-product-item-12288">

					 <div class="v2-pr-item">

					 <span class="pin_sale">-{!! $item["promote_percent"]*100 !!}<sub>%</sub></span>

						 <div class="v2-pr-item-img">

							 <a href="{!! URL('san-pham',[$item["id"], $item["name"]]) !!}" title="{!! $item["name"] !!}">

							 <img alt="{!! $item["name"] !!}" src="http://giahansmart.vn/resources/upload/{!! $item["image"] !!}" id="f-pr-image-zoom-id-12288" class="img-responsive BNC-image-add-cart-12288" /></a>

						 </div>

						 <div class="v2-pr-item-boxdetail">

							 <div class="v2-pr-item-price-gr">

							 <p class="v2-pr-item-price-old no-price">{!! number_format($item["price_old"], 0, ',', '.'); !!} VNĐ</p> <br/>

							 <p class="v2-pr-item-price no-price">{!! number_format($item["price"], 0, ',', '.'); !!} VNĐ</p>

							 </div>

							 <a class="v2-pr-item-name" href="{!! URL('san-pham',[$item["id"], $item["name"]]) !!}" title="{!! $item["name"] !!}"><h2>{!! $item["name"] !!}</h2></a>

						 </div>

					 </div>

				 </li>

				 <?php $count_row ++; ?>

				 @if($count_row == 12) break;

				 @endif

				 @endforeach

			</ul>

			</div>

		</div>

	<!--temp block/block_center_category_custom-->

	<div class="clearfix"></div>

	<!--temp block/block_center_category_custom_slide-->

	<div class="clearfix"></div>



	<div class="f-ctn-center"></div>



	<div class="">

		<div class="">

			<div class="f-title-info">

				<span>ĐỐI TÁC</span>

			</div>

			<div id="owl-demo-1">

				<div class="brandimg item boxitem">

					<a href="http://www.panasonic.com.vn/" target="_blank"> <img

						src="{{ url('public/img/client/1437011509_pana.png') }}"

						class="img-responsive" alt="" />

					</a>

				</div>

				<!--end brandimg-->



				<div class="brandimg item boxitem">

					<a href="http://www.konicaminolta.com/" target="_blank"><img

						src="{{ url('public/img/client/1437011517_partner1.jpg') }}"

						class="img-responsive" alt="" /></a>

				</div>

				<!--end brandimg-->



				<div class="brandimg item boxitem">

					<a href="http://www.brother.com/index.htm" target="_blank"><img

						src="{{ url('public/img/client/1437011526_partner3.jpg') }}"

						class="img-responsive" alt="" /></a>

				</div>

				<!--end brandimg-->



				<div class="brandimg item boxitem">

					<a href="http://www.nuuo.com/" target="_blank"><img

						src="{{ url('public/img/client/1437011482_nuuo_white_rgbtitle1_1.jpg') }}"

						class="img-responsive" alt="" /></a>

				</div>

				<!--end brandimg-->



				<div class="brandimg item boxitem">

					<a href="http://www.osd.com.au/" target="_blank"><img

						src="{{ url('public/img/client/1437011493_logo.gif') }}"

						class="img-responsive" alt="" /></a>

				</div>

				<!--end brandimg-->



				<div class="brandimg item boxitem">

					<a href="http://www.microengine.net/" target="_blank"><img

						src="{{ url('public/img/client/1437011501_mrdo55q.png') }}"

						class="img-responsive" alt="" /></a>

				</div>

				<!--end brandimg-->



			</div>

		</div>

		<!--end container-->

	</div>

	<div class="clearfix">

		<br /> <br />

	</div>

	<!--end mainbrand-->

	<script type="text/javascript">

	    $(document).ready(function() {

	            $("#owl-demo-1").owlCarousel({

	                    autoPlay : 3000,

	                    items : 6,

	                    lazyLoad : true,

	                    navigation : true

	            });



	    });

	     

            </script>

</div>

@endsection()

