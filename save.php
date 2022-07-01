<?php

$con=mysqli_connect('localhost','root','','travel');


$firstname=$_POST['fname'];
$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];
$city=$_POST['city'];
$phone=$_POST['phone'];


$sql="INSERT INTO `customer`(`id`,`fname`,`name`,`password`,`email`,`city`,`phone`) VALUES (0,'$firstname','$name','$password','$email','$city','$phone')";
$result = mysqli_query($con,$sql);		

if($result)
{
	if($firstname=="admin" && $password == "ad123"){
		header("location:admin.php");

	}
	else{
		header("location:index.php");
	}
}
else{
	$que = "SELECT `fname` FROM `customer` WHERE fname='$firstname'";
	$result = mysqli_query($con,$que);
	if($result){
		?>
		<script type="text/javascript">
			alert("username already taken")
		</script>
		<?php
	}
}

?>
