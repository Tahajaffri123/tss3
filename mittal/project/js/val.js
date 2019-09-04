$(document).ready(function(){
	$("#submit-btn").click(function(){
		var a = $("#f_name").val();
       if(a=="")
       {
       	$("f_name_msg").html("Insert Your Name");
       	return false;
       }
       else
       {
       	$("f_name_msg").html("""");
       }
       var b = $("#username").val();
       if(b="")
       {
       	$("username_msg").html("Insert Your UserName");
       	return false;
       }
       else
       {
       	$("username_msg").html("");
       }
       var c = $("#pass").val();
       if(c=="")
       {
       	$("pass_msg").html("Please Enter Your Password");
       	return false;
       }
       else
       {
       	$("pass_msg").html("");
       }
       var d = $("#con_pass").val();
       if(d="")
       {
       	$("#con_msg").html("Please Enter Your Confirm Password");
       	return false;
       }
       else
       {
       	$("#con_msg").html("");
       }
       var e = $("#contact").val();
       if(e="")
       {
       	$("contact_msg").html("Enter Contact Number ");
       	return false;
       }
       else
       {
       	$("#contact").html("");
       }
       var f = $("#add").val();
       if(f="")
       {
       	$("#add").html("Enter Your Address");
       	return false;
       }
       else
       {
       	$("#add").html("");
       }
       var g = $("#city").val();
       if(g="Select")
       {
       	$("#city").html("Select Your City");
       	return false;
       }
       else
       {
       	$("#city").html("");
       }

	});
});