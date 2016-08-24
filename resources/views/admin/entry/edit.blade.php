@extends('admin.master') @section('controller','Product')
@section('action','Edit') @section('content')
<style>
<!--
	.icon_del {
		position: relative;
		top: 0px;
	}
	#insert { margin-top: 20px;}
-->
</style>
<form action="" method="POST" name="frmEditproduct" enctype="multipart/form-data">
<div class="col-lg-7" style="padding-bottom: 120px">
	@include('admin.blocks.error')
	
		<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
		<div class="form-group">
			<label>Category Parent</label> <select class="form-control"
				name="sltParent">
				<option value="0">Please Choose Category</option>
				<?php cate_parent($cate, 0, "--", $product["cate_id"])?>
			</select>
		</div>
		<form action="" method="POST">
			<div class="form-group">
				<label>Name</label> <input class="form-control" name="txtName" value="{!! old('txtName',isset($product) ? $product['name'] : null) !!}"
					placeholder="Please Enter Username" />
			</div>
			<div class="form-group">
				<label>Price</label> <input class="form-control" name="txtPrice" value="{!! old('txtPrice',isset($product) ? $product['price'] : null) !!}"
					placeholder="Please Enter Password" />
			</div>
			<div class="form-group">
				<label>Intro</label>
				<textarea class="form-control" rows="3" name="txtIntro">{!! old('txtIntro',isset($product) ? $product['intro'] : null) !!}</textarea>
				<script type="text/javascript">ckeditor('txtIntro')</script>
			</div>
			<div class="form-group">
				<label>Content</label>
				<textarea class="form-control" rows="3" name="txtContent">{!! old('txtContent',isset($product) ? $product['content'] : null) !!}</textarea>
				<script type="text/javascript">ckeditor('txtContent')</script>
			</div>
			
			<div class="form-group">
				<label>Images Current</label> 
				<img width="150px" src="{!! asset('resources/upload/'.$product['image']) !!}" />
				<input type="hidden" name="img_current" value="{!! $product['image'] !!}"/>
			</div>
			<div class="form-group">
				<label>Images</label> <input type="file" name="fImages">
			</div>
			<div class="form-group">
				<label>Product Keywords</label> <input class="form-control"
					name="txtKeywords" placeholder="Please Enter Category Keywords" value="{!! old('txtKeywords',isset($product) ? $product['keywords'] : null) !!}"/>
			</div>
			<div class="form-group">
				<label>Product Description</label>
				<textarea class="form-control" rows="3" name="txtDescription">{!! old('txtDescription',isset($product) ? $product['description'] : null) !!}</textarea>
			</div>
			<button type="submit" class="btn btn-default">Product Edit</button>
			<button type="reset" class="btn btn-default">Reset</button>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
@foreach($product_image as $key => $item)
	<div class="form-group" id="{!! $key !!}">
		<img width="150px" src="{!! asset('resources/upload/detail/'.$item['image']) !!}" idHinh="hinh{!! $item['id'] !!}" id="{!! $key !!}"/>
		<a id="del_img_demo" href="javascript:void(0)" type="button" class="btn btn-danger btn-cỉcle icon_del"><i class="fa fa-times"></i></a>
	</div>
	<input type="file" name="fProductDetail[]" />
	
@endforeach
<button type="button" class="btn btn-primary" id="addImages">Add Image</button>
	<div id="insert"></div>
</div>
<form>
@endsection()
