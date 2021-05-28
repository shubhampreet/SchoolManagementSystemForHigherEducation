<?php
	require_once("public/connection.php");
	require_once("public/functions.php");
?>

<?php
    $date = date('d/m/Y');
    $year = date('Y');
?>


<!DOCTYPE html>
<html>
	<head>
<style>
body {
  background-image: url('img/eltr.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
		<title>School Management System</title>
		<!--Let browsers know website is optimized for mobile-->
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <!-- Font Awesome -->
	    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.css">
		<!--Import Google Icon Font-->
		<link rel="stylesheet" href="https://font.googleapis.com/icon?family=Material+Icons">
		<!--Import Materialize.css-->
		<link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css" media = "screen,projection"/>
		<link rel="shortcut icon" href="img/ic.png">
		
	</head>
	<body>
        <div class="navbar-fixe">
            <nav class="nav-extended">
                <div class="nav-wrapper teal darken-2">
                    <a href="index.html" class="brand-logo" style="margin-left: 20px; font-family: Regular 400; font-weight: bold; letter-spacing: 1px;">SCHOOL MANAGMENT SYSTEM</a>

                    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-chevron-circle-left" style="font-size: 30px;"></i></a>
                    
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        
                        <a class="waves-effect waves-light btn green lighten-5 teal-text" style="font-weight: bold; border-radius: 0;" href="login000/login.php">Login</a>
                        <!--<a class="waves-effect waves-light btn orange black-text " style="font-weight: bold;" href="create_account.html">Sign Up</a> -->
                    </ul>
                    
                    <ul class="side-nav teal" id="mobile-demo">
                       
           
                         <a class="waves-effect waves-light btn green lighten-5 teal-text" style="font-weight: bold; border-radius: 0;" href="login000/login.php">Login</a>
                    </ul>
                </div>
            </nav>
        </div>
		
		<main>
			<div>
				
                		
                		
                		<!--<p class="grey-text text-lighten-4" style="font-size: 12px;">Contracts for Difference ("CFDs") are leveraged products and carry a significant risk of loss to your capital, as prices may move rapidly against you and you may be required to make further payments to keep any trades open. These products are not suitable for all clients, therefore please ensure you fully understand the risks and seek independent advice.</p>-->
              		
          	
        	</div>
        
		
		<!-- /Start your project here-->

	    <!-- SCRIPTS -->
	    <!-- JQuery -->
	    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="assets/js/materialize.js"></script>
		<script>
			$(document).ready(function(){
		      $('.slider').slider();
			  $(".dropdown-button").dropdown();
			  $(".button-collapse").sideNav();
            
		    });
		</script>
		<script type="text/javascript" src="js/particles.min.js"></script>
	</body>
</html>