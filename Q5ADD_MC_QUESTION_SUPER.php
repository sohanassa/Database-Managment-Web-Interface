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
    <form action="Q5ADD_MC_QUESTION.php" method="get">
		Add Multiple Choice Question</a><br>
        Name: <input type="text" name="name" value=""><br>
        Description: <input type="text" name="desc" value=""><br>
        Text: <input type="text" name="txt" value=""><br>
        Number of Right Answers: <input type="int" name="NOA" value=""><br>
    <input type="submit" name="Query Q5ADD_MC">
	</form>
	<br><br>
	<form action="Q5ADD_MC_ANSWER.php" method="get">
		Add Multiple Choice Answer</a><br>
		Question ID: <input type="int" name="QID" value=""><br>
        Text: <input type="text" name="txtt" value=""><br>
        Is it a correct Answer? (0 or 1) <input type="int" name="correct" value="0"><br>
    <input type="submit" name="Query Q5ADD_MC_ANSWER">
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
