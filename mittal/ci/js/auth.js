$(document).ready(function(){
	$("#username").focus(function(){
		$(this).css({"border":"3px solid #4FE9F2"});
	});
	$("#password").focus(function(){
		$(this).css({"border":"3px solid #4FE9F2"});
	});
	$("#submit").click(function(){
     // alert(); 
        var u = $("#username").val();
        var p = $("#password").val();
        if(u=="")
        {
        	$("#username").css({
        		            "border":"3px solid #F02D09"
        		          });
        }
        if(p=="")
        {
        	$("#password").css({"border":"3px solid #F02D09"});
        }
        if(u !="" && p!="")
        {
        	$.ajax({
                   url : "auth-ajax.php",
                   type : "post",
                   data : {username : u, pass : p},
                   success : function(responce)
                   {
                     if(responce==1)
                     {
                     // alert(responce); 
                       $("#error-msg").html("This Usernamer And Password Is Incoorrect");
                       $("#username").focus();
                     }
                     if(responce==2)
                     {
                       // alert("----"+responce); 
                   		$("#error-msg").html("This Password Is Incorrect")
                   		$("#password").focus();
                   	}
                     if(responce==3)
                     {
                       $("#preloader").show();
                       setTimeout("demo()",2000);
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