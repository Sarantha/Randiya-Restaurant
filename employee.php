<?php session_start(); ?>
<?php
	if(!isset($_SESSION['username'])){
		header('Location: index.php');
	}
?>
<?php
$con=mysqli_connect("localhost","root","","restaurant");
$query="select * from employee where emp_id='".$_SESSION['username']."'";
$result = mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
    $name_emp = $row['emp_name'];
    $designation = $row['designation'];
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
    <div class="row">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="images/profile.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $name_emp; ?></h5>
                    <p class="card-text"><?php echo $designation; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-8">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="cursor:pointer;" onclick="document.getElementById('apply_leave').style.display='inline';document.getElementById('view_leaves').style.display='none';document.getElementById('view_salary').style.display='none';document.getElementById('emp_report').style.display='none';">Apply Leave</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="cursor:pointer;" onclick="document.getElementById('view_leaves').style.display='inline';document.getElementById('apply_leave').style.display='none';document.getElementById('view_salary').style.display='none';document.getElementById('emp_report').style.display='none';">Leave Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="cursor:pointer;" onclick="document.getElementById('view_salary').style.display='inline';document.getElementById('apply_leave').style.display='none';document.getElementById('view_leaves').style.display='none';document.getElementById('emp_report').style.display='none';">Salary Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="cursor:pointer;" onclick="document.getElementById('emp_report').style.display='inline';document.getElementById('apply_leave').style.display='none';document.getElementById('view_leaves').style.display='none';document.getElementById('view_salary').style.display='none';">Employee Report</a>
                        </li>
                    </div>
                </nav>

                <!----- Apply Leave ---->
                <div id="apply_leave">
                    <div class="card">
                        <div class="card-header">
                            Apply Leave
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                    <?php
                                        $con=mysqli_connect("localhost","root","","restaurant");
                                        if(isset($_POST['apply_leave'])){
                                            $name = $name_emp;
                                            $emp_id = $_SESSION['username'];
                                            $from = $_POST['from'];
                                            $to = $_POST['to'];
                                            $days= $_POST['days'];
                                            $reason = $_POST['reason'];
                                            
                                            $query = "INSERT INTO leave_table(emp_id,name,from_date,to_date,reason,days)values('$emp_id','$name','$from','$to','$reason','$days')";
                                            $result=mysqli_query($con,$query);
                                                if($result){
                                                    echo "<script>alert('Leave Applied')</script>";
                                                }else{
                                                    echo "<script>alert('Something went wrong')</script>";
                                                }	   
                                        }
                                    ?>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">From</label>
                                        <input type="date" class="form-control" id="inputEmail4" name="from">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">To</label>
                                        <input type="date" class="form-control" id="inputPassword4" name="to">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Days</label>
                                        <input type="number" class="form-control" id="inputPassword4" name="days">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Reason</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Reason" name="reason">
                                </div>
                                <button type="submit" class="btn btn-primary" name="apply_leave">Apply Leave</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!---------------------->

                <!-- View Leaves -->
                <div id="view_leaves" style="display:none;">
                    <table class="table table-hover"id="userTbl">
                            <?php
                            $con=mysqli_connect("localhost","root","","restaurant");
                            $query="SELECT * FROM leave_table where emp_id = '".$_SESSION['username']."' ";
                            $search_result=mysqli_query($con,$query); 
                            ?>
                            <tr>
                                <th>From</th>
                                <th>To</th>
                                <th>Days</th>
                                <th>Reason</th>
                                <th>Status</th>
                            <tr>
                            <tbody>
                                    <?php while($row=mysqli_fetch_array($search_result)):?>
                                    <tr>
                                        <td><?php echo $row['from_date'];?></td>
                                        <td><?php echo $row['to_date'];?></td>
                                        <td><?php echo $row['days'];?></td>
                                        <td><?php echo $row['reason'];?></td>
                                        <td><?php echo $row['status'];?></td>
                                    </tr>
                                    <?php endwhile;?>
                            </tbody>
                        </table>
                </div>
                <!----------------->

                <!-- View salary -->
                <div id="view_salary" style="display:none;">
                    <table class="table table-hover"id="userTbl">
                            <?php
                            $con=mysqli_connect("localhost","root","","restaurant");
                            $query="SELECT * FROM salary where emp_id = '".$_SESSION['username']."'";
                            $search_result=mysqli_query($con,$query); 
                            ?>
                            <tr>
                                <th>Account No</th>
                                <th>Amount</th>
                                <th>leave Days</th>
                                <th>OT_Hours</th>
                                <th>OT_Rate</th>
                            <tr>
                            <tbody>
                                    <?php while($row=mysqli_fetch_array($search_result)):?>
                                    <tr>
                                        <td><?php echo $row['bank_account'];?></td>
                                        <td><?php echo $row['amount'];?></td>
                                        <td><?php echo $row['leave_days'];?></td>
                                        <td><?php echo $row['ot_hours'];?></td>
                                        <td><?php echo $row['ot_pay'];?></td>
                                    </tr>
                                    <?php endwhile;?>
                            </tbody>
                        </table>
                </div>
                <!----------------->

                <!--- Employee Report -->
                <div id="emp_report" style="display:none;">
                    <?php
                        $con=mysqli_connect("localhost","root","","restaurant");
                        $query="SELECT * FROM employee where emp_id = '".$_SESSION['username']."'";
                        $search_result=mysqli_query($con,$query);            
                    ?>
                    <?php while($row=mysqli_fetch_array($search_result)):?>
                                        Name : <?php echo $row['emp_name']."<br>";?>
                                        Address: <?php echo $row['address']."<br>";?>
                                        Nic No: <?php echo $row['nic_no']."<br>";?>
                                        Phone No: <?php echo $row['phone_no']."<br>";?>
                    <?php endwhile;?>
                 </div>
                <!---------------------->
        </div>
    </div>
 </div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>
</html>
