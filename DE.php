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
    <a href="Q3.php">Insert New Simple User</a><br>
    <a href="Q4SUPER.php">Manage Simple Users</a><br>
    <a href="Q5SUPER.php">Manage Questions</a><br>
    <a href="Q6SUPER.php">Manage Questionnaires</a><br>
	<a href="Q7.php">Query 7</a><br> 
	<a href="Q8.php">Query 8</a><br> 
	<a href="Q9.php">Query 9</a><br> 
	<a href="Q10.php">Query 10</a><br> 
	<a href="Q11.php">Query 11</a><br> 
	<a href="Q12.php">Query 12</a><br>
	<a href="Q13.php">Query 13</a><br> 
	<a href="Q14.php">Query 14</a><br> 
	<form action="Q15.php" method="get">
		Query 15</a><br>
		Parameter: <input type="int" name="number" value=0>
    <input type="submit" name="Query 15">
	</form>
	<a href="Q16.php">Query 16</a><br> 
	<a href="Q17.php">Query 17</a><br> 

	<hr>
	<?php
		if(isset($_POST['disconnect'])) { 
			echo "Clossing session and redirecting to start page"; 
			session_unset();
			session_destroy();
			die('<meta http-equiv="refresh" content="2; url=index.php" />');
		} 
	?> 
	
	<form method="post"> 
		<input type="submit" name="disconnect" value="Disconnect"/> 
	</form> 

</body>
</html>
