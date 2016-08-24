<?php
function stripUnicode($str) {
	if (! $str)
		return false;
	$unicode = array (
			'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
			'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
			'd' => 'đ',
			'D' => 'Đ',
			'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
			'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
			'i' => 'í|ì|ỉ|ĩ|ị',
			'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
			'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
			'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
			'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
			'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
			'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
			'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ' 
	);
	foreach ( $unicode as $khongDau => $coDau ) {
		$arr = explode ( "|", $coDau );
		$str = str_replace ( $arr, $khongDau, $str );
	}
	return $str;
}
function changeTitle($str) {
	$str = trim ( $str );
	if ($str == "") {
		return "";
	}
	$str = str_replace ( '"', '', $str );
	$str = str_replace ( "'", '', $str );
	$str = stripUnicode ( $str );
	$str = mb_convert_case ( $str, MB_CASE_LOWER, 'utf-8' );
	$str = str_replace ( ' ', '-', $str );
	
	return $str;
}
function cate_parent($data, $parent = 0, $str = "--", $select = 0) {
	foreach ( $data as $val ) {
		$id = $val ["id"];
		$name = $val ["name"];
		
		if ($val ["parent_id"] == $parent) {
			if ($select != 0 && $id == $select) {
				echo "<option value='$id' selected='selected'>$str $name</option>";
			} else {
				echo "<option value='$id'>$str $name</option>";
			}
			cate_parent ( $data, $id, $str . "--", $select );
		}
	}
}
function productList() {
	// Build an array containing the parent category ID and all subcategory IDs found
	$categoryIds = array_merge ( [ 
			$this->id 
	], $this->subcategoryIds () );
	print_r ( $categoryIds );
	// Find all products that match the retrieved category IDs
	return Product::whereIn ( 'cate_id', $categoryIds )->get ();
}
function subcategoryIds($id = null, &$ids = []) {
	// If no ID is passed, set the current model ID as the parent
	if (is_null ( $id )) {
		$id = $this->id;
	}
	
	// Find subcategory IDs
	$categoryIds = $this->query ()->where ( 'parent_id', $id )->lists ( 'id' );
	
	// Add each ID to the list and recursively find other subcategory IDs
	foreach ( $categoryIds as $categoryId ) {
		$ids [] = $categoryId;
		$ids += $this->subcategoryIds ( $categoryId, $ids );
	}
	
	return $ids;
}
?>