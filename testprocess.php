<?php include ('conn.php'); ?>
<?php session_start(); ?>
<?php 


	//For first question, score will not be there.
	if(!isset($_SESSION['depressionscore'])){
		$_SESSION['depressionscore'] = 0;
	}
	if(!isset($_SESSION['anxietyscore'])){
		$_SESSION['anxietyscore'] = 0;
	}
	if(!isset($_SESSION['stressscore'])){
		$_SESSION['stressscore'] = 0;
	}
	 if($_POST){
	//We need total question in process file too
 	$query = "SELECT * FROM question";
	$total_questions = mysqli_num_rows(mysqli_query($conn,$query));
	
	//We need to capture the question number from where form was submitted
 	$number = $_POST['number'];
	$choicesId = $_POST['choice'];
	
	//Here we are storing the selected option by user
 	$selected_choice = $_POST['choice'];
	
	//What will be the next question number
 	$next = $number+1;


	 $query = "SELECT * FROM choices WHERE choicesId =$choicesId";
	 $result = mysqli_query($conn,$query);
	 $row = mysqli_fetch_assoc($result);
	 $points = $row['points'];

	 $query = "SELECT * FROM question WHERE questionNumber =$number";
	 $result = mysqli_query($conn,$query);
	 $row = mysqli_fetch_assoc($result);
	 $selected_category = $row['questionCategory'];

	if($selected_category == 'stress'){
		$_SESSION['stressscore']= $_SESSION['stressscore']+$points;
	}
	elseif ($selected_category == 'anxiety'){
		$_SESSION['anxietyscore']=$_SESSION['anxietyscore']+$points ;

	}
	elseif ($selected_category == 'depression'){
		$_SESSION['depressionscore']=$_SESSION['depressionscore']+$points ;

	}


		//Redirect to next question or final score page. 
 	 if($number == $total_questions){
 	 	header("LOCATION: result.php");
 	 }else{
 	 	header("LOCATION: dasstest.php?n=". $next);
 	 }

 }



?>