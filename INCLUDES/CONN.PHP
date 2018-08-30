 <?php
 $con=mysql_connect("localhost","root","");
 if(!$con)
 {
	 die('Error'.mysql_error());
 }
 mysql_select_db("optomate", $con);

 ?>