<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	if (empty($name) || empty($email)){
		echo "Please include name and email";
		echo "<br>";
    	echo "<br>";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    	echo "Email is incorrectly formated";
    	echo "<br>";
    	echo "<br>";
    }else{
    	echo "All information validated";
    	echo "<br>";
    	echo "Name: ".$name;
    	echo "<br>";
    	echo "Email: ".$email;
    	echo "<br>";
    	echo "Phone: ".$phone;
    	echo "<br>";
    	echo "<br>";
    }


    $team1 = $_POST['team1'];
    $team2 = $_POST['team2'];
    $team3 = $_POST['team3'];
    $team4 = $_POST['team4'];
    $team5 = $_POST['team5'];
    $team6 = $_POST['team6'];

    if(!empty($team4)){
    	echo "Response is incorrect";
    }
    elseif((!empty($team1)) && (!empty($team2)) && (!empty($team3)) && (!empty($team5)) && (!empty($team6)) && (empty($team4))){
    	echo "Response is correct.";
    }
    /*
    elseif((!empty($team1)) || (!empty($team2)) || (!empty($team3)) || (!empty($team5)) || (!empty($team6))){
    	echo "Response is partially correct.";
    }
    */
    else{
    	echo "Response is partially correct.";
    }
?>
