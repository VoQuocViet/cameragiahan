$(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
 $("div.alert").delay(3000).slideUp();
 
 function xacnhanxoa(msg) {
	if(window.confirm(msg)){
		return true;
	}
	return false;
}
$(document).ready(function () {
	$("#addImages").click(function() {
		$("#insert").append('<div class="form-group"><input type="file" name="fEditDetail[]"></div>')
	})
});
$(document).ready(function () {
	$("a#del_img_demo").on('click',function(){
		var url = "http://localhost/laravel-master/admin/product/delimg/";
		var _token = $("form[name='frmEditproduct']").find("input[name='_token']").val();
		var idHinh =  $(this).parent().find("img").attr("idHinh");
		var img =  $(this).parent().find("img").attr("src");
		var rid =  $(this).parent().find("img").attr("id");
		$.ajax({
			url:url + idHinh,
			type: 'GET',
			cache: false,
			data: {"_token":_token, "idHinh":idHinh, "urlHinh":img},
			success: function (data) {
				if(data == "OK"){
					$("#"+rid).remove();
				} else {
					alert("Error! Please contact Admin!");
				}
				
			}
		});
//		alert(rid);
	})
});