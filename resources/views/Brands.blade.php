<!DOCTYPE html>
<html>
<head>
	<title>Closet</title>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
<div id="tables1" style="float: right;margin-right: 100px;">
<table border="1" >
	<tr>
		<th>Name</th>
		<th>Username</th>
		<th>Password</th>
		<th>Email</th>
		<th>Branch</th>
		<th>Phone_Id</th>
		<th>Delete</th>
		<th>Edit</th>	
	</tr>
@foreach($getBrand as $key)
 	<tr>
 		<td>{{$key->name}}</td>
 		<td>{{$key->username}}</td>
 		<td>{{$key->password}}</td>
 		<td>{{$key->email}}</td>
 		<td>{{$key->branch}}</td>
 		<td>{{$key->phone_id}}</td>
 		<td><a href="/deleteBrand/id={{$key->brand_id}}" onclick="DeleteBrand('{{$key->brand_id}}');return false;" class="delclc">Delete</a></td>
 		<td><a href="/updateBrand/id={{$key->brand_id}}">Edit</a></td>
 	</tr>
@endforeach
</table>
</div>
<form action="" method="POST" style="float: left;" onsubmit="AddBrand(this);return false;">
	{{ csrf_field() }}
		<pre>
Name:      <input type="text" name="name" class="name" id="name">
			<br>
Username:  <input type="text" name="username" class="username" id="username">
			<br>
Password:  <input type="password" name="password" class="password" id="password">
			<br>
Email:	   <input type="email" name="email" class="email" id="email">
			<br>
Branch:    <input type="text" name="branch" class="branch" id="branch">
			<br>
Phone:	   <input type="text" name="phone_id" class="phone_id" id="phone_id">
			<br>
           <input type="hidden" name="admin_id" value="{{auth()->guard('adminGuard')->user()->admin_id}}">
		</pre>
	 	<input type="submit" name="submit" value="Add">
</form>
<script src="{{url('/javascript.js')}}"></script>
</body>
</html>