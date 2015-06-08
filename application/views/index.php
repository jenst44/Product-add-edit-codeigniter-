<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>All Prodcuts | Semi Restful Route Demo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
	
	table {
		margin-top: 20px;
	}
	
	.green {
		color:green;
	}

	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-8">
				<h2>Products</h2>
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						for($i=0;$i<count($products);$i++)
						{ ?>
							<tr>
								<td><?=$products[$i]['name']?></td>
								<td><?=$products[$i]['description']?></td>
								<td>$<?=$products[$i]['price']?></td>
								<td><a href="/products/show/<?=$products[$i]['id']?>">Show</a> | <a href="/products/edit/<?=$products[$i]['id']?>">Edit</a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				<a href="/products/NewProduct">Add a new product</a>
				<p class="green"><?=$this->session->flashdata('create_success')?></p>
			</div>
		</div>
	</div>
</body>
</html>