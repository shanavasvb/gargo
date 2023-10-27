<?php
$name=$_POST['name'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];
if (!empty($name) || !empty($gender) || !empty($phone) || !empty($address) || !empty($email) || !empty($password))
{
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "register";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
if (mysqli_connect_error()){
	die('Connect Error('.mysqli_connect_error().')'. mysqli_connect_error());

}
else{
	$SELECT = "SELECT email From register Where email = ? Limit 1";
	$INSERT ="INSERT Into register(name,gender,phone,address,email,password") values(?,?,?,?,?,?);
	$stmt = $conn->prepare($SELECT);
	$stmt->bind_param("s",$email);
	$stmt->execute();
	$stmt->bind_result($email);
	$stmt->store_result();
	$rnum =$stmt->num_rows;
if($rnum==0)
{
	$stmt->close();
	$stmt=$conn->prepare($INSERT);
	$stmt->bind_param("sssssi",$name,$gender,$phone,$address,$email,$password);
	$stmt->execute();
	echo "new record inserted sucessfully"
}else{
	echo "someone already registerd "
}
$stmt->close();
$conn->close();
}
}


else{
	echo "All fields are required";
	die();
}
?>