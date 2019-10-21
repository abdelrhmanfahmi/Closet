<!DOCTYPE html>
<html>
<head>
	<title>Closet</title>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>	

</head>
<body>
<div id="tables1" style="float: right;">
<table border="1" >
	<tr>
		<th>Full_Name</th>
		<th>Username</th>
		<th>Password</th>
		<th>Email</th>
		<th>Address</th>
		<th>Phone_Id</th>
		<th>Date_Of_Birth</th>
		<th>Gender_Id</th>
		<th>Delete</th>
		<th>Edit</th>	
	</tr>
@foreach($getCustomerAll as $key)
 	<tr>
 		<td>{{$key->Full_name}}</td>
 		<td>{{$key->user_name}}</td>
 		<td>{{$key->password}}</td>
 		<td>{{$key->email}}</td>
 		<td>{{$key->address}}</td>
 		<td>{{$key->phone_id}}</td>
 		<td>{{$key->Date_Of_Birth}}</td>
 		<td>{{$key->gender_id}}</td>
 		<td><a href="/deleteCustomer/{{$key->customer_id}}" onclick="del('{{$key->customer_id}}');return false;" class="delclc">Delete</a></td>
 		<td><a href="/getUpdateCustomer/{{$key->customer_id}}">Edit</a></td>
 	</tr>
@endforeach
</table>
</div>

<form action="" method="POST" onsubmit="Add(this);return false;">
	{{ csrf_field() }}
		<pre>
Full_Name: <input type="text" name="Full_name" class="Full_name" id="Full_name">
			<br>
Username:  <input type="text" name="user_name" class="username" id="username">
			<br>
Password:  <input type="password" name="password" class="password" id="password">
			<br>
Email:	   <input type="email" name="email" class="email" id="email">
			<br>
Address:   <input type="text" name="address" class="address" id="address">
			<br>
Phone:	   <input type="text" name="phone_id" class="phone_id" id="phone_id">
			<br>
Birth_Date:<input type="text" name="Date_Of_Birth" class="Date_Of_Birth" id="Date_Of_Birth">
			<br>
Gender:    <select name="gender_id" id="gender_id" class="gender_id">
	<option></option>
	<option>Man</option>
	<option>Woman</option>
	<option>Kids</option>
</select>
           <br>
           <input type="hidden" name="admin_id" value="{{auth()->guard('adminGuard')->user()->admin_id}}">
		</pre>
	 	<input type="submit" name="submit" value="Add">
</form>
<script src="{{url('/javascript.js')}}"></script>
</body>
</html>