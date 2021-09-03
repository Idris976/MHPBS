                     <!-- REGISTRATION 70% COMPLETED -->
  <!-- CURRENT DATABASE ARE (ID,USERNAME,PASSWORD,EMAIL,VKEY,VERIFIED,CREATEDATE-->
                         <!-- For FrontEnd Devs --> 
         <!-- 1. GUNA CODING AKU AND TEST DEKAT TEMPLATE KORANG UNTUK CHECK -->

                           <!-- GROUP REMARKS -->    
      <!-- 1. THERE'S FEW MORE DATA WE NEED TO ADD INTO CUSTOMER'S ACCOUNT LATER-->

                          <!-- FOR BackEnd Devs -->    
         <!-- 1. NEED TO ADD PHP CODE FOR EMAIL AND USERNAME AVAIBILITY INTO CODING-->
                   <!-- AKMAL LAST UPDATED ON 9/4/2021 5:30 AM-->


<?php
$error = NULL;

if(isset ($_POST['submit'])){
	
	//Get form data
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$email = $_POST['email'];
	
	if(strlen($username) < 5 ){
		$error = "Your username must be at least 5 Characters";	
	}elseif ($password2 != $password){
		$error = "Your password do not match";
	}else{
		//Form Is Valid 
		
		//Connect To Database
		$mysqli = new MySQLi('localhost','root','','MHPBS');
		
		//Sanitize 	form data
		$username = $mysqli->real_escape_string($username);
		$password = $mysqli->real_escape_string($password);
		$password2 = $mysqli->real_escape_string($password2);
		$email = $mysqli->real_escape_string($email);
		
		//Generate Vkey
		$vkey = md5(time().$username);

		
		//Insert account into database
		$password = md5 ($password);
		$insert = $mysqli->query("INSERT into users(username,password,email,vkey) VALUES ('$username','$password','$email','$vkey')");
		
		if($insert){
			
			//Send Email
			$to = $email;
			$subject = "Email Verification";
			$message = "<a href='http://localhost/MHPBS/verify.php?vkey=$vkey'>Register Account</a>";
			$headers = "From: muhdakmaru@gmail.com \r\n";	
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
			mail ($to,$subject,$message,$headers);
			
			header ('location:thankyou.php');
			
			
		}else{
			echo $mysqli->error;
		}
		
	} 
}

?>

<!doctype html>
<html>
<head>	
<meta charset="utf-8">
<title>Login Form Design</title>
	<link rel="icon" type="image/png" href="Pictures/Icon Logo/UTM-LOGO.png"/>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>     

	<div class="loginbox">
	<img src="Pictures/Login Customer/avatar.jpg" class="avatar">	
		<h1>Sign Up Here</h1>
	    <form method="POST" action = "">		
			<p>Username</p>
			<input id="text" type="text" name="username" placeholder="Enter Username" required>																		
			<p>Password</p>
			<input id="text" type="password" name="password" placeholder="Enter Password" required>
			<p>Repeat Password</p>
			<input id="text" type="password" name="password2" placeholder="Re-Enter Password" required>	
			<p>Email</p>
			<input id="text" type="text" name="email" placeholder="Enter Email" required>			
			<input id="button " type ="submit" name ="submit" value="Register">

		</form>
<?php
 echo $error;
?>
		
	</div>
	

</center>
</body>
</html>