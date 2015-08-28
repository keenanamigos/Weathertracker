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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
	html, body {
		height:100%;
	}

	.container {
		background-image: url('hdpineapple.jpeg');
		width: 100%;
		height: 100%;
		background-size: cover;
		background-position: center;
		padding-top: 150px;
	}
	
	.center {
		text-align: center;
	}
	
	.white {
		color:white;
	}
	
	p {
		padding-top: 15px;
		padding-bottom: 15px;
	}
	
	button {
		margin-top: 20px;
	}
	
	.alert {
		margin-top:20px;
		display:none;
	}
</style>
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
<script>
	$("#findMyWeather").click(function(event) {
		event.preventDefault();
			$(".alert").hide();
		if ($("#city").val() != "") {
		
		$.get("scraper.php?city="+$("#city").val(), function(data) {
			if (data=="") {
				$("#fail").fadeIn();
			} else {
				$("#success").html(data).fadeIn();
			}
		});
		} else {
			$("#noCity").fadeIn();
		
		}});
</script>
</body>
</html>

