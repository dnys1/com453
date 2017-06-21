<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Completion certificates for training participants.">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Certificates</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
	
	<!-- Fonts to match e-course (Rise) -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Merriweather" rel="stylesheet">
	
	<style>
		* {
			font-family: 'Merriweather', serif;
		}
		
		h1 {
			font-family: 'Lato', sans-serif;
			font-weight: bold;
		}
		
		body > .container {
			padding-top: 0;
		}
		
		body {
			margin-bottom: 0;
		}
	</style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Begin page content -->
    <div class="container">
	<form method="get" action="download.php">
		<div class="form-group">
			<label for="fname">First Name* </label><span class="error"></span>
			<input type="text" class="form-control" name="fname" placeholder="First Name" required>
		</div>
		<div class="form-group">
			<label for="lname">Last Name* </label><span class="error"></span>
			<input type="text" class="form-control" name="lname" placeholder="Last Name" required>
		</div>
		<div class="form-group">
			<label for="email">Email* </label><span class="error"></span>
			<input type="email" class="form-control" name="email" placeholder="Email" required>
		</div>
		<button type="submit" class="btn-lg btn-success center-block">Submit</button>
	</form>
		
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
