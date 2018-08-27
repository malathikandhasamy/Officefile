$(document).ready(function(){
$('#regfo').on('click',function(){
			 var username=$('#username').val();
			 var email=$('#email').val();
			 var password=$('#password').val();
			 var confirmpassword=$("#confirm_password").val();
			 var username_error='';
			 var email_error='';
			 var password_error='';
			 var confirmpassword_error='';
			 var alphanu = /^[a-zA-Z0-9]+$/;
			 var psw=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/;
			 var upper=/[A-Z]/g;
			 var lower=/[a-z]/g;
			 var num=/[0-9]/g;
			 var spl=/[^\w\s]/gi; 
			if(!username.match(alphanu))
			{
				username_error="name must contains alphanumeric";
				$('#usernameError').html(username_error);
				return false;
			}
			else
			{
				$('#usernameError').html("");
			}
			if(email==''||email.indexOf('@',0)<0 && email.indexOf('.',0)<0)
			{
				email_error='Enter valid emailaddress';
				$('#emailError').html(email_error);
				return false;
			}
			else
			{
				$('#emailError').html("");
			}
			
			if(password=="")
		    {
		        var errormsg="Password should not be empty";
		        $('#passwordError').html(errormsg);
		        return false;     
		    }

	         else if((!password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/)))
	         {
	            var errormsg="Password must contain atleast one uppercase,lowercase,special characters ,digits and upto 8-15";
	              $('#passwordError').html(errormsg);
	              return false; 
	         }
	         else
	          {
	                  $("#passwordError").html("");
	                  
	          }

	          if(confirmpassword=="")
	          {
	              var errormsg=" Confirm Password should not be empty";
	              $('#confirmpasswordError').html(errormsg);
	              return false;
	          
	          }
	          else if(password!=confirmpassword)
	          {
	            var errormsg="Password and Confirm Password doesn't match";
	              $('#confirmpasswordError').html(errormsg);
	              return false;
	           }
	           else
	           {
	               $("#confirmpasswordError").html("");
	           }
});
$.ajax({
	url:"./database/ac-id.php",
	type:"POST",
	success:function(data){
		$('#link').html(data);
	}
});
$('#link').click(function(){
	//$('#link').trigger('click');
	$('#link').toggle('click',function(){
var option = $('#link').val();
	$.ajax({
		url:"./database/date-count.php",
		type:"POST",
		dataType:"JSON",
		data:{
			'ac_id':option
		},
		success:function(data)
		{   
			$('#count1').html(data.count);
			$('#date1').html(data.date);
			$('#count2').html(data.count2);
			$('#date2').html(data.date2);
			$('#totalcount').html(data.value);
			$('#card-total').html(data.card);
			$('#net').html(data.net);
			console.log(data);
		}
	});
});
});
});