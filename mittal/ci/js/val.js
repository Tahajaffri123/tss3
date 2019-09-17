$(document).ready(function(){
	$("#submit-btn").click(function(){
              

              var a = $("#f_name").val();
              

              var check=true;
       if(a=="")
       {
<<<<<<< HEAD
              check=false;
       	$("#f_name_msg").html("Insert Your Name");
       	
=======
       	$("#f_name_msg").html("Insert Your Name");
       	return false;
>>>>>>> 9e69941df8ed803e871cacc45b6000d77e41d8a6
       }
       else
       {
       	$("#f_name_msg").html("");
       }
         var b = $("#username").val();
      if(b=="")
       {
              check=false;
       	$("#username_msg").html("Insert Your UserName");
       	
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
          var c = $("#pass").val();
       if(c=="")
       {
              check=false;
       	$("#pass_msg").html("Please Enter Your Password");
       	
       }
       else
       {
       	$("#pass_msg").html("");
       }
       var d = $("#con_pass").val();
       if(d=="")
       {
              check=false;
       	$("#con_msg").html("Please Enter Your Confirm Password");
       	
       }
       else
       {
              if(c != d)
              {
                 check= false;
                 $("#con_msg").html("Password and confirm Password Not Matched");    
              }
              else
              {
       	$("#con_msg").html("");
             }
          }
       var e = $("#contact").val();
       if(e=="")
       {
              check=false;
       	$("#contact_msg").html("Enter Contact Number ");
       	
       }
       else
       {
              if(isNaN(e)==true)
              {
                check= false;
                $("#contact_msg").html("Enter Only Numbers");     
              }
              else
              {
                    
                            if(e.length != 10)
                            {
                                   check=false;
                                   $("#contact_msg").html("Enter 10 Numbers Only");

                            }
                            else{
                            $("#contact_msg").html("");

                            }
            }
       }
       var f = $("#add").val();
       if(f=="")
       {
              check=false;
       	$("#add_msg").html("Enter Your Address");
       	
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
       
          return check;
	});
});
