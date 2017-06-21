<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Completion certificates for training participants.">
    <meta name="author" content="Dillon Nys">
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
	<?php
	$err = "";
	$fname = $lname = $email = "";

	/*  CHANGE THIS  */
	/*  BEFORE USING */
	/*****************/
	$servername = "";
	$username = "";
	$password = "";
	$dbname = "";
	/*****************/
	/*****************/

	if ($_SERVER['REQUEST_METHOD'] == "GET")
	{
		if (empty($_GET['fname']))
		{
			$err .= "First Name is required.<br>";
		} else
		{
			$fname = test_input($_GET['fname']);
			if (!preg_match("/^[a-zA-Z]*$/", $fname))
			{
				$err .= "Only letters allowed.<br>";
			}
		}
		
		if (empty($_GET['lname']))
		{
			$err .= "Last Name is required.<br>";
		} else
		{
			$lname = test_input($_GET['lname']);
			if (!preg_match("/^[a-zA-Z]*$/", $lname))
			{
				$err .= "Only letters allowed.<br>";
			}
		}
		
		if (empty($_GET['email']))
		{
			$err .= "Email is required.<br>";
		} else
		{
			$email = test_input($_GET['email']);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$err .= "Invalid email format.<br>";
			}
		}
		
		if (!empty($err)) 
		{
			echo "<p>The following errors were found. Please go back and fix them.<br><br>";
			echo $err;
			echo "</p>";
			echo "<form action=\"certificates.php\">
				 <button type=\"submit\" class=\"btn-lg btn-danger center-block\">Go Back</button>
				 </form>";
		}
		else
		{
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			$sql = "SELECT FileName FROM Certificates WHERE FirstName = '$fname' AND LastName = '$lname'";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{
					/*   CHECK THIS  */
					/*  BEFORE USING */
					/*****************/
					echo "<form action=\"certificates/" . $row['FileName'] . "\">
						 <button type=\"submit\" formtarget=\"_blank\" class=\"btn-lg btn-success center-block\">Download PDF</button>
						 </form>";
					break;
				}
			} else {
				echo "<p class=\"lead text-center\">That name wasn't found in our database :-/<p>";
				echo "<form action=\"certificates.php\">
					 <button type=\"submit\" class=\"btn-lg btn-danger center-block\">Go Back</button>
					 </form>";
			}

			$conn->close();
		}
	}

	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>

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
