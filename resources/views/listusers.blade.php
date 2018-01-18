<!DOCTYPE html>
<html lang="en">
<head>
	<title>Heritage Dashboard</title>
	<meta charset="UTF-8">
  <meta http-equiv="Content-Type" content="charset=utf-8" />
  <meta name="author" content="Heritage Bank" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="A Dashbord Comminit for Heritage BAnk">
  <meta name="keywords" content="bank,heritage bank, Dashboard" />
  <meta property="og:locale" content="en-US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Heritage Bank" />
  <meta property="og:site-name" content="Heritage Bank" />

  <link rel="stylesheet" href="../css/normalize.css" type="text/css">
  <!--  <bootstrap framworks> -->
   <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/materialpaper.css"> -->
  <!-- <custom stylings> -->
 <link href="../assets/css/styles.css" rel="stylesheet">
  <!-- <Custom Animations> -->
  <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	
</head>
<body>
	<!-- This Is the Header Here -->
	<!-- appended script by adenenakan wonderful -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				@include('sidebar')
			</div>
			<div class="col-md-10">
				<!-- Repeated *container-fluid* for tweaking Purposes So dont freak out -->
				<!-- Repeated *container-fluid* for tweaking Purposes So dont freak out -->
				<header>
				@include('navigation')
				</header>
				<section>
					<!-- Repeated *container-fluid* for tweaking Purposes So dont freak out -->
					<!-- Repeated *container-fluid* for tweaking Purposes So dont freak out -->
					<!-- Repeated *container-fluid* for tweaking Purposes So dont freak out -->
					<div class="container-fluid">
						<div class="well usr-mang">
							<p class="f-w-200">Delete User</p>
							<button class="btn btn-primary">Delete </button>
						</div>
					</div>
					
					<div class="container-fluid">
						<div class="well map-account list-user">
							<p class="text-left">List Users</p>
							<div class="row">
								<div class="col-md-5">
									<select name="" id="" class="form-control">
										<option value="">Full Name</option>
										<option value="">Id</option>
										<option value="">User Name</option>
									</select>
								</div>
								<div class="col-md-7">
									<input type="text" class="form-control" placeholder="Search For A Term Here">
								</div>
							</div>
							<table class="table table-hover">
								<thead>
		                            <tr>
		                                <td>User Name</td>
		                                <td>Full Name</td>
		                                <td>Email Address</td>
		                                <td>Action</td>
		                                
		                            </tr>
		                        </thead>
								<tbody>
									<tr>
										<td>Samrick12</td>
										<td>Sam Rick</td>
										<td>sma-rick42@gmail.com</td>
										<td><button class="btn btn-warning">Restore</button></td>
										
									</tr>
									<tr>
										<td>Samrick12</td>
										<td>Sam Rick</td>
										<td>sma-rick42@gmail.com</td>
										<td><button class="btn btn-warning">Restore</button></td>
										
									</tr>
									<tr>
										<td>Samrick12</td>
										<td>Sam Rick</td>
										<td>sma-rick42@gmail.com</td>
										<td><button class="btn btn-warning">Restore</button></td>
										
									</tr>
									<tr>
										<td>Samrick12</td>
										<td>Sam Rick</td>
										<td>sma-rick42@gmail.com</td>
										<td><button class="btn btn-warning">Restore</button></td>
										
									</tr>
								</tbody>
							</table>
							<div class="paginating text-right">
								<p>1 2 3 4 5 6 ... ></p>
							</div>
						</div>
					</div>
				</section>
				<footer>
					
				</footer>
			</div>
		</div>
	</div>

<script type="" src="../assets/js/jqey.js"></script>
<script src="../assets/js/amcharts.js" type="text/javascript"></script>
<script src="../assets/js/serial.js" type="text/javascript"></script>
<script type="" src="../assets/js/boots.js"></script>
<script src="../assets/js/barchart.js"></script>
</body>
</html>