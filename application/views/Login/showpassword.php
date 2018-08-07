
<!DOCTYPE html>
<html>
<head>
	<title>uisuda</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" >
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h2>Show Password</h2>
<input type="password" name="password" id="password">
<input type="checkbox" onclick="show()">
<i class="fas fa-eye" id="eye" style="position:absolute;left:154px;top: 65px;font-size: 20px   "></i>
</body>
</html>
<script type="text/javascript">
	 function show()
	 { var x=document.getElementById('password');
	 	if(x.type=='password')
	 	{
	 		x.type='text';
	 	}
	 	else
	 	{
	 		x.type='password';
	 	}
	 }


	$(document).ready(function()
  {

    $('#eye').on('click',function()
    {
      var passwordfiled=$('#password');
      var passwordfiledtype=passwordfiled.attr('type');
      if(passwordfiledtype=='password')
      {
        passwordfiled.attr('type','text')
       
      }
      else
      {
        passwordfiled.attr('type','password');
       
      }
    });
  });
</script>