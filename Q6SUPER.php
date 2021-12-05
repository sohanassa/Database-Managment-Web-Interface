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
    <br>
    <a href="Q6SHOW_QUESTIONNAIRS.php">Show All Questionnaires</a><br>
    
    <br>
    <form action="Q6CREATE_QUESTIONNAIRES.php" method="get">
		Create a new Questionnaire</a><br>
		Title: <input type="text" name="title" value=""><br>
    <input type="submit" name="Query Q6CREATE">
	</form>

    <br>
    <form action="Q6EMOVE_QUESTION_FROM_QUESTIONNAIRE.php" method="get">
        Remove a Question from a questionnaire</a><br>
        Questionnaire ID: <input type="int" name="QuestionnaireRemove" value=""><br>
		Question ID: <input type="int" name="QuestionRemove" value=""><br>
    <input type="submit" name="Query Q6REMOVE_QUESTION">
	</form>

    <br>
    <form action="Q6COMPLETE_QUESTIONNAIRE.php" method="get">
        Complete a Questionnaire</a><br>
		Questionnaire ID: <input type="int" name="QuestionnaireComplete" value=""><br>
    <input type="submit" name="Query Q6COMPLETE_QUESTIONNAIR">
	</form>

    <br>
    <form action="Q6CREATE_CLONE.php" method="get">
        Create a clone from a Questionnaire</a><br>
		Questionnaire ID to be cloned: <input type="int" name="QuestionnaireCloneID" value=""><br>
    <input type="submit" name="Query Q6CREATE_CLONE">
	</form>

    <br>
    <form action="Q6ADD_QUESTION_TO_QUESTIONNAIRE.php" method="get">
        Add a Question to a Questionnaire</a><br>
		Questionnaire ID: <input type="int" name="QuestionnaireAddTo" value=""><br>
        Question ID: <input type="int" name="QuestionAddTo" value=""><br>
    <input type="submit" name="Query Q6ADD_QUESTION_TO_QUESTIONNAIRE">
	</form>

	<br>
    <form action="Q6SHOW_QUESTIONS_OF_QUESTIONNAIRE.php" method="get">
        Show Questions of a Questionnaire</a><br>
		Questionnaire ID: <input type="int" name="showQuestions" value=""><br>
    <input type="submit" name="Query Q6SHOW_QUESTIONS_OF_QUESTIONNAIRE">
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
