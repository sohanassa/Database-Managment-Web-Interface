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

</body>
</html>
