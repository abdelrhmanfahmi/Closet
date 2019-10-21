<!DOCTYPE html>
<html>
<head>
	<title>Closet</title>
	<style type="text/css">
		.forms{
			margin-top: 60px;

		}
		.img{
			margin-left: 450px;
		}
	</style>
</head>
<body>
<div class="img">
	<img src="{{ asset('image2.jpg') }}" width="400" height="300">
</div>
<div class="forms">
<form action="" method="POST" align = "center">
	{{csrf_field()}}
	<pre>
Email   :	<input type="text" name="username" id="username" class="username">
	<br>
Password:	<input type="password" name="password" id="password" class="password">
    </pre>
    <input type="submit" name="submit" value="Login">
 </div>
</form>
</body>
</html>