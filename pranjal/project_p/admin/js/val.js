$(document).ready(function(){
	$("#submit-btn").click(function(){
		
		var check=true;


	var a = $("#f_name").val();
		// alert(a);
		
		if(a=="")
		{
			check=false;
			$("#f_name_msg").html("Pleause Insert Your Full Name");
		}
		else
		{
			$("#f_name_msg").html("");

		}


	var b = $("#user_name").val();
		// alert(b);
		if(b=="")
		{
			check=false;
			$("#user_name_msg").html("Pleause Insert Your UserName");
		}
		else
		{
			var reg=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(reg.test(b)==false)
			{
				check=false;
				$("#user_name_msg").html("Insert Your Correct Email Id");
			}
			else
			{
				$("#user_name_msg").html("");
			}
		}


	var c = $("#pass").val();
		// // alert();
			if(c=="")
			{
				check=false;
				$("#pass_msg").html("Pleause Insert Your Password");
			}
			else
			{
				$("#pass_msg").html("");
			}

	var d = $("#re_pass").val();
		// alert();
		if(d=="")
		 {
		 	check=false;
		 	$("#re_pass_msg").html("Pleause Insert Your Re-password");
		 }
		 else
		 {
		 	if(c !=d)
		 	{
		 		check=false;
		 		$("#re_pass_msg").html("Dosen't Match Your Password and Repassword")
		 	}
		 	else
		 	{
		 	$("re_pass_msg").html("");
		 	}
		 }

	var e = $("#contact").val();
		// alert();
		if(e=="")
		{
			check=false;
			$("#contact_msg").html("Insert Your Contact/phon Number");
		}
		else
		{
			if(isNaN(e)==true)
			{
				check=false;
				$("#contact_msg").html("Pleause Insert Number Only");
			}
			else
			{
				if(e.length != 10)
				{
					check=false;
					$("#contact_msg").html("Insert Your 10 Numbers");
				}
				else
				{
					$("#contact_msg").html("");
			}
		}
	}


	var f = $("#add").val();
		// alert();
		if(f=="")
		{
			check=false;
			$("#add_msg").html("Pleause Insert Your Address");
		}
		else
		{
			$("#add_msg").html("");
		}


	var g = $("#city").val();
		if(g=="Select")
		{
			check=false;
			$("#city_msg").html("Select Your City");
		}
		else
		{
			$("#city_msg").html("");
		}


	var h = $("#male").is(":checked");
	var i = $("#female").is(":checked");

		if(h==false && i==false)
		{
			check=false;
			$("#gender_msg").html("Select Your Gender");
		}
		else
		{
			$("#gender_msg").html("");
		}



		
		return check;
	});
});