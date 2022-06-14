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
  <h1>Product</h1>
  <p>we provide good product to our Customers</p> 
</div>
  <!-- Container start -->
<div class="container">
  <div class="row">
  	  
    <div class="col-sm-12">
    	<form action="/index.php" class="was-validated">
    		<form>
    			<div class="form-row">
  		<div class="col-sm-6">
      	<div class="form-group">
  			<label for="usr">ProductName</label>
  			<input type="text" class="form-control"Placeholder="Enter the Product Name" id="pName" name="pname" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
	  	</div>
	  	</div>
	  	<div class="col-sm-6">
	  		<div class="form-group">
  			<label for="usr">ProductNumber</label>
  			<input type="text" class="form-control"Placeholder="XXXXXXX" id="ProductNumber" name="pnumber" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
	  	</div>
	  	</div>

	  	</form> 
	  	</div>
	  	<form>
	  		<div class="row">
			<div class="col-sm-4">
				<label for="usr">Model Year</label>
  			<input type="text" class="form-control"Placeholder="Enter your ModelYear" id="ModelYear" name="modelyear" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="col-sm-4">
				<label for="usr">List Price</label>
  			<input type="text" class="form-control"Placeholder="Price" id="Price" name="ListPrice" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="col-sm-4">
				<label for="usr">Discount</label>
  			<input type="text" class="form-control"Placeholder="Discount Amount" id="Discount" name="discount" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			</div>
		</form>

<br>
		<form>
			<div class="row">
		<div class="col-sm-4">
		<div class="dropdown">
  			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    			Brands
  			</button>
  				<div class="dropdown-menu">
    				<a class="dropdown-item" >Hatchback</a>
    				<a class="dropdown-item" >Honda</a>
    				<a class="dropdown-item" >Toyota</a>
    				<a class="dropdown-item" >Ford</a>
    				<a class="dropdown-item" >GMC</a>
  				</div>
		</div>
	</div>

		<!-- dropdown start -->
		<div class="col-sm-4">
		<div class="dropdown">
  			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    			Categories
  			</button>
  				<div class="dropdown-menu">
    				<a class="dropdown-item" >Hatchback</a>
    				<a class="dropdown-item" >Honda</a>
    				<a class="dropdown-item" >Toyota</a>
    				<a class="dropdown-item" >Ford</a>
    				<a class="dropdown-item" >GMC</a>
  				</div>
		</div>
	</div>
		<!-- End dropdown -->
	</div>
	</form> 
    <form>
		<div class="row">
			<div class="col-sm-9">
			</div>
<button type="button" class="btn btn-success">Submit</button>
</div>
</form>
</body>
</html>

