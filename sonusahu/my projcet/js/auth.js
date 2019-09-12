$(document).ready(function(){
	$("#username").focus(function(){
		$(this).css({"border":"1px solid #ced4da"});
	});
	$("#password").focus(function(){
		$(this).css({"border":"1px solid #ced4da"});
	});


	$("#submit").click(function(){
		var u = $("#username").val();
		var p = $("#password").val();
		if(u=="")
		{
			$("#username").css({"border":"1px solid red"});
		}
		if(p=="")
		{
			$("#password").css({"border":"1px solid red"});
		}

		if(u !="" && p !="")
		{
			$.ajax({
				url : "ajax_auth.php",
				type : "post",
				data : { username : u, password : p},
				success : function(response){
					if(response==1)
					{
						$("#error_msg").html("This Username and Password is Incorrect");
						$("#username").focus();
					}
					if(response==2)
					{
						$("#error_msg").html("This Password is Incorrect");
						$("#password").focus();	
					}
					if(response==3)
					{
						$("#preloader").show();
						setTimeout("demo()", 3000);
						// window.location.href="my_account.php";
					}
				}
			});
		}
	});
});


function demo()
{
	window.location.href="my_account.php";
}