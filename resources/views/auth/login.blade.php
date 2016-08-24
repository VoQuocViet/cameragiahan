@extends('usermaster') 

@section('content')
<div class="mainproduct">
	<div class="container">
		<div class="productcontent">
			<div class="detailtravel">
				<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="panel panel-default">
								<div class="panel-heading">Đăng Nhập</div>
								<div class="panel-body">
									
									<form role="form" action="" method="POST">
									    <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
										<div class="form-group">
											<label class="col-md-4 control-label">Username</label>
											<div class="col-md-6">
												<input type="text" class="form-control" name="txtUsername" value="{{ old('username') }}" placeholder="Username" autofocus>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-4 control-label">Password</label>
											<div class="col-md-6">
												<input type="password" class="form-control" name="txtPass" placeholder="Password">
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6 col-md-offset-4">
												<div class="checkbox">
													<label>
														<input type="checkbox" name="remember"> Remember Me
													</label>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6 col-md-offset-4">
												<button type="submit" class="btn btn-primary">Login</button>

												<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
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
@endsection
