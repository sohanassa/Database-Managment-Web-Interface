<?php
    session_start();
    if (isset($_POST['connect'])) {
		//echo "<br/>Setting session variables!<br/>";
		// collect value of input field
		$sqlDBname = 'snassa01';
		$sqlUser = 'snassa01';
		$sqlPass = 'wAA2UeZY';
	
		if (empty($sqlDBname)) echo "Database name is empty!<br/>";
		if (empty($sqlUser)) echo "Username is empty!<br/>";
		if (empty($sqlPass)) echo "Password name is empty!<br/>";

		if (!(empty($sqlDBname) || empty($sqlUser) || empty($sqlPass))) {
			// Set session variables
			$_SESSION["serverName"] = "mssql.cs.ucy.ac.cy";
			$_SESSION["connectionOptions"] = array(
				"Database" => $sqlDBname,
				"Uid" => $sqlUser,
				"PWD" => $sqlPass
			);
		} else {
			session_unset();
			session_destroy();
			echo "<br/>Cannot setup the session variables! Redirecting back in 5 seconds<br/>";
			die('<meta http-equiv="refresh" content="5; url=index.php" />');
		}
	}
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
    $message="";
    if(count($_POST)>0) {
        //Establishes the connection
	    $con = sqlsrv_connect($serverName, $connectionOptions);
        $result = sqlsrv_query($con,"SELECT * FROM Users U WHERE U.Username='" . $_POST["user_name"] . "' and U.Password = '". $_POST["password"]."'");
        $row  = sqlsrv_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["UserID"] = $row['UserID'];
        $_SESSION["RegN"] = $row['RegN'];
        $_SESSION["UserType"] = $row['UserType'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["UserID"])) {
		if($_SESSION["UserType"] == 'o')
        header("Location:DO.php");
		else if($_SESSION["UserType"] == 'e')
        header("Location:DE.php");
		else if($_SESSION["UserType"] == 'a')
        header("Location:AX.php");
    }
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>