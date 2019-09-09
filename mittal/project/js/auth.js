$(document).ready(function(){
	$("#username").focus(function(){
		$(this).css({"border":"3px solid #4FE9F2"});
	});
	$("#password").focus(function(){
		$(this).css({"border":"3px solid #4FE9F2"});
	});
	$("#submit").click(function(){
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
        	$.ajex({
                   url : "ajax-auth.php",
                   type : "post",
                   data : {username : u, pass : p},
                   succsecc : function(responce)
                   {
                   	if(responce==1)
                   	{
                   		$("#error-msg").html("This Usernamer And Password Is Incoorrect");
                   		$("#username").focus();
                   	}
                   	if(responce==2)
                   	{
                   		$("#erroe-msg").html("This Password Is Incorrect")
                   		$("#password").focus();
                   	}
                   }
        	});
        }
      });
	});