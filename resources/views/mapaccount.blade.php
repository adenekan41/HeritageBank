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
							<button class="btn btn-primary"> <a href="/permit"> Add User</a></button>
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
							<p class="text-left">Map Account</p>
							<table class="table table-hover">
								<thead>
		                            <tr>
		                                <td>Type</td>
		                                <td>Deposit Account</td>
		                                <td>Credit Account</td>
		                                <td>Currency</td>
		                                <td>Amount</td>
		                                <td>Narration</td>
		                                 <td>Ref</td>
		                                  <td>Inputer</td>
		                                   <td>Authorizer</td>
		                            </tr>
		                        </thead>
								<tbody>
									<tr>
										<td>Nip</td>
										<td>0001838374773</td>
										<td>00019990374773</td>
										<td>NGN</td>
										<td>50.00</td>
										<td>sn-dd/mm/yy-62627727 Inward NIP settlement</td>
										 <td>Vc/umbom/UTO/47774566</td>
										  <td>Admin</td>
										   <td>Admin</td>
									</tr>
									<tr>
										<td>Nip</td>
										<td>000166374773</td>
										<td>00019990374773</td>
										<td>NGN</td>
										<td>500.00</td>
										<td>sn-dd/mm/yy-62627727 Inward NIP settlement</td>
										 <td>Vc/umbom/UTO/47774566</td>
										  <td>Admin</td>
										   <td>Admin</td>
									</tr>
									<tr>
										<td>Nip</td>
										<td>00019990374773</td>
										<td>00019990374773</td>
										<td>NGN</td>
										<td>800.00</td>
										<td>sn-dd/mm/yy-62627727 Inward NIP settlement</td>
										 <td>Vc/umbom/UTO/47774566</td>
										  <td>Admin</td>
										   <td>Admin</td>
									</tr>
									<tr>
										<td>Nip</td>
										<td>00018990374773</td>
										<td>00019990374773</td>
										<td>NGN</td>
										<td>900.00</td>
										<td>sn-dd/mm/yy-62627727 Inward NIP settlement</td>
										 <td>Vc/umbom/UTO/47774566</td>
										  <td>Admin</td>
										   <td>Admin</td>
									</tr>
								</tbody>
							</table>
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