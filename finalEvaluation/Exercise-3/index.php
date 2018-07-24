
<!DOCTYPE html>
<!-- We create a form to handle the informations that givven by the user -->

<html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Insert title here</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="container">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Car Control Panel</h1>
				<p class="lead">Please Enter The Car Information Bellow </p>
			</div>
		</div>
    	<form method="POST" action="script.php">
    		<label for="make">Make</label>
    		<input class="form-control" name="make" type="text" placeholder="Enter The Make"/>
    		<br/>
    		<label for="model">Model</label>
    		<input class="form-control" name="model" type="text" placeholder="Enter The Model" />
    		<br/>
    		<label for="year">Year</label>
    		<input class="form-control" name="year" type="date" placeholder="Enter The Year" />
    		<br/>
    		<label for="color">Color</label>
    		<select class="form-control" name="color">
    			<option value="white">White</option>
    			<option value="silver">Silver</option>
    			<option value="black">Black</option>
    			<option value="red">Red</option>
				<option value="blue">Blue</option>
				<option value="others">Others</option>
    		</select>
			<hr>
			<hr>
    		<button class="btn btn-success" type="submit">CONFIRM THE DATAS</button>
    	</form>
    	
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>

