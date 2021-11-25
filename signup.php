<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="div">
		<center>
			<h1>Sign Up Using Ajax</h1>
			<form id="formid" action="signup_query.php" method="post" onsubmit="return myfun();">
				Username:<input type="text" name="user" id="user" class="user" placeholder="Enter your user name" required=""><br><br>
				Gender: 
				<input type="radio" name="gen" id="gen" value="male"/>Male
				<input type="radio" name="gen" id="gen" value="female"/>Female<br><br>
				<input type="submit" name="submit" id="submit" class="submit" value="Signup">
			</form>	
			<h3 id="success"></h3>
		</center>
	</div>
	<script type="text/javascript">
		function myfun()
		{
			$.ajax({
				url: 'signup_query.php',
				type: 'POST',
				data: $('#formid').serialize(),
				success: function(response)
				{
					$('#success').html(response);
				},					
			});			
  			return false;
  		}	
	</script>
</body>
</html>


