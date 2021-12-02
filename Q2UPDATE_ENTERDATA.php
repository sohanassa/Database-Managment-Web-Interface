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
		<td vAlign=center align=middle><h2>Add new Company and its DE user</h2></td>
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

</body>
</html>
