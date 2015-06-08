<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product <?=$product['id']?> info | Restful Routes Demo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<h1>Product <?=$product['id']?></h1>
				<p>Name: <?=$product['name']?></p>
				<p>Description: <?=$product['description']?></p>
				<p>Price: $<?=$product['price']?></p>
				<p><a href="/products/edit">Edit</a> | <a href="/">Go Back</a></p>
			</div>
		</div>
	</div>
</body>
</html>