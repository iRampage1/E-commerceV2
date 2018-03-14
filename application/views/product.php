<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div align="center">
<br>
<br>
	<div class="row">
		<div class="jumbotron" font-family="Times New Roman">
    	<h1><b>MARS DRUGS STORE</h1></b>            
	</div>
	</div>

	<div class="col-sm-3">
	<br><br><hr>
		<form action="<?php base_url()?>product/insert" method="post">
		<table class="table table-condensed table-bordered" border="3">
				
				<td>Product Name</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>Product Code</td>
				<td><input type="text" name="code" required></td>
			</tr>
			<tr>
				<td>Product Stock</td>
				<td><input type="text" name="stock" required></td>
			</tr>
			<tr>
				<td>Product Image</td>
				<td><input type="text" name="image" required></td>
			</tr>
			<tr>
				<td>Product Price</td>
				<td><input type="text" name="price" required></td>
			</tr>
			
		</table>
		<td><button type="submit" class="btn btn-info">Add New Product</button></td>
	</form>
	</div>

	<br>
	<br>
	<hr>
	<div class="container col-sm-9" >
		<table class="table table-condensed table-bordered" align="center">
		<thead ">
			<th style="text-align:center">Product Name</th>
			<th style="text-align:center">Product Code</th>
			<th style="text-align:center">Product Stock</th>
			<th style="text-align:center">Product Image</th>
			<th style="text-align:center">Product Price</th>
			<th style="text-align:center">STATUS</th>
		</thead>
		<?php
			foreach($productlist->result() as $re)
			echo "<tbody align='center'><tr>"
				
				."<td> $re->pro_name</td>"
				."<td> $re->pro_code</td>"
				."<td> $re->pro_stock</td>"
				."<td> $re->pro_image</td>"
				."<td> $re->pro_price</td>"
				."<td><a class='btn btn-info' href='".base_url()."product/view/$re->id'>EDIT</a> | <a class='btn btn-danger' href='".base_url()."product/delete/$re->id'>DELETE</a></td>"
				."</tr></tbody>";

		?>
		</table>
	</div>
</div>
</div>

</body>
</html>
