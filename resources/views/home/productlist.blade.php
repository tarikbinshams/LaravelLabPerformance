<!DOCTYPE html>
<html>
<head>
	<title>list</title>
</head>
<body>
	<h1>Product's List</h1>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>
	<table border="1">
		<tr>
			<td>id</td>
			<td>Name</td>
			<td>Quantity</td>
			<td>Price</td>
			<td>Action</td>
		</tr>


	@foreach($users as $std)
		<tr>
			<td>{{ $std->id }}</td>
			<td>{{ $std->name }}</td>
			<td>{{ $std->quantity }}</td>
			<td>{{ $std->price }}</td>
			<td>
				<a href="{{ route('home.edit', $std->id) }}"> EDIT </a> | 
				<a href="{{ route('home.delete', $std->id) }}"> DELETE </a> 
			</td>
		</tr>
	@endforeach

	</table>
</body>
</html>