<!DOCTYPE html>
<html>
<head>
	<title>Add Employee</title>
</head>
<body>
	<h1>Add Product</h1>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="{{route('logout.index')}}">logout</a>

<br><br>

<form method="post">
	{{csrf_field()}}
	<table border="0">
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{old('name')}}"></td>
		</tr>
		<tr>
			<td>Quantity</td>
			<td><input type="text" name="quantity" value="{{old('quantity')}}"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" value="{{old('price')}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Save"></td>
		</tr>
	</table>
</form>
</body>
</html>