<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<h1>Welcome home! {{ session('username') }}</h1>

	<br>
	<a href="{{route('adminhome.adduser')}}">Add User</a> |
	<a href="{{route('adminhome.userlist')}}">User List</a> |
	<a href="{{ route('logout.index') }}">logout</a>

</body>
</html>