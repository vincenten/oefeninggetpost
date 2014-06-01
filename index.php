<?php 
	$name = "";
	$username = "";
	$password = "";

	$nameget = "";
	$usernameget = "";
	$passwordget = "";

	if (isset($_POST["name"])) {
		$name = $_POST["name"];
	}

	if (isset($_POST["username"])) {
		$username = $_POST["username"];
	}
	if (isset($_POST["password"])) {
		$password = $_POST["password"];
	}

	if (isset($_GET["nameget"])) {
		$nameget = $_GET["nameget"];
	}

	if (isset($_GET["usernameget"])) {
		$usernameget = $_GET["usernameget"];
	}
	if (isset($_GET["passwordget"])) {
		$passwordget = $_GET["passwordget"];
	}

	$content = !empty($name) && !empty($username) && !empty($password) && !empty($nameget) && !empty($usernameget) && !empty($passwordget);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>"oefening php</title>
		<link rel="stylesheet" type="text/css" href="css\bootstrap.css">
</head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <title>Sign in</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">

<body>
<?php if ($content){ ?>
	
<?php }else{ ?>
<div class="container">
<link rel="stylesheet" type="text/css" href="css\signin.css">
      <form class="form-signin" method="POST" role="form" action="antwoord.php">
			<h2 class="form-signin-heading">Maak uw gebruikersnaam via 1 van de verzendmogelijkheden</h2>
			<input name="name" type="name" class="form-control" placeholder="naam" required="" autofocus="">
			<input name="username" type="name" class="form-control" placeholder="gebruikersnaam" required="" >
			<input  name="password"type="password" class="form-control" placeholder="wachtwoord" required="">
			<button type="submit" name="send" value="verzenden">Verzend met post </button>
      </form>
</div>

<div class="container">
<link rel="stylesheet" type="text/css" href="css\signin.css">
      <form class="form-signin" method="get" role="form" action="antwoord.php">
			<input name="nameget" type="name" class="form-control" placeholder="naam" required="" autofocus="">
			<input name="usernameget" type="name" class="form-control" placeholder="gebruikersnaam" required="" >
			<input  name="passwordget"type="password" class="form-control" placeholder="wachtwoord" required="">
			<button type="submit" name="send" value="verzenden">Verzend met get </button>
      </form>
</div>



<?php } ?>

</body>
</html>