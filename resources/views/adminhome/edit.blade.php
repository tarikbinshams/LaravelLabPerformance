<!DOCTYPE html>
<html>
<head>
	<title>Student Edit</title>
</head>
<body>
	<h1>Edit Student</h1>

	<a href="{{route('adminhome.userlist')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post">
	{{csrf_field()}}
	<table border="0">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$user['name']}}"></td>
		</tr>
		<tr>
			<td>Contact No</td>
			<td><input type="text" name="phone" value="{{$user['phone']}}"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" value="{{$user['username']}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value="{{$user['password']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>