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
													<a href="" title="QL-1050"> <img alt="QL-1050" 
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
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="f-ctn-center col-md-9 col-xs-12 col-sm-9 ">
						<div class="productbreadcrumb">
							<ol class="breadcrumb">

								<li><a href="">Trang chủ</a></li>

								<li><a href="">Liên hệ</a></li>

							</ol>
						</div>
						<div class="mainproduct">
							<div class="col-md-8 no-padding">
								<form class="form-horizontal no-padding" action=""
									id="form_contact" method="post" name="register">
									<fieldset>
										<!-- Form Name -->
										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-3 control-label" for="txtName">Họ và
												tên<span style="color: red"> * </span>
											</label>
											<div class="col-md-9">
												<input id="txtName" name="txtName" type="text"
													placeholder="Nhập họ tên.." class="form-control input-md">
													<div class="warning" id="nameError" style="display: none">
														<span style="color: red;">Bạn chưa nhập tên</span>
													</div>
											
											</div>
										</div>
										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-3 control-label" for="txtPhone">Điện
												thoại<span style="color: red"> * </span>
											</label>
											<div class="col-md-9">
												<input id="txtPhone" name="txtPhone" type="text"
													placeholder="Nhập số điện thoại"
													class="form-control input-md" class='number'>
													<div class="warning" id="phoneError"
														style="display: none">
														<span style="color: red;">Bạn chưa nhập số điện thoại</span>
													</div>
											
											</div>
										</div>
										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-3 control-label" for="txtEmail">Email<span
												style="color: red"> * </span></label>
											<div class="col-md-9">
												<input id="txtEmail" name="txtEmail" type="text"
													placeholder="Nhập email..." class="form-control input-md">
													<div class="warning" id="emailError"
														style="display: none">
														<span style="color: red;">Email không hợp lệ</span>
													</div>
													<div class="warning" id="emailNull" style="display: none">
														<span style="color: red;">Bạn chưa nhập email</span>
													</div>
											
											</div>
										</div>
										<!-- Text input-->
										<div class="form-group">
											<label class="col-md-3 control-label" for="txtAddress">Địa
												chỉ<span style="color: red"> * </span>
											</label>
											<div class="col-md-9">
												<input id="txtAddress" name="txtAddress" type="text"
													placeholder="Nhập địa chỉ..."
													class="form-control input-md">
													<div class="warning" id="addressError"
														style="display: none">
														<span style="color: red;">Bạn chưa nhập địa chỉ</span>
													</div>
											
											</div>
										</div>
										<!-- Textarea -->
										<div class="form-group">
											<label class="col-md-3 control-label" for="txtContent">Nội
												dung<span style="color: red"> * </span>
											</label>
											<div class="col-md-9">
												<textarea class="form-control" id="txtContent"
													name="txtContent"></textarea>
												<div class="warning" id="contentError"
													style="display: none">
													<span style="color: red;">Bạn chưa nhập nội dung</span>
												</div>
											</div>
										</div>
										<div class="form-group check_capcha"
											check_capcha="">
											<label class="col-md-3 control-label" for="textinput">Mã
												xác thực</label> <input type="hidden" name="captcha"
												id="cap_md" value="0" />
											<div class="col-md-9">
												<img id="capt_img_ct"
													src="" /> <img
													title="Tải lại mã bảo vệ" id="f5capt_cha"
													src="" />
												<div
													style="float: left; padding: 1px 5px 0 0; width: 40%;">
													<input type="text" class="form-control" id="captcha_cha"
														value="" />
												</div>
												<div class="warning" id="capchaError"
													style="display: none">
													<span style="color: red;">Bạn chưa nhập hoặc nhập không
														đúng mã capcha</span>
												</div>
											</div>
										</div>
										<!-- Button -->
										<div class="form-group">
											<label class="col-md-3 control-label" for="btnSent"></label>
											<div class="col-md-9 ">
												<button id="btnSent" type="submit" name="action"
													class="btn btn-primary" value="addContat">Gửi</button>
												<button type="reset" id="btnCancel" name="btnSent"
													class="btn btn-primary">Hủy</button>

											</div>
										</div>
									</fieldset>
								</form>
								<div class="f-contact-page-info">
									<h5 align="center">
										<p style="text-align: justify">
											<span style="font-size: 16px"><span
												style="font-family: times new roman, times, serif"><span
													style="color: rgb(255, 0, 0)"><strong>Mọi chi tiết
															qu&yacute; kh&aacute;ch xin vui l&ograve;ng li&ecirc;n
															hệ:</strong></span></span></span>
										</p>

										<p style="text-align: justify">&nbsp;</p>

										<p style="text-align: justify">
											<span style="font-size: 19px"><span
												style="font-family: times new roman, times, serif"><strong><u>GIA
															HÂN SMART</u></strong></span></span>
										</p>

										<p style="text-align: justify">&nbsp;</p>

										<p style="text-align: justify">
											<span style="font-size: 16px"><span
												style="font-family: times new roman, times, serif">1275D
													3/2, PHƯỜNGG 16, QUẬN 11, TPHCM</span></span>
										</p>

										<p style="text-align: justify">&nbsp;</p>

										<p style="text-align: justify">
											<span style="font-size: 16px"><span
												style="font-family: times new roman, times, serif">Tel:
													Tel: (08)66.538.538 &nbsp; &nbsp; &nbsp; Fax:
													(08)39.604.468</span></span>
										</p>

										<p style="text-align: justify">&nbsp;</p>

										<p style="text-align: justify">
											<span style="font-size: 16px"><span
												style="font-family: times new roman, times, serif"><strong>Gi&aacute;m
														Đốc:</strong></span></span>
										</p>

										<p style="text-align: justify">&nbsp;</p>

										<!--                                                                <table border="0" cellpadding="0" cellspacing="1"
                                                               style="width: 600px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="text-align: justify"><span
                                                                            style="font-size: 16px"><span
                                                                                style="font-family: times new roman, times, serif">Nguyễn
                                                                                Thị Ho&agrave;i Thu &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                                                &nbsp;</span></span></td>
                                                                    <td style="text-align: justify"><span
                                                                            style="font-size: 16px"><span
                                                                                style="font-family: times new roman, times, serif">Email:&nbsp;<a
                                                                                    href="mailto:nththu@soeco.com.vn"
                                                                                    style="line-height: 20.8px; text-align: justify;">nththu@soeco.com.vn</a></span></span></td>
                                                                    <td style="text-align: justify"><span
                                                                            style="font-size: 16px"><span
                                                                                style="font-family: times new roman, times, serif">MB:
                                                                                0908.363.550</span></span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>-->
										<p>&nbsp;</p>
									</h5>
								</div>

							</div>
						</div>
						<script
							src="js/jquery.validate.min.js"
							type="text/javascript"></script>
						<script
							src="js/jquery-1.7.2.min.js"
							type="text/javascript"></script>
						<script
							src="js/contact.js"
							type="text/javascript"></script>

						<script type="text/javascript">
                    $(document).ready(function () {
                        Contact.init();
                    })
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
<!--end mainproduc-->
@endsection()