<!DOCTYPE html>
<html>
<head>
	<title>list</title>
</head>
<body>
	<h1>Employeer's List</h1>

	<a href="{{route('adminhome.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	<table border="1">
		<tr>
			<td>id</td>
			<td>Name</td>
			<td>Contact No</td>
			<td>Username</td>
			<td>Password</td>
			<td>Action</td>
		</tr>


	@foreach($users as $std)
		<tr>
			<td>{{ $std->id }}</td>
			<td>{{ $std->name }}</td>
			<td>{{ $std->phone }}</td>
			<td>{{ $std->username }}</td>
			<td>{{ $std->password }}</td>
			<td>
				<a href="{{ route('adminhome.edit', $std->id) }}"> EDIT </a> | 
				<a href="{{ route('adminhome.delete', $std->id) }}"> DELETE </a> 
			</td>
		</tr>
	@endforeach

	</table>
</body>
</html>