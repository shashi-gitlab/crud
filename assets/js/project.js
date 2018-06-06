$(document).ready(function(){
// alert(333)


$(".rg_btn").click(function(){

	// alert(777)
	$.ajax({
		type:"post",
		data:$("#rg_form").serialize(),
		url:"../controller/register_action.php",
		success:function(res)
		{
			alert(res);
			// window.location="view_data.php";s
			// $("#rg_form")[0].reset();
			// document.location.reload(true);
			// if(res==1)
			// {
			// 	$("#rg_form")[0].reset();
			// 	alert("User added")
			// }
			// error:function(res)
			// {
			// 	alert(res);
			// }
		}

	})
})

$(".delete").click(function(xyz){
	// alert(555)
	xyz.preventDefault();
	var data=$(this).attr("for");
	// alert(data);
	$.ajax({

		type:"post",
		data:"lg_id="+data,
		url:"../controller/delete_action.php",
		success:function(res)
		{
			alert(res);
			document.location.reload(true);
		}
	})
})

/////////////////////////////////////////////////////////////////////////////////////////////
$(".update_btn").click(function(xyz){
	// alert(4444)
	xyz.preventDefault();
	$.ajax({
		type:"post",
		data:$("#update_form").serialize(),
		url:"../controller/update_action.php",
		success:function(res)
		{
			alert(res);
			window.location="index.php";
		}
	})

})
////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$(".paginate a").click(function(xyz){
		xyz.preventDefault();
		var ans = $(this).attr("for");
		// alert(ans);
		$(".paginate a").css("background","#ccc");
		$(".paginate a").css("color","#fff");
		$(this).css("background","#900");
		$.ajax({
			type:"post",
			data:"record="+ans,
			url:"../controller/pagination_action.php",
			success:function(res){
				// alert(res);
				$(".replacedata").html(res);
				
			},
			error:function(res){
				alert(res);
			}
		});
	})

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(".lg_btn").click(function(){
	// alert(4444)
	$.ajax({
		type:"post",
		data:$("#lg_form").serialize(),
		url:"../controller/loginaction.php",
		success:function(res)
		{
			// alert(res);
			// header("location:../view/welcome.php");
			if(res==1)
			{
			// 	alert("login successfully");
				window.location="welcome.php";
			}
			else
			{
				alert(res);
			}
			// error:function(res)
			// {
			// 	alert(res);
			// }
		}
	});
});









});