<html>
<body>
<form action=<?php echo $_SERVER['PHP_SELF']?> method= REQUEST>
name:<input type="text" name="name"><br>
e-mail:<input type="text" name="email"><br>
<input type="submit" name="submit">
</form>
</body>
</html>
<?PHP
if(isset($_REQUEST['sumbit']))
{
	echo$_REQUEST['name'];
	echo$_REQUEST['email'];

}
?>

