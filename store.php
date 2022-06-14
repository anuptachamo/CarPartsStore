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
  <h1>Store</h1>
  <p>Alone we can do so little. Together we can do so much.</p> 
</div>
<form action="" class="was-validated">
		<!-- form "was-validated" start -->
	<!-- Container start -->
	<div class="container">

		
		<form>
			<!-- row start(storeid,sname and phone) -->
			<div class="row">
				<!-- <div class="col-sm-2">
					<label for="usr">Store Id</label>
  			<input type="text" class="form-control"Placeholder="StoreId" id="id" name="id" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
				</div> -->
				<div class="col-sm-4">
					<label for="usr">Store Name</label>
  			<input type="text" class="form-control"Placeholder="Enter Store Name" id="storename" name="Storename" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
    		</div>
			<div class="col-sm-3">
				<label for="usr">Phone</label>
  			<input type="text" class="form-control"Placeholder="98XXXXXXXX" id="Phone" name="phone" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="col-sm-5">
				<label for="usr">Email</label>
  			<input type="text" class="form-control"Placeholder="Enter Your Email" id="Email" name="Email" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
  			
			</div>

			
			</div>
			<!-- row End(sname,phone and email)) -->
		</form>

		<form>
			<!-- row start(state street and city) -->
			<div class="row">
			<div class="col-sm-3">
				<label for="usr">Street</label>
  			<input type="text" class="form-control"Placeholder="Enter Your Street" id="Street" name="Street" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="col-sm-3">
				<label for="usr">City</label>
  			<input type="text" class="form-control"Placeholder="Enter Your City" id="City" name="City" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="col-sm-3">
				<label for="usr">State</label>
  			<input type="text" class="form-control"Placeholder="Enter Your State" id="State" name="state" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			</div>
			<!-- row End(email street and city) -->
		</form>

		</div>
	<!-- Container End -->
</form>
	<!-- form "was-validated" End -->
	<form>
		<div class="row">
			<div class="col-sm-9"></div>
					<button type="button" class="btn btn-primary">Submit</button>
			</div>
	</form>
</body>
</html>

