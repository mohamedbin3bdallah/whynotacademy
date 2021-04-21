	$(document).ready(function(){
      $("#name").keyup(function(){
      var val = $(this).val();
	  $("#name-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'name-validation.php',
         data: {
            'name':val
         },
         success: function (response) {
            //document.getElementById("name-validation").innerHTML = response;
			if(response == '0')
			{
				$("#name").css("background-color", "#F5A9A9");
				$("#name-validation").css("color", "red");
				$("#name-validation").html('Enter name');
				$("#name-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '1')
			{
				$("#name").css("background-color", "#F5A9A9");
				$("#name-validation").css("color", "red");
				$("#name-validation").html('name must be English or Arabic characters');
				$("#name-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '2')
			{
				$("#name").css("background-color", "#F5A9A9");
				$("#name-validation").css("color", "red");
				$("#name-validation").html('name must be 5 characters or more');
				$("#name-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '3')
			{
				$("#name").css("background-color", "#F5A9A9");
				$("#name-validation").css("color", "red");
				$("#name-validation").html('name must be equal or less than 250 characters');
				$("#name-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			/*else if(response == '4')
			{
				$("#name").css("background-color", "#F5A9A9");
				$("#name-validation").css("color", "red");
				$("#name-validation").html('name is not available');
				$("#name-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}*/
			else if(response == '5')
			{
				$("#name").css("background-color", "#81F781");
				$("#name-validation").css("color", "green");
				$("#name-validation").html('name is available');
				$("#name-hidden").val('1');
				if($("#email-hidden").val() == '1' && $("#mobile-hidden").val() == '1') $("#registersubmit").removeAttr("disabled");
			}
         }
      });
      });
	});
	
	$(document).ready(function(){
      $("#email").keyup(function(){
      var val = $(this).val();
	  $("#email-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'email-validation.php',
         data: {
            'email':val
         },
         success: function (response) {
            //document.getElementById("email-validation").innerHTML = response;
			if(response == '0')
			{
				$("#email").css("background-color", "#F5A9A9");
				$("#email-validation").css("color", "red");
				$("#email-validation").html('Enter email');
				$("#email-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '1')
			{
				$("#email").css("background-color", "#F5A9A9");
				$("#email-validation").css("color", "red");
				$("#email-validation").html('Email must be characters');
				$("#email-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '2')
			{
				$("#email").css("background-color", "#F5A9A9");
				$("#email-validation").css("color", "red");
				$("#email-validation").html('Invalid email format');
				$("#email-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '3')
			{
				$("#email").css("background-color", "#F5A9A9");
				$("#email-validation").css("color", "red");
				$("#email-validation").html('Email must be 250 characters or less');
				$("#email-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			/*else if(response == '4')
			{
				$("#email").css("background-color", "#F5A9A9");
				$("#email-validation").css("color", "red");
				$("#email-validation").html('Email not available');
				$("#email-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}*/
			else if(response == '5')
			{
				$("#email").css("background-color", "#81F781");
				$("#email-validation").css("color", "green");
				$("#email-validation").html('Email is available');
				$("#email-hidden").val('1');
				if($("#name-hidden").val() == '1' && $("#mobile-hidden").val() == '1') $("#registersubmit").removeAttr("disabled");
			}
         }
      });
      });
	});
	
	$(document).ready(function(){
      $("#mobile").keyup(function(){
      var val = $(this).val();
	  $("#mobile-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'mobile-validation.php',
         data: {
            'mobile':val,
         },
         success: function (response) {
            //document.getElementById("mobile-validation").innerHTML = response;
			if(response == '0')
			{
				$("#mobile").css("background-color", "#F5A9A9");
				$("#mobile-validation").css("color", "red");
				$("#mobile-validation").html('Enter mobile');
				$("#mobile-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '1')
			{
				$("#mobile").css("background-color", "#F5A9A9");
				$("#mobile-validation").css("color", "red");
				$("#mobile-validation").html('Mobile Number must be digits');
				$("#mobile-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '2')
			{
				$("#mobile").css("background-color", "#F5A9A9");
				$("#mobile-validation").css("color", "red");
				$("#mobile-validation").html('mobile must be 11 digits');
				$("#mobile-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			else if(response == '3')
			{
				$("#mobile").css("background-color", "#F5A9A9");
				$("#mobile-validation").css("color", "red");
				$("#mobile-validation").html('mobile must be 11 digits');
				$("#mobile-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}
			/*else if(response == '4')
			{
				$("#mobile").css("background-color", "#F5A9A9");
				$("#mobile-validation").css("color", "red");
				$("#mobile-validation").html('The 2 mobile are not equals');
				$("#mobile-hidden").val('0');
				$("#registersubmit").attr('disabled', 'true');
			}*/
			else if(response == '5')
			{
				$("#mobile").css("background-color", "#81F781");
				$("#mobile-validation").css("color", "green");
				$("#mobile-validation").html('mobile is available');
				$("#mobile-hidden").val('1');
				if($("#name-hidden").val() == '1' && $("#email-hidden").val() == '1') $("#registersubmit").removeAttr("disabled");
			}
         }
      });
      });
	});
	
	$(document).ready(function(){
      $("#myusername").keyup(function(){
      var val = $(this).val();
	  $("#myusername-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'ajaxs/myusername-validation.php',
         data: {
            'myusername':val
         },
         success: function (response) {
            //document.getElementById("myusername-validation").innerHTML = response;
			if(response == '0')
			{
				$("#myusername").css("background-color", "#F5A9A9");
				$("#myusername-validation").css("color", "red");
				$("#myusername-validation").html('Enter Username');
				$("#myusername-hidden").val('0');
				$("#loginsubmit").attr('disabled', 'true');
			}
			else if(response == '1')
			{
				$("#myusername").css("background-color", "#F5A9A9");
				$("#myusername-validation").css("color", "red");
				$("#myusername-validation").html('Username must be English Characters');
				$("#myusername-hidden").val('0');
				$("#loginsubmit").attr('disabled', 'true');
			}
			else if(response == '5')
			{
				$("#myusername").css("background-color", "#81F781");
				$("#myusername-validation").css("color", "green");
				$("#myusername-validation").html('Username is available');
				$("#myusername-hidden").val('1');
				if($("#passw0rd-hidden").val() == '1') $("#loginsubmit").removeAttr("disabled");
			}
         }
      });
      });
	});
	
	$(document).ready(function(){
      $("#passw0rd").keyup(function(){
      var val = $(this).val();
	  $("#passw0rd-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'ajaxs/passw0rd-validation.php',
         data: {
            'passw0rd':val,
         },
         success: function (response) {
            //document.getElementById("passw0rd-validation").innerHTML = response;
			if(response == '0')
			{
				$("#passw0rd").css("background-color", "#F5A9A9");
				$("#passw0rd-validation").css("color", "red");
				$("#passw0rd-validation").html('Enter Password');
				$("#passw0rd-hidden").val('0');
				$("#loginsubmit").attr('disabled', 'true');
			}
			else if(response == '5')
			{
				$("#passw0rd").css("background-color", "#81F781");
				$("#passw0rd-validation").css("color", "green");
				$("#passw0rd-validation").html('Password is available');
				$("#passw0rd-hidden").val('1');
				if($("#myusername-hidden").val() == '1') $("#loginsubmit").removeAttr("disabled");
			}
         }
      });
      });
	});