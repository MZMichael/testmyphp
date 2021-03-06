<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Live Demo of Bootstrap Tutorial for Beginners</title>
 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
</head>
<body>
	<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
	 
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://yourwebsite.com/">Home</a>
			</div>
	 
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="#">All</a>
					</li>
					<li>
						<a href="#">Demo</a>
					</li>
					<li>
						<a href="#">Contact</a>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
	 
		</div>
	</div>	
	
	<div class="container">
		 <div class="col-md-12">
			<div class="page-header">
				<h1>Bootstrap Sample Page with Form</h1>
			</div>
		</div>
		
		<div class="col-md-12">
			<div class="alert alert-info">
				<strong>Heads up!</strong> My first PHP site <a href="https://codeofaninja.com/">codeofaninja.com</a>!
			</div>
		</div>

		<div class="col-md-12">
			<form action='http://demo.codeofaninja.com/tutorials/bootstrap-tutorial-for-beginners/' method='post'>
			 
				<table class='table table-hover table-responsive table-bordered'>
			 
					<tr>
						<td>Name</td>
						<td><input type='text' name='name' class='form-control' required></td>
					</tr>
			 
					<tr>
						<td>Contact Number</td>
						<td><input type='text' name='contact_number' class='form-control' required></td>
					</tr>
			 
					<tr>
						<td>Address</td>
						<td><textarea name='address' class='form-control'></textarea></td>
					</tr>
			 
					<tr>
						<td>List</td>
						<td>
							<select name='list_id' class='form-control'>
								<option value='1'>List One</option>
								<option value='2'>List Two</option>
								<option value='3'>List Three</option>
							</select>
						</td>
					</tr>
			 
					<tr>
						<td></td>
						<td>
							<button type="submit" class="btn btn-primary">
								<span class="glyphicon glyphicon-plus"></span> Create New Record
							</button>
						</td>
					</tr>
			 
				</table>
			</form>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</body>
</html>