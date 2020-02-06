<?php
session_start();
$con=mysqli_connect("localhost","root","","restaurant");
if(isset($_POST['login'])){
		$username=$_POST['username'];
        $password=$_POST['password'];
        
		$query = "SELECT * FROM user where username='$username' && password='$password'";
		$result = mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0){
			$query1  = "SELECT * from user";
			$result2 = mysqli_query($con,$query1);
			while($row=mysqli_fetch_array($result2)){
			if($row['username']==$username && $row['password']==$password && $row['user_role']=="admin"){
				$_SESSION['username'] = $row['emp_id'];
				header("location:admin.php");
			}
			else if($row['username']==$username && $row['password']==$password && $row['user_role']=="employee"){
				$_SESSION['username'] = $row['emp_id'];
				header("location:employee.php");
			}
		}
		}else{
			echo '<script>alert("Wrong Details")</script>';
			echo "<script>window.open('index.php','_self')</script>";
		}
}
?>
