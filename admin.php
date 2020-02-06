<?php session_start(); ?>
<?php
	if(!isset($_SESSION['username'])){
		header('Location: index.php');
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>RANDIYA RESTAURANT – AKURESSA </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">RANDIYA RESTAURANT – AKURESSA </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
  </div>
</nav>

<main role="main" class="container">
  <div class="jumbotron">
    <h1>Admin</h1>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" style="cursor:pointer;" onclick="document.getElementById('add_employee').style.display='inline';document.getElementById('view_employee').style.display='none';document.getElementById('remove_employee').style.display='none';document.getElementById('leave_requests').style.display='none';document.getElementById('welcome').style.display='none';">Add Employee</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="cursor:pointer;" onclick="document.getElementById('view_employee').style.display='inline';document.getElementById('add_employee').style.display='none';document.getElementById('remove_employee').style.display='none';document.getElementById('leave_requests').style.display='none';document.getElementById('welcome').style.display='none';">View Employees</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="cursor:pointer;" onclick="document.getElementById('remove_employee').style.display='inline';document.getElementById('view_employee').style.display='none';document.getElementById('add_employee').style.display='none';document.getElementById('leave_requests').style.display='none';document.getElementById('welcome').style.display='none';">Remove Employees</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="cursor:pointer;" onclick="document.getElementById('leave_requests').style.display='inline';document.getElementById('view_employee').style.display='none';document.getElementById('add_employee').style.display='none';document.getElementById('remove_employee').style.display='none';document.getElementById('welcome').style.display='none';">Leave Requests</a>
            </li>
        </div>
    </nav>
    <!----------------------------------------------------------------------------------------->
    <!--- Welcome devision -->
    <div id="welcome">
        <h3 style="text-align:center; margin-top:40px;">Welcome to the admin page</h3>
    </div>
    <!----End of Welcome------------------->

    <!---- Add Employee division -->
    <div id="add_employee" style="display:none;">
        <div class="card">
            <div class="card-header">
                Add Employee
            </div>
            <div class="card-body">
            <form method="POST" action="">
                <?php
                    $con=mysqli_connect("localhost","root","","restaurant");
                    if(isset($_POST['register'])){
                        $name = $_POST['name'];
                        $nic = $_POST['nic'];
                        $phone = $_POST['phone'];
                        $address = $_POST['address'];
                        $age= $_POST['age'];
                        $designation = $_POST['designation'];
                        $username= $_POST['username'];
                        $password = $_POST['password'];
                        $user_role = "employee";

                        $query = "INSERT INTO employee(emp_name,address,nic_no,age,phone_no,designation)values('$name','$address','$nic','$age','$phone','$designation')";
                        $result=mysqli_query($con,$query);
                            if($result){
                                $query2 ="INSERT INTO user(username,password,user_role)values('$username','$password','$user_role')";
                                $result2=mysqli_query($con,$query2);
                                if($result2){
                                    echo "<script>alert('Employee registered')</script>";
                                }else{
                                    echo "<script>alert('Employee Not registered')</script>";
                                }
                            }else{
                                echo "<script>alert('Something went wrong')</script>";
                            }	   
                    }
                ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Employee Name</label>
                    <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Employee Name">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Nic Number</label>
                    <input type="text" class="form-control" id="inputPassword4" name="nic" placeholder="Nic Number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Employee username</label>
                    <input type="text" class="form-control" id="inputEmail4" name="username" placeholder="Employee username">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Employee password</label>
                    <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Employee Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Address" name="address">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Age</label>
                    <input type="number" class="form-control" id="inputCity" name="age" placeholder="Age">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputAddress">Phone</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Phone number" name="phone">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputZip">Designation</label>
                    <input type="text" class="form-control" id="inputZip" name="designation" placeholder="Designation">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="register">Register</button>
            </form>
            </div>
        </div>
    </div>
    <!---------End of add employee-------------->

    <!-- View All Appointments---------------------------------------------->
    <div id="view_employee" style="display:none;margin-top:30px;">
					<table class="table table-hover"id="userTbl">
						<?php
						  $con=mysqli_connect("localhost","root","","restaurant");
						  $query="SELECT * FROM employee";
						  $search_result=mysqli_query($con,$query); 
						 ?>
						<tr>
							<th>Name</th>
							<th>address</th>
							<th>NIC No</th>
							<th>Age</th>
							<th>Telephone</th>
							<th>Designation</th>
						<tr>
						  <tbody>
								<?php while($row=mysqli_fetch_array($search_result)):?>
								<tr>
									<td><?php echo $row['emp_name'];?></td>
									<td><?php echo $row['address'];?></td>
									<td><?php echo $row['nic_no'];?></td>
									<td><?php echo $row['age'];?></td>
									<td><?php echo $row['phone_no'];?></td>
									<td><?php echo $row['designation'];?></td>
								</tr>
								<?php endwhile;?>
						  </tbody>
					</table>
				  </div>
				  
    <!-- End of View All Appointments---------------------------------------------->
    
    <!-- Remove Employee --->
    <div id="remove_employee" style="display:none;">
        <div class="card">
            <div class="card-header">
                Remove Employee
            </div>
            <div class="card-body">
                <form class="form-inline" method="POST">
                    <?php
						$con=mysqli_connect("localhost","root","","restaurant");
						if(isset($_POST['rem_emp'])){
							$nic = $_POST['nic_no'];
							$query = "DELETE FROM employee WHERE nic_no='$nic'";
							$result = mysqli_query($con,$query);
							if($result){
								/*$query2 = "DELETE FROM login WHERE id='$nic'";
								$result2 = mysqli_query($con,$query2);
								if($result2){
									echo"<script>alert('Successfull')</script>";
								}else{
									echo"<script>alert('Fail')</script>";
                                }*/
                                echo"<script>alert('Employee Removed')</script>";	
							}else{
								echo"<script>alert('Something Wrong')</script>";
							}	
						}	
					?>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="inputPassword2" class="sr-only">Employee Nic Number</label>
                        <input type="text" class="form-control" id="inputPassword2" placeholder="Employee Nic Number" name="nic_no">
                    </div>
                    <button type="submit" class="btn btn-danger mb-2" name="rem_emp">Remove</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end of Remove Employee --->

    <!-- Leave Requests ---->
    <div id="leave_requests" style="display:none;">
        <div class="card">
        <div class="card-header">
            Employee Leave Requests
        </div>
        <?php
			$con=mysqli_connect("localhost","root","","restaurant");
			$query="SELECT * FROM leave_table WHERE status='pending'";
			$search_result=mysqli_query($con,$query); 
        ?>
        
        <?php while($row=mysqli_fetch_array($search_result)):?>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <form method="POST" action="">
                        <?php
								$con=mysqli_connect("localhost","root","","restaurant");
								if(isset($_POST['confirm'])){
                                    /*$name = $_POST['name'];
                                    $days = $_POST['days'];
                                    $from = $_POST['from'];
                                    $to = $_POST['to'];
                                    $reason = $_POST['reason'];*/
                                    $state = $_POST['state'];
                                    $id = $row['emp_id'];
									$query3 = "UPDATE leave_table SET status='$state' WHERE emp_id ='$id'";
									$result3 = mysqli_query($con,$query3);
									if($result3){
                                        echo "<script>alert('Done')</script>";
                                        echo "<script>window.open('admin.php','_self')</script>";
									}else{
										echo "<script>alert('Error')</script>";
									}	
								}
						?>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Employee Name</label>
                            <input type="text" class="form-control" id="inputEmail4" value="<?php echo $row['name'];?>" disabled name="name">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">No of Days</label>
                            <input type="text" class="form-control" id="inputPassword4" value="<?php echo $row['days'];?>" disabled name="days">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">From</label>
                            <input type="text" class="form-control" id="inputEmail4" value="<?php echo $row['from_date'];?>" disabled name="from">
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">To</label>
                            <input type="text" class="form-control" id="inputPassword4" value="<?php echo $row['to_date'];?>" disabled name="to">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Reason for leave</label>
                            <input type="text" class="form-control" id="inputAddress" value="<?php echo $row['reason'];?>" disabled name="reason">
                        </div>
                        <div class="form-group col-md-12">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control" name="state" required>
                            <option hidden >Select Action</option>
                            <option value="approve">Approve</option>
                            <option value="reject">Reject</option>
                        </select>
                        </div>
                        <button type="submit" class="btn btn-danger mb-2" name="confirm">Confirm</button>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <?php endwhile;?>
        </div>
    </div>
    <!-- End of Leave Requests ---->
  </div>

  <!----------- Salary Division ------->
  <div id="employee_salary">
        <div class="card">
            <div class="card-header">
                Manage Employee Salary 
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Get Salary Report
                </button>

                                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Get Salary Report</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                                <div class="modal-body">
                                    <form class="form-inline" method="POST" action="salaryreport.php">
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label for="inputPassword2" class="sr-only">Employee id</label>
                                            <input type="text" class="form-control" id="inputPassword2" placeholder="Employee id" name="id">
                                        </div>
                                        <button type="submit" class="btn btn-danger mb-2" name="get_report">Get Salary Report</button><br>
                                        <button type="submit" class="btn btn-success mb-2" name="get_total_report" style="width:100%">Total Salary Report</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
            </div>
            <div class="card-body">
            <form method="POST" action="">
                <?php
                        $con=mysqli_connect("localhost","root","","restaurant");
                        if(isset($_POST['enter_sal'])){
                            $id = $_POST['id'];
                            $nic = $_POST['nic'];
                            $bank_no = $_POST['bank_acc'];
                            $leave_days = $_POST['days'];
                            $base_sal= $_POST['base_sal'];
                            $ot_hours = $_POST['ot_hours'];
                            $ot_rate = $_POST['ot_rate'];
                            $loan_deduction = $_POST['ot_rate'];
                            $leave_deduction = $_POST['leave_deduction'];
                            $festival_deduction = $_POST['festival_deduction'];
                            $total_leave_deduction = $leave_deduction * $leave_days;
                            $total_salary = ($base_sal + ($ot_hours * $ot_rate)) - ($loan_deduction + $total_leave_deduction + $festival_deduction);
                            
                            
                            $query = "INSERT INTO salary(emp_id,bank_account,amount,leave_days,ot_hours,ot_pay)values('$id','$bank_no','$total_salary','$leave_days','$ot_hours','$ot_rate')";
                            $result=mysqli_query($con,$query);
                                if($result){
                                    echo "<script>alert('Salary entered')</script>";
                                }else{
                                    echo "<script>alert('Something went wrong')</script>";
                                }
                                  
                        }
                ?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Employee ID</label>
                        <input type="text" class="form-control" id="inputEmail4" name="id" placeholder="Employee ID" requied>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Nic Number</label>
                        <input type="text" class="form-control" id="inputPassword4" name="nic" placeholder="Nic Number" requied>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputCity">Bank Account Number</label>
                    <input type="number" class="form-control" id="inputCity" name="bank_acc" placeholder="Bank Account Number" requied>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputCity">Days on leave</label>
                    <input type="number" class="form-control" id="inputCity" name="days" placeholder="Days on leave">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Base Salary</label>
                    <input type="number" class="form-control" id="inputCity" name="base_sal" placeholder="Base Salary" requied>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputCity">OT hours</label>
                    <input type="number" class="form-control" id="inputCity" name="ot_hours" placeholder="OT Hours worked">
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputCity">OT Rate</label>
                    <input type="number" class="form-control" id="inputCity" name="ot_rate" placeholder="OT Rate">
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        Salary Deductions (If any)
                    </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                <label for="inputCity">Loan Deduction</label>
                                <input type="number" class="form-control" id="inputCity" name="loan_deduction" placeholder="Loan Deduction" value=0>
                                </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Leave Deduction (per day)</label>
                                <input type="number" class="form-control" id="inputCity" name="leave_deduction" placeholder="Leave Deduction" value=0>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Festival Advance Deduction</label>
                                <input type="number" class="form-control" id="inputCity" name="festival_deduction" placeholder="Festival Advance Deduction" value=0>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="enter_sal">Enter Salary</button>
            </form>
            </div>
        </div>
    </div> 
    
    
  <!-----------Salary division ends here------------------------>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>
</html>
