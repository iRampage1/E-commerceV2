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
	
	<div class="container" >
		<form action="<?= base_url()?>product/update" method="post" align="center">
			<table class="table table-condensed table-bordered" style="width: 30% !important" align="center">
				<tr>
					
					<td>Product ID</td>
					<td><input type="text" name="id" hidden value="<?php echo $index['id']?>"></td>
				</tr>
				<tr>
					
					<td>ProductName</td>
					<td><input type="text" name="name" value="<?php echo $index['pro_name']?>"></td>
				</tr>
				<tr>
					<td>ProductCode</td>
					<td><input type="text" name="code" value="<?php echo $index['pro_code']?>"></td>
				</tr>
				<tr>
					<td>ProductStock</td>
					<td><input type="text" name="stock" value="<?php echo $index['pro_stock']?>"></td>
				</tr>
				<tr>
					<td>ProductImage</td>
					<td><input type="text" name="image" value="<?php echo $index['pro_image']?>"></td>
				</tr>
				<tr>
					<td>ProductPrice</td>
					<td><input type="text" name="price" value="<?php echo $index['pro_price']?>"></td>
				</tr>
				
			</table>
			<td colspan="2"><button type="submit" class="btn btn-info">Update Product</button></td>
		</form>
		
	</div>
</div>
</div>

</body>
</html>
