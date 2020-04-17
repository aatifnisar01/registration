<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<form>
		Name <input type="text"  value="name">

Email <input type="text" value="email">
Contact <input type="number"  value="contact">
DOB <input type="number"  value="dob">
Pincode <input type="text"  value="pincode">
	</form>
	<?php
	//Created databse manually
	$conn=mysqli("localhost","root","","login");
	?>
	<?php
	if($>SERVER['REQUEST_METHOD']=="POST")
	{
	$name1=$_POST["username"];
	$contact1=$_POST["contact"];
	$email1=$_POST["email"];
	$dob1=$_POST["dob"];
	$pincode1=$_POST["pincode"];
	  
	  //verify email
	  if(filter_var($email1,FILTER_VALIDATE_EMAIL)==true)
	{
	 $query="insert into table_name("email").values('$email1')";
	    $res=mysqli_query($conn,$query)
		if($res)
		echo "valid email";
	  }
	  else 
	  echo "invalid";
	
	}
	//verify name
	if (preg_match("/^[a-zA-Z'. -]+$/", $name1))
	{
	$query="insert into table_name("name").values('$name1')";
	    $res=mysqli_query($conn,$query)
		if($res)
		echo "valid name";
	  }
	  else 
	  echo "invalid";
	
	}
	//verify contact
	if(preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $contact1))
	{
	$query="insert into table_name("contact").values('$contact1')";
	    $res=mysqli_query($conn,$query)
		if($res)
		echo "valid contact";
	  }
	  else 
	  echo "invalid";
	
	}
	
	
	?>

</body>
</html>