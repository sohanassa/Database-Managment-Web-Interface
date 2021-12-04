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
		<td vAlign=center align=middle><h2></h2></td>
	</tr>
    </table>
	<hr>
    <form action="Q4UPDATE.php" method="get">
		Enter new data for the Simple user</a><br>
        ID of user to be edited: <input type="int" name="AXID" value=""><br>
		New Name: <input type="text" name="AXname" value=""><br>
        New Date of birth (mm/dd/yyyy): <input type="text" name="AXbirth" value=""><br>
        New Username: <input type="text" name="AXusername" value=""><br>
        New Password: <input type="text" name="AXpassword" value=""><br>
        New Sex (m or f): <input type="text" name="AXsex" value=""><br>
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

</body>
</html>
