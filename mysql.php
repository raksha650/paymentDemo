<?php 
	session_start();
if(isset($_POST["signup"])){
	$servername="premium115";
	    $username="perfjdkt_root";
	    $password='jeevan@2020';
	    $dbname="perfjdkt_jeevan";
	
	$name=$_POST["name"];
	$mobileno=$_POST["mobileno"];
	$password=$_POST["password"];
	$pincode=$_POST["pincode"];
	$language=$_POST["language"];

	$checkQry="select * from user where password='".$password."' and mobileno='".$mobileno."' ";
	$conn=mysqli_connect($servername,$username,'jeevan@2020',$dbname);
	/*if($conn){
		echo "db connected";
	}*/
	$rest=mysqli_query($conn,$checkQry);
	$n=mysqli_num_rows($rest);
	if($n>0){
		echo "<script>alert('user already exist');location.href='index.php';</script>";
	}
	else{
		$createUser="insert into user (name,mobileno,password,pincode,language) values('".$name."','".$mobileno."','".$password."','".$pincode."','".$language."')";
		// echo $createUser;
		$rs=mysqli_query($conn,$createUser);
		if($rs){
			$_SESSION["password"]=$password;
			$_SESSION["mobileno"]=$mobileno;
			// echo $_SESSION["password"]." ".$_SESSION["mobileno"];
			echo "<script>location.href='index.php';</script>";
		}
		else{
			echo "<script>alert('something went wrong');location.href='index.php';</script>";	
		}
		
	}
}



if(isset($_POST["login"])){
	
		$servername="premium115";
	    $username="perfjdkt_root";
	    $password='jeevan@2020';
	    $dbname="perfjdkt_jeevan";


	$mobileno=$_POST["mobileno"];
	$password=$_POST["password"];
    $conn=mysqli_connect($servername,$username,'jeevan@2020',$dbname);
// 	$conn=mysqli_connect($servername,$username,'',$dbname);
	$checkQry="select * from user where password='".$password."' and mobileno='".$mobileno."' ";
	// echo $checkQry;
	$rest=mysqli_query($conn,$checkQry);
	$n=mysqli_num_rows($rest);
	if($n==1){
		// echo "user exist";
		$_SESSION["mobileno"]=$mobileno;
		$_SESSION["password"]=$password;
		echo "<script>location.href='index.php';</script>";
	}
	else{
		echo "<script>alert('invalid user');
		location.href='index.php';</script>";	
	}
}



	if(isset($_POST["logout"])){
		$servername="premium115";
	    $username="perfjdkt_root";
	    $password='jeevan@2020';
	    $dbname="perfjdkt_jeevan";

		session_destroy();
		echo "<script>location.href='index.php';</script>";

	}




 ?>