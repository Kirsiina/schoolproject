<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
</head>
<body>
<form method='POST'>
<h2>Please input your name:</h2>
<input type="text" name="name">
<input type="submit" value="Submit name">
</form>
<?php
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>
</body>
</html>