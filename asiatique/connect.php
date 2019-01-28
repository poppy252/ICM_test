<!-- connect.php -->
<?
	$conn =mysql_connect("localhost","root","12345678") or die("cannot connect DB Server ");
	mysql_select_db("comsci") or die("cannot selectDB");
?>
