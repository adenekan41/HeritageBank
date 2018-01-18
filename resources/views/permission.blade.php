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
				<section class="container-fluid">
					<!-- Repeated *container-fluid* for tweaking Purposes So dont freak out -->
					<!-- Repeated *container-fluid* for tweaking Purposes So dont freak out -->
					<!-- Repeated *container-fluid* for tweaking Purposes So dont freak out -->
					<div class="container-fluid">
						<div class="well usr-mang">
							<p class="f-w-200">User Management</p>
							<!-- <button class="btn btn-primary">Add User</button> -->
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
						<div class="well map-account">
							<p class="text-left">Update Account Profile</p>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="f-w-3">Employee ID</label>
										<input type="text" placeholder="46400727ER" class="form-control">
										<label for="" class="f-w-3">Email Address</label>
										<input type="email" placeholder="johndoe@gmail.com" class="form-control">
										<label for="" class="f-w-3">First Name</label>
										<input type="text" placeholder="John" class="form-control">
										<label for="" class="f-w-3">Department</label>
										<input type="text" placeholder="Account" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="f-w-3">UserName</label>
										<input type="text" placeholder="Smach112" class="form-control">
										<label for="" class="f-w-3">Job Title</label>
										<input type="text" placeholder="Developer" class="form-control">
										<label for="" class="f-w-3">Last Name</label>
										<input type="text" placeholder="Foster" class="form-control">
										<label for="" class="f-w-3">Role</label>
										<input type="text" placeholder="Admin" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="well permission" data-toggle="collapse" data-target="#permit">
							<p>Permission</p>
						</div>
						<div class="well permission-open collapse" id="permit">
							<span><input type="checkbox" name="" id="">All Rate</span>
							<span><input type="checkbox" name="" id="">Delete Settlement Record</span>
							<span><input type="checkbox" name="" id="">Edit Whitelisted Office Acc</span>
							<span><input type="checkbox" name="" id="">Export Rate To Excel</span>
							<span><input type="checkbox" name="" id="">Export Settlement to csv</span>
							<span><input type="checkbox" name="" id="">Initilize Settlement and recon..</span>
							<span><input type="checkbox" name="" id="">Map Accounts pending verification (3rd Party Aq)</span>
							<span><input type="checkbox" name="" id="">Map Accounts (3rd Party Aq)</span>
							<span><input type="checkbox" name="" id="">Settled Transaction View</span>
							<span><input type="checkbox" name="" id="">Map Accounts (3rd party)</span>
							<span><input type="checkbox" name="" id="">Upload Rate</span>
							<span><input type="checkbox" name="" id="">Settlement Search</span>
							<span><input type="checkbox" name="" id="">Upload Settlement</span>
						</div> -->
						<div class="permissions-box">
                                <div class="text-center">
                                    <img src="assets/img/arrow.svg" id="arrow" class="toggle-arrow" data-toggle="collapse" data-target="#checklist" onclick="hideMe()">
                                </div>
							<div id="checklist" class="collapse">
								<div class="form-group">
									<label for="check1">
										<input type="checkbox" id="check1"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i><span class="checkbox-label">All Rate</span>
									</label>
									<label for="check2">
										<input type="checkbox" id="check2"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Delete Settlement Record Pending Verification</span>
									</label>
									<label for="check3">
										<input type="checkbox" id="check3"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>    
										<input type="checkbox"><span class="checkbox-label">Edit Whitelisted Office Account</span>
									</label>
								</div>
								<div class="form-group">
									<label for="check4">
										<input type="checkbox" id="check4"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Export Rate to Excel</span>
									</label>
									<label for="check5">
										<input type="checkbox" id="check5"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Export Settlement to Excel</span>
									</label>
									<label for="check6">
										<input type="checkbox" id="check6"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Initialize Settlement and reconciliation</span>
									</label>
								</div>
								<div class="form-group">
									<label for="check7">
										<input type="checkbox" id="check7"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Map Accounts Pending Verification(Third Party Acquiring)</span>
									</label>
									<label for="check8">
										<input type="checkbox" id="check8"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Map Accounts(Third Party Acquiring)</span>
									</label>
								</div>
								<div class="form-group">
									<label for="check9">
										<input type="checkbox" id="check9"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Settled Transaction View</span>
									</label>
									<label for="check10">
										<input type="checkbox" id="check10"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Map Accounts(Third Party Acquiring)</span>
									</label>
									<label for="check11">
										<input type="checkbox" id="check11"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Upload Rate</span>
									</label>
								</div>
								<div class="form-group">
									<label for="check12">
										<input type="checkbox" id="check12"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Settlement Search</span>
									</label>
									<label for="check13">
										<input type="checkbox" id="check13"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Update Map Account(Third Party Acquiring)</span>
									</label>
									<label for="check14">
										<input type="checkbox" id="check14"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Upload Settlement</span>
									</label>
								</div>
								<div class="form-group">
									<label for="check15">
										<input type="checkbox" id="check15"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">View All Map Account(Third Party Acquiring)</span>
									</label>
									<label for="check17">
										<input type="checkbox" id="check17"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">View Rate History</span>
									</label>
								</div>
								<div class="form-group">
									<label for="check18">
										<input type="checkbox" id="check18"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">View Rate Pending Verification</span>
									</label>
									<label for="check19">
										<input type="checkbox" id="check19"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">View Settlement Pending Post</span>
									</label>
									<label for="check20">
										<input type="checkbox" id="check20"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">Whitelist Office Account</span>
									</label>
								</div>
								<div class="form-group">
									<label for="check21">
										<input type="checkbox" id="check21"><i class="fa fa-square-o check-icon"></i><i class="fa fa-check-square check-icon-x"></i>
										<input type="checkbox"><span class="checkbox-label">View Settlement Pending Verification</span>
									</label>
								</div>
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

<script type="" src="../assets/js/boots.js"></script>

</body>
</html>