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
				<header>
				@include('navigation')
				</header>
				<section>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3">
								<div class="well dash-card">
									<div class="row">
										<div class="col-md-4">
											<img src="../assets/img/file.svg" alt="" class="img-responsive dash-card-img">
										</div>
										<div class="col-md-8 text-right">
											<h4 class="f-w-300">Record Left</h4>
											<p class="percentage-dash-card">0%</p>
											<small class="f-w-200 ">Nothing Pending for Settlement</small>

										</div>
									</div>
									<p class="dash-bar">Click Here To Intailize Settlement</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="well dash-card">
									<div class="row">
										<div class="col-md-4">
											<img src="../assets/img/filegreen.svg" alt="" class="img-responsive dash-card-img-green">
										</div>
										<div class="col-md-8 text-right">
											<h4 class="f-w-300">Record Left</h4>
											<p class="percentage-dash-card">50%</p>
											<small class="f-w-200">Nothing Pending for Settlement</small>
										</div>
									</div>
									<p class="dash-bar-green">Click Here To Intailize Settlement</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="well dash-card">
									<div class="row">
										<div class="col-md-4">
											<img src="../assets/img/avatar.svg" alt="" class="img-responsive dash-card-img-orange">
										</div>
										<div class="col-md-8 text-right">
											<h4 class="f-w-300">Record Left</h4>
											<p class="percentage-dash-card">44</p>
											<small class="f-w-200">Oustanding</small>
										</div>
									</div>
									<p class="dash-bar-orange">More Information</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="well dash-card">
									<div class="row">
										<div class="col-md-4">
											<img src="../assets/img/pie-chart.svg" alt="" class="img-responsive dash-card-img-pink">
											
										</div>
										<div class="col-md-8 text-right">
											<h4 class="f-w-300">Record Left</h4>
											<p class="percentage-dash-card">65</p>
											<small class="f-w-200">Positions</small>
										</div>
									</div>
									<p class="dash-bar-pink">More Information</p>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="well monthly-recap">
							<div class="row">
								<p class="f-w-200">Monthly Recap Report</p>
								<div class="monthly_forms">
									<div class="row">
										<div class="col-md-6">
											<input type="date" class="form-control">
										</div>
										<div class="col-md-6">
											<input type="date" class="form-control m-form-2">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-7">
								<div class="well chart">
									<div id="chartdiv" style="width: 100%; height: 350px;"></div>
								</div>
							</div>
							<div class="col-md-5">
								<div class="well goal">
									<div class="row">
										<p>Goals To Complete</p>
									</div>
									<div class="row">
										<div class="col-md-4">
											<h4>160/200</h4>
											<small>Add Product to Cart</small>
										</div>
										<div class="col-md-8">
											<div class="progress">
											  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
											  aria-valuemin="0" aria-valuemax="100" style="width:80%">
											    
											  </div>

											</div>
											 <small>+5% than Last Month</small>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<h4>310 / 400</h4>
											<small>Complete Purchase</small>
										</div>
										<div class="col-md-8">
											<div class="progress">
											  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
											  aria-valuemin="0" aria-valuemax="100" style="width:60%">
											    
											  </div>
											 
											</div>
											 <small>+5% than Last Month</small>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<h4>480 / 800</h4>
											<small>Complete Purchase</small>
										</div>
										<div class="col-md-8">
											<div class="progress">
											  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70"
											  aria-valuemin="0" aria-valuemax="100" style="width:50%">
											    
											  </div>
											  
											</div>
											<small>+5% than Last Month</small>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<h4>250 / 500</h4>
											<small>Send Inquiries</small>
										</div>
										<div class="col-md-8">
											<div class="progress">
											  <div class="progress-bar" role="progressbar" aria-valuenow="70"
											  aria-valuemin="0" aria-valuemax="100" style="width:60%">
											    
											  </div>
											  
											</div>
											<small>+5% than Last Month</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<footer>
					<div class="footer text-center">
						<div class="row">
							<div class="col-md-3">
								<h5 class="text-success">70%</h5>
								<h4>$30,000,000</h4>
								<p>Total Revenue</p>
							</div>
							<div class="col-md-3">
								<h5 class="text-danger">0%</h5>
								<h4>$20,000,000</h4>
								<p>Total Revenue</p>
							</div>
							<div class="col-md-3">
								<h5 class="text-success">70%</h5>
								<h4>$20,000,000</h4>
								<p>Total Revenue</p>
							</div>
							<div class="col-md-3">
								<h5 class="text-danger">0%</h5>
								<h4>$20,000,000</h4>
								<p>Total Revenue</p>
							</div>
						</div>
					</div>
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