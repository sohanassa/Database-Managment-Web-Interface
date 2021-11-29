<?php 
	session_start(); 
	// Get the DB connection info from the session
	if(isset($_SESSION["serverName"]) && isset($_SESSION["connectionOptions"])) { 
		$serverName = $_SESSION["serverName"];
		$connectionOptions = $_SESSION["connectionOptions"];
	} else {
		// Session is not correctly set! Redirecting to start page
		session_unset();
		session_destroy();
		echo "Session is not correctly set! Clossing session and redirecting to start page in 3 seconds<br/>";
		die('<meta http-equiv="refresh" content="3; url=index.php" />');
		//header('Location: index.php');
		//die();
	} 
?>

<html>
<head>
	<style>
		table th{background:grey}
		table tr:nth-child(odd){background:LightYellow}
		table tr:nth-child(even){background:LightGray}
	</style>
</head>
<body>
	<table cellSpacing=0 cellPadding=5 width="100%" border=0>
	<tr>
		<td vAlign=top width=170><img height=91 alt=UCY src="images/ucy.jpg" width=94>
			<h5>
				<a href="http://www.ucy.ac.cy/">University of Cyprus</a><BR/>
				<a href="http://www.cs.ucy.ac.cy/">Dept. of Computer Science</a>
			</h5>
		</td>
		<td vAlign=center align=middle><h2>Welcome to the EPL342 project test page</h2></td>
	</tr>
    </table>
	<hr>

	<?php
	$time_start = microtime(true);
	echo "Connecting to SQL server (" . $serverName . ")<br/>";
	echo "Database: " . $connectionOptions[Database] . ", SQL User: " . $connectionOptions[Uid] . "<br/>";
	//echo "Pass: " . $connectionOptions[PWD] . "<br/>";

	//Establishes the connection
	$conn = sqlsrv_connect($serverName, $connectionOptions);

	//Read Stored proc with param
	$tsql = "{call EmployeesFromCity(?)}";  
	echo "Executing query: " . $tsql . ") with parameter " . $_GET["city"] . "<br/>";

	// Getting parameter from the http call and setting it for the SQL call
	$params = array(  
					 array($_GET["city"], SQLSRV_PARAM_IN)
					);  

	$getResults= sqlsrv_query($conn, $tsql, $params);
	echo ("Results:<br/>");
	if ($getResults == FALSE)
		die(FormatErrors(sqlsrv_errors()));

	PrintResultSet($getResults);
	/* Free query  resources. */  
	sqlsrv_free_stmt($getResults);

	/* Free connection resources. */  
	sqlsrv_close( $conn); 

	$time_end = microtime(true);
	$execution_time = round((($time_end - $time_start)*1000),2);
	echo 'QueryTime: '.$execution_time.' ms';


	function PrintResultSet ($resultSet) {
		echo ("<table><tr >");
		
		foreach( sqlsrv_field_metadata($resultSet) as $fieldMetadata ) {
			echo ("<th>");
			echo $fieldMetadata["Name"];
			echo ("</th>");
		}
		echo ("</tr>");

		while ($row = sqlsrv_fetch_array($resultSet, SQLSRV_FETCH_ASSOC)) {
			echo ("<tr>");
			foreach($row as $col){
				echo ("<td>");
				echo (is_null($col) ? "Null" : $col);
				echo ("</td>");
			}
			echo ("</tr>");
		}
		echo ("</table>");
	}

	function FormatErrors( $errors ){
		/* Display errors. */
		echo "Error information: ";

		foreach ( $errors as $error )
		{
			echo "SQLSTATE: ".$error['SQLSTATE']."";
			echo "Code: ".$error['code']."";
			echo "Message: ".$error['message']."";
		}
	}

	?>

	<hr>
	<?php
		if(isset($_POST['disconnect'])) { 
			echo "Clossing session and redirecting to start page"; 
			session_unset();
			session_destroy();
			die('<meta http-equiv="refresh" content="1; url=index.php" />');
		} 
	?> 
	
	<form method="post"> 
		<input type="submit" name="disconnect" value="Disconnect"/> 
		<input type="submit" value="Menu" formaction="connect.php">
	</form> 

</body>
</html>
