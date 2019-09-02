$(document).ready(function(){
	$("#submit-btn").click(function(){
		var a = $("#f_name").val();
		var b = $("#username").val();
		var c = $("#pass").val();
		var d = $("#re_pass").val();
		var e = $("#contact").val();
		var f = $("#add").val();
		var g = $("#city").val();

		var h = $("#male").is(":checked");
		var i = $("#female").is(":checked");


		var check=true;


		if(h==false && i==false)
		{
			check=false;
			$("#gender_msg").html("Select Your Gender");	
		}
		else
		{
			$("#gender_msg").html("");	

		}



		if(a=="")
		{
			check=false;
			$("#f_name_msg").html("Insert Your Full Name");
		}
		else
		{
			$("#f_name_msg").html("");

		}

		if(b=="")
		{
			check=false;
			$("#username_msg").html("Insert Your Email/Username");
		}
		else
		{
			var reg=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			if(reg.test(b)==false)
			{
				check=false;
				$("#username_msg").html("Insert Correct Email Id");

			}
			else
			{

			$("#username_msg").html("");
			}

		}


		if(c=="")
		{
			check=false;
			$("#pass_msg").html("Insert Your Password");
		}
		else
		{
			$("#pass_msg").html("");

		}
		if(d=="")
		{
			check=false;
			$("#re_pass_msg").html("Insert Your Re-Password");
		}
		else
		{
			if(c != d)
			{
				check=false;
			$("#re_pass_msg").html("Password and Re-Password Not Matched");

			}
			else
			{
			$("#re_pass_msg").html("");

			}

		}
		if(e=="")
		{
			check=false;
			$("#contact_msg").html("Insert Your Contact/Phone No");
		}
		else
		{
			if(isNaN(e)==true)
			{
				check=false;
				$("#contact_msg").html("Insert Numbers only");

			}
			else
			{
				if(e.length != 10)
				{
					check=false;
					$("#contact_msg").html("Insert 10 Numbers Only");

				}
				else{
				$("#contact_msg").html("");

				}
			}

		}
		if(f=="")
		{
			check=false;
			$("#add_msg").html("Insert Your Full Address");
		}
		else
		{
			$("#add_msg").html("");

		}
		if(g=="Select")
		{
			check=false;
			$("#city_msg").html("Select Your City");
		}
		else
		{
			$("#city_msg").html("");

		}

		return check;
	});
	// $("#myfrom").submit(function(){

	// });
});