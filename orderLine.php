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
  <h1>Order Items</h1>
  <p>Life is for Service.</p> 
</div>
<form action="" class="was-validated">
<!-- Container start -->
	<div class="container">

		<!-- form "was-validated" start -->
		
		<form>
			<!-- row start(itemid, orderid and productid) -->
			<div class="row">
			<div class="col-sm-4">
				<label for="usr">Item_id</label>
  			<input type="text" class="form-control"Placeholder="Enter Item_id" id="IId" name="iid" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>

			<div class="col-sm-4">
				<label for="usr">Order_id</label>
  			<input type="text" class="form-control"Placeholder="Enter Order_id" id="OId" name="oid" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="col-sm-4">
				<label for="usr">Product_id</label>
  			<input type="text" class="form-control"Placeholder="Enter Product_id" id="pId" name="pid" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			</div>
			<!-- row End(fname and lastname) -->
		</form>

		<form>
			<!-- row start(listprice, discount and quantity)) -->
			<div class="row">
			<div class="col-sm-4">
				<label for="usr">List Price</label>
  			<input type="text" class="form-control"Placeholder="ListPrice" id="ListPrice" name="listprice" required>
  			<div class="valid-feedback">Valid.</div>
    		<div class="invalid-feedback">Please fill out this field.</div>
			</div>
			<div class="col-sm-4">
				<label for="usr">Discount</label>
  			<input type="text" class="form-control"Placeholder="Discount Price" id="Dprice" name="dprice" required>
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
			<!-- row End(listprice, discount and quantity) -->
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

