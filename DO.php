<?php 
	session_start(); 
?>
<html>
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
		<td vAlign=center align=middle><h2>Welcome to the EPL342 project test page</h2></td>
	</tr>
    </table>
	<hr>
	<a href="Q1SUPER.php">Q1 - Add new company and DE user</a><br><br>
    <a href="Q2SUPER.php">Q2 - View/Edit company and its DE user</a><br>

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

</body>
</html>
