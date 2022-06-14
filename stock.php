<!DOCTYPE html>
<html lang="en">
<head>
  <title>Carparts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Stocks</h1>
  <p>Life is for Service.</p> 
</div>
<form action="" class="was-validated">
<!-- Container start -->
	<div class="container">

		<!-- form "was-validated" start -->
		
		<form>
			<!-- row start(fname and lastname) -->
			<div class="row">
			<div class="col-sm-4">
				<label for="usr">Store ID</label>
  			<input type="text" class="form-control"Placeholder="xxxx" id="storeid" name="storeid" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="col-sm-4">
				<label for="usr">Product ID</label>
  			<input type="text" class="form-control"Placeholder="xxxx" id="productid" name="Productid" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="col-sm-4">
				<label for="usr">Quantity</label>
  			<input type="text" class="form-control"Placeholder="" id="Quantity" name="quantity" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			</div>
			<!-- row End(fname and lastname) -->
		</form>
	
	</div>
	<!-- Container End -->
</form>
	<!-- form "was-validated" End -->
	<form>
		<div class="row">
			<div class="col-sm-9">
			</div>
<button type="button" class="btn btn-success">Submit</button>
</div>
</form>
</body>
</html>

