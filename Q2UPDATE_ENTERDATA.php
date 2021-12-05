<?php 
	session_start(); 
?>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
	
?>
<body>
	<table cellSpacing=0 cellPadding=5 width="100%" border=0>
	<tr>
		<td vAlign=top width=170><img height=91 alt=UCY src="images/ucy.jpg" width=94>
			<h5>
				<a href="http://www.ucy.ac.cy/">University of Cyprus</a><BR/>
				<a href="http://www.cs.ucy.ac.cy/">Dept. of Computer Science</a>
			</h5>
		</td>
		<td vAlign=center align=middle><h2></h2></td>
	</tr>
    </table>
	<hr>
    <form action="Q2UPDATE.php" method="get">
        Company Registration Number: <input type="int" name="updateRegN" value=""><br><br>
		Enter new data for the company and its DE user:<br></a><br>
        New Company Name: <input type="text" name="Cname" value=""><br>
        New Company Entry Date (mm/dd/yyyy): <input type="text" name="EntryDate" value=""><br>
		New DE Name: <input type="text" name="DEname" value=""><br>
        New DE Date of birth (mm/dd/yyyy): <input type="text" name="DEbirth" value=""><br>
        New DE Username: <input type="text" name="DEusername" value=""><br>
        New DE Password: <input type="text" name="DEpassword" value=""><br>
        New DE Sex (m or f): <input type="text" name="DEsex" value=""><br>
    <input type="submit" name="Query 3">
	</form>
	<hr>
	<?php
		if(isset($_POST['disconnect'])) { 
			echo "Logging out and redirecting to start page";
			session_unset();
			session_destroy();
			die('<meta http-equiv="refresh" content="2; url=index.php" />');
		} 
	?> 
	
	<form method="post"> 
		<input type="submit" name="disconnect" value="LOGOUT"/> 
	</form>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
