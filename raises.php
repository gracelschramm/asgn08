<<<<<<< HEAD
<!DOCTYPE html>
<!--	Author: Grace Schramm
		Date:	11/01/2020
		File:	raises.php
		Purpose:MySQL Exercise
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php

include_once('../asgn08/database/connection.php');

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
  
$userQuery = "SELECT empID, hourlyWage FROM personnel WHERE hourlyWage < '10.00'"; // ADD THE QUERY

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>LIST OF EMPLOYEES WHO NEED A RAISE</h1>");

	while($row = mysqli_fetch_assoc($result))
  {
    print ("Employee ".$row['empID']. " needs a raise! ") ;
  }// ADD CODE HERE

}

mysqli_close($connect);   // close the connection
 
?>

</body>
</html>
=======
<!DOCTYPE html>
<!--	Author: Grace Schramm
		Date:	11/01/2020
		File:	raises.php
		Purpose:MySQL Exercise
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php

include_once('../asgn08/database/connection.php');

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
  
$userQuery = "SELECT empID, hourlyWage FROM personnel WHERE hourlyWage < '10.00'"; // ADD THE QUERY

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>LIST OF EMPLOYEES WHO NEED A RAISE</h1>");

	while($row = mysqli_fetch_assoc($result))
  {
    print ("Employee ".$row['empID']. " needs a raise! ") ;
  }// ADD CODE HERE

}

mysqli_close($connect);   // close the connection
 
?>

</body>
</html>
>>>>>>> 7570ceec0d0933fb3ccb543103778cd4b7e98cbc
