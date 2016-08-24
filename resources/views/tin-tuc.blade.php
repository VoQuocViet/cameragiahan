@extends('usermaster') 
<!-- @section('controller','Category') -->
<!-- @section('action','List')  -->
@section('content')
<div class="mainproduct">
	<div class="container">
		<div class="productcontent">
			<div class="detailtravel">
				<div class="row">
					<div
						class="f-ctn-left col-md-3 col-xs-3 col-sm-3 sidebar-offcanvas"
						id="sidebar" role="navigation">
						<div class="f-block">
							<div class="f-block-title-page">
								<span>Danh mục tin tức</span>
							</div>
							<div class="f-block-body">
								<ul class="f-block-news-menu no-margin no-padding">
									<?php 
									$tintuc = DB::table('news_cates')->get();
									?>
									@foreach ($tintuc as $item)
									<li><a href="{!! URL('tin-tuc',[$item->id, $item->alias]) !!}">{!! $item->name !!}</a></li>
							        @endforeach
								</ul>
							</div>
						</div>
						<div class="f-block">
							<div class="f-block-title-page">
								<span>Sản phẩm HOT</span>
							</div>
							<div class="f-block-body">
								<div class="carousel slide" data-ride="carousel">
									<div class="carousel-inner ">
										<div class="item f-product-bl active">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="K-EW114L06E"> <img alt="K-EW114L06E"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="K-EW114L06E">K-EW114L06E</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="K-EW114L03E"> <img alt="K-EW114L03E"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="K-EW114L03E">K-EW114L03E</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="K-EF134L03E"> <img alt="K-EF134L03E"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="K-EF134L03E">K-EF134L03E</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="K-EF134L02E"> <img alt="K-EF134L02E"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="K-EF134L02E">K-EF134L02E</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="WV-SW598"> <img alt="WV-SW598"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="WV-SW598">WV-SW598</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="WV-SW395"> <img alt="WV-SW395"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="WV-SW395">WV-SW395</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="WV-SC385"> <img alt="WV-SC385"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="WV-SC385">WV-SC385</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="WV-SP305E"> <img alt="WV-SP305E"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="WV-SP305E">WV-SP305E</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="WV-SP105"> <img alt="WV-SP105"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="WV-SP105">WV-SP105</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="WV-SMR10"> <img alt="WV-SMR10"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="WV-SMR10">WV-SMR10</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="WV-SFN480"> <img alt="WV-SFN480"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="WV-SFN480">WV-SFN480</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="WV-SF438"> <img alt="WV-SF438"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="WV-SF438">WV-SF438</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="f-block">
							<div class="f-block-title-page">
								<span>Sản phẩm mới</span>
							</div>
							<div class="f-block-body">
								<div class="carousel slide" data-ride="carousel">
									<div class="carousel-inner ">
										<div class="item f-product-bl active">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="QL-1050"> <img alt="QL-1050"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="QL-1050">QL-1050</a>
													</h2>
													<p class="f-pr-bl-item-price">8.900.000 ₫</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="M118VG413IR"> <img alt="M118VG413IR"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="M118VG413IR">M118VG413IR</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="KX-VC1300"> <img alt="KX-VC1300"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="KX-VC1300">KX-VC1300</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="KX-VC1600"> <img alt="KX-VC1600"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="KX-VC1600">KX-VC1600</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
										<div class="item f-product-bl ">
											<div class="f-pr-bl-item">
												<div class="f-pr-bl-item-img">
													<a
														href=""
														title="KX-VCA001"> <img alt="KX-VCA001"
														src=""
														class="img-responsive"></a>
												</div>
												<div class="f-pr-bl-item-boxdetail">
													<h2>
														<a class="f-pr-bl-item-name"
															href=""
															title="KX-VCA001">KX-VCA001</a>
													</h2>
													<p class="f-pr-bl-item-price">Liên hệ</p>

												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="f-ctn-center col-md-9 col-xs-12 col-sm-9 ">
						<div class="clearfix"></div>
						<div class="productbreadcrumb">
							<ol class="breadcrumb">

								<li><a href="">Trang chủ</a></li>

								<li><a href="">Tin tức</a></li>

							</ol>
						</div>

						<div class="clearfix"></div>
						<div class="mainproduct">
							<div class="wrapcontent">
								<p class="title">Tin tức</p>
								<p class="description">Cập nhật tin tức mới nhất </p>
							</div>
							<div class="row_list_tour">
								<ul class="f-news-page">
								@foreach ($entryList as $item)
								<li class="f-news-page-item">
									<div class="f-news-page-item-img col-md-3 col-sm-4 col-xs-12">
										<a href="" class="thumbnail" title="{!! $item->name !!}"> <img src="{!! $item->image !!}" alt="{!! $item->name !!}" />
										</a>
									</div>
									<div class="f-news-page-item-text col-md-9 col-sm-12 col-xs-12">
										<h4><a href="" title="">{!! $item->name !!}</a></h4>
										<h5>Ngày cập nhật: {!! $item->created_at !!}</h5><br />
										<div class="f-news-page-item-summary" style="font-size: 15px !important; text-align: justify">{!! substr($item->content, 0, 340) !!}</div>
										<div class="f-read-more pull-right">
											<a href=""><span class="label label-info">Đọc thêm...</span></a>
										</div><br /><br /><br />
									</div>
								</li>
								@endforeach
								</ul>
								<div class="clearfix"></div>
								<div class="row">
									<div class="col-md-6">
										<p>
											Hiển thị từ <strong>1 </strong> đến <strong>12 </strong>
											trên <strong>20 </strong> bản ghi - Trang số <strong>1 </strong>
											trên <strong>2 </strong> trang
										</p>
									</div>
									<div class="f-pagging text-right col-md-6">
										<ul class="pagination ">
											<li class="disabled"><a>|<< </a></li>

											<li class="disabled"><a>Trước</a></li>

											<li class="active"><a>1</a></li>

											<li><a href="/news-index-p2.html">2</a></li>

											<li><a href="/news-index-p2.html"> Sau </a></li>
											<li><a href="/news-index-p2.html"> >>| </a></li>
										</ul>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<script
							src="js/news.js"
							type="text/javascript"></script>
						<script>
						$(document).ready(function() {
						    News.init();
						});
						</script>
					</div>
					<!--end col-lg-3-->
				</div>
				<!--end row-->
			</div>
			<!--end detai travel-->
			<div class="clear"></div>
		</div>
		<!--end row-->
	</div>
</div>
<!--end mainproduct-->
@endsection()