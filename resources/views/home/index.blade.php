<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
</head>
<body>
	<h1>Welcome home! {{ session('username') }}</h1>

	<br>
	<a href="{{ route('home.addproduct') }}">Add Product</a> |
	<a href="{{ route('home.productlist') }}">Product List</a> |
	<a href="{{ route('logout.index') }}">logout</a>

</body>
</html>