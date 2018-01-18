
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

  <link rel="stylesheet" href="{{ URL::asset('../css/normalize.css') }}" type="text/css">
  <!--  <bootstrap framworks> -->
   <link rel="stylesheet"  href="{{ URL::to('/assets/bootstrap/css/bootstrap.min.css') }}" >
  <!-- <link rel="stylesheet" type="text/css" href="css/materialpaper.css"> -->
  <!-- <custom stylings> -->
 <link href="{{ URL::asset('/assets/css/styles.css') }}" rel="stylesheet">
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
  
        <header>
         
        </header>
        <main>
          <div class="container wrapper">
          <div class="login-form">
              <div class="logo-div text-center">
                  <img src="../assets/img/heritage-bank-logo1.png" class="logo">
              </div>
              <form>
                  <div class="form-group">
                      <label for="email" class="label">Email Address</label><br>
                      <input type="email" class="form-control form-control-x" required/>
                  </div>
                  <div class="submit-div">
                      <button class="btn btn-primary"><a href="/dashboard">Login</button></a>
                  </div>
              </form>
          </div>
      </div>
        </main>
        <footer>
        
        </footer>
  
<script type="" src="assets/js/jqey.js"></script>

<script type="" src="assets/js/boots.js"></script>
</body>
</html>