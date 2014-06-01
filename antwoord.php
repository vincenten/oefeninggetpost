<!DOCTYPE html>
 <html>
 <head>
 	<title>Oefening post-get</title>
 </head>
 <body>

<table>

<?php 
if (isset($_POST["name"])) {
	?>	
<form method="post">
</table>
<?php 
echo "Naam (Post): " . htmlspecialchars_decode($_POST["name"])."<br/>";
echo "Gebuikersnaam (Post): " . htmlspecialchars_decode($_POST["username"])."<br/>";
echo "Wachtwoord (Post): " . htmlspecialchars_decode($_POST["password"])."<br/>";
?>

<form>
<?php } ?> 
<?php 
if (isset($_GET["nameget"])) {
	?>	
<form method="get">
</table>
<?php 
echo "Naam (Get): " . htmlspecialchars_decode($_GET["nameget"])."<br/>";
echo "Gebuikersnaam (Get): " . htmlspecialchars_decode($_GET["usernameget"])."<br/>";
echo "Wachtwoord (Get): " . htmlspecialchars_decode($_GET["passwordget"])."<br/>";
?>
<form>
<?php } ?> 
 </body>
 </html>