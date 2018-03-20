<?php
    include_once  "dbh.inc.php";


    $user = $_POST['user_id'];
    $first1 = $_POST['first'];
    $last1 = $_POST['last'];
    $email1 = $_POST['email'];
    $pwd1 = $_POST['pwd'];
//    $repeat_pwd = $_POST['psw-repeat'];
    $mobile = $_POST['mobile'];


    $command = "INSERT INTO authentication(username,password,first_name,last_name,mobile_no,email_id) VALUES('$user','$pwd1','$first1','$last1','$mobile','$email1');";
 //   mysqli_query($conn , $command);
    
    if ($conn->query($command) === TRUE) {
    header("Location: ../homepage2.php?login=success");
 //   echo "New record created successfully";
} else {
    header("Location: ../form.php?login=success");

//    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
/*	$user     = mysql_real_escape_string($user); 

    $value = "SELECT user_id FROM authentication  where username = '\"$user\"';";

    if ($conn->query($value) === TRUE) {
       echo "Query 2 executed";
	}
	 else {
    echo "Error:  hai yrrr kuch" . $sql . "<br>" . $conn->error;
} 
    
 /*   $value_result = mysqli_query($conn , $value);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0){
	echo "runned valued";
    	$rowvalue = mysqli_fetch_assoc($value_result))
    	 $command1 = "INSERT INTO profile(first_name ,last_name,mobile_no,email_id,user_id) VALUES('$first1','$last1','$mobile', ' $email1','$rowvalue');";
    
    if ($conn->query($command1) === TRUE) {
	    echo "Not working";
	}		
	 else {
    	echo "Error: not working yrrrrrr " . $sql . "<br>" . $conn->error;
		}
    }
    else
     echo "Could not pick value";
    
     
    
  //  $value = "SELECT user_id from authentication where username = $user;";



 /*   $value_result = mysqli_query($conn , $value);

    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck > 0)
    {
    echo "Working"; 
    }

    $command1 = "INSERT INTO profile(first_name ,last_name,mobile_no,email_id,user_id) VALUES('$first1','$last1','$mobile',  $email1','$value_result');";
    mysqli_query($conn , $command1);

//    header("Location: ../form.php?login=success");*/
