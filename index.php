<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">


    <title>WEATHER TRACKER</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="scraper.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="center white">Weather Forecast</h1>
			<p class="lead center white">This application will allow you to see the weather forecast for your chosen city. Enter your city below to get a forecast</p>
			
			<form>
				<div class="form-group">
					<input type="text" class="form-control" id="city" name="city" placeholder="E.g. Paris, New York, Chicago"/>
				</div>
				<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>
			</form>
			<div id="success" class="alert alert-success">Success!</div>
			<div id="fail" class="alert alert-danger">Could not find weather data for that city! Please try again.</div>
			<div id="noCity" class="alert alert-danger">Please enter a city!</div>
		</div>
		</div>
</div>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="scraper.js"></script>
</body>
</html>

