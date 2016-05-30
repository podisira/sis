

<?php

/*
***************************************************
*** Student Information System                   ***
***---------------------------------------------***
*** Developer: Dejene Techane                   ***
*** Title: Database Configuration               ***
***************************************************
*/

  
$dbserver="localhost";

//username of the MySQL server
$dbusername="root";

//password

//$dbpassword="nuwan";

//database name of two separate database
$db1="User";
$db2="StudentDb";


$conn1=mysql_connect($dbserver,$dbusername);
$conn2=mysql_connect($dbserver,$dbusername);
if(!$conn1){
	die("Could not selected Database Db1.".mysql_error());
}
else{
	mysql_select_db($db1,$conn1);
		//mysql_close($conn1);
}
if(!$conn2){
	die("Could not selected Database Db2.".mysql_error());
}
else{
	mysql_select_db($db2,$conn2);
	//mysql_close($conn2);
}


      	
      
?>
