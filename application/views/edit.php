<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Product <?=$id?> | Semi Restful Route Demo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style>
	input {
		margin-bottom: 10px;
	}

	a {
		margin-left: 40px;
	}

	h2 {
		margin-bottom: 40px;
	}

	p {
		margin-top: 40px;
		color: #FF362B;
		font-size: 16px;
	}
	
</style>
</head>
<body>
	<div class="fluid-container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-10"><h2>Edit Product <?=$id?></h2></div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-6">
				<form class="form-horizontal" action="/products/editProduct/<?=$id?>" role="form" method="post">
					<div class="form-group">
						<label class="control-label col-sm-2" for="text">Name:</label>
   						<div class="col-sm-10">
   							<input type="text" name="name" class="form-control" value="<?=$product['name']?>">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="text">Description:</label>
   						<div class="col-sm-10"> 
   							<input type="text" name="description" class="form-control" value="<?=$product['description']?>">
						</div>
  					</div>
  					<div class="form-group">
						<label class="control-label col-sm-2" for="text">Price:</label>
   						<div class="col-sm-10"> 
   							<input type="text" name="price" class="form-control" value="<?=$product['price']?>">
						</div>
  					</div>
  					<div class="form-group"> 
    					<div class="col-sm-offset-2 col-sm-10">
      						<button type="submit" class="btn btn-default">Create</button>
      						<a href="/">Go Back</a>
      						<p class="red"><?=$this->session->flashdata('error')?></p>
      					</div>
    				</div>
    			</form>			
  			</div>	
		</div>
	</div>
</body>
</html>