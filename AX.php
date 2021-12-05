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
		<td vAlign=center align=middle><h2>Welcome to the EPL342 project test page</h2></td>
	</tr>
    </table>
	<hr>
    <a href="Q5SUPER.php">Q5 - Manage Questions</a><br><br>
    <a href="Q6SUPER.php">Q6 - Manage Questionnaires</a><br><br>
	<a href="Q7.php">Query 7</a><br> <br>
	<a href="Q8.php">Query 8</a><br> <br>
	<a href="Q9.php">Query 9</a><br> <br>
	<a href="Q10.php">Query 10</a><br> <br>
	<a href="Q11.php">Query 11</a><br> <br>
	<a href="Q12.php">Query 12</a><br><br>
	<a href="Q13.php">Query 13</a><br> <br>
	<form action="Q14.php" method="get">
		Query 14</a><br>
		Questionnaire ID:: <input type="int" name="Qnum" value="">
    <input type="submit" name="Query 14">
	</form>
	<form action="Q15.php" method="get">
		Query 15</a><br>
		How many to show "K"): <input type="int" name="number" value="">
    <input type="submit" name="Query 15">
	</form>
	<a href="Q16.php">Query 16</a><br> <br>
	<form action="Q17.php" method="get">
		Query 17</a><br>
		Questionnaire ID: <input type="int" name="Qnum" value="">
    <input type="submit" name="Query 17"> 
	</form>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
