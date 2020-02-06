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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
  </div>
</nav>

<main role="main" class="container">
  <div class="jumbotron">
    <h1>Salary Report</h1>
    <table class="table table-hover"id="userTbl">
						<?php
                          $con=mysqli_connect("localhost","root","","restaurant");
                          if(isset($_POST['get_total_report'])){
						    $query="SELECT * FROM salary";
                            $search_result=mysqli_query($con,$query);
                            }
                          if(isset($_POST['get_report'])){ 
                            $id = $_POST['id'];
                            $query="SELECT * FROM salary where emp_id='$id'";
                            $search_result=mysqli_query($con,$query); 
                          } 
						 ?>
						<tr>
							<th>Salary Id</th>
							<th>Employee Id</th>
                            <th>Account No</th>
                            <th>Amount</th>
							<th>Days on Leave</th>
							<th>OT Hours</th>
							<th>OT Rate</th>
						<tr>
						  <tbody>
								<?php while($row=mysqli_fetch_array($search_result)):?>
								<tr>
									<td><?php echo $row['s_id'];?></td>
									<td><?php echo $row['emp_id'];?></td>
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
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>
</html>
