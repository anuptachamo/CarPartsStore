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
  <h1>Customers</h1>
  <p>we provide good products to our Customers</p> 
</div>
<form action="connection.php" method="post" class="was-validated">
<!-- Container start -->
	<div class="container">

		<!-- form "was-validated" start -->
		
		<form>
			<!-- row start(fname and lastname) -->
			<div class="row">
			<div class="col-sm-6">
				<label for="usr">First Name</label>
  			<input type="text" class="form-control"Placeholder="Enter Your First Name" id="fName" name="fname" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="col-sm-6">
				<label for="usr">Last Name</label>
  			<input type="text" class="form-control"Placeholder="Enter Your Last Name" id="lName" name="lname" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			</div>
			<!-- row End(fname and lastname) -->
		</form>

		<form>
			<!-- row start(mobile no and email) -->
			<div class="row">
			<div class="col-sm-4">
				<label for="usr">Mobile no.</label>
  			<input type="text" class="form-control"Placeholder="98XXXXXXXX" id="Mno" name="mobile" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="col-sm-8">
				<label for="usr">Email</label>
  			<input type="text" class="form-control"Placeholder="Enter Your Email" id="Email" name="email" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			</div>
			<!-- row End(mobile no and email) -->
		</form>

		<form>
			<!-- row start(street,city and state) -->
			<div class="row">
			<div class="col-sm-4">
				<label for="usr">Street</label>
  			<input type="text" class="form-control"Placeholder="Enter your Street" id="Street" name="street" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="col-sm-4">
				<label for="usr">City</label>
  			<input type="text" class="form-control"Placeholder="Enter Your City Name" id="City" name="city" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="col-sm-4">
				<label for="usr">State</label>
  			<input type="text" class="form-control"Placeholder="Enter Your State" id="State" name="state" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			</div>
			<!-- row End(street,city and state) -->
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

