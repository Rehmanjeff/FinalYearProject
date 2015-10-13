<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Research and Academic Resource Management</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="css/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/assets/css/form-elements.css">
        <link rel="stylesheet" href="css/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="css/assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container">
                
            <?php include 'Related-Data/Admin/User/login.php';  ?>
            <?php include 'Related-Data/Researcher/login.php';  ?>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html"><strong>People Centered Technology</strong></a></h1>
				</div>
                <div class="form-group">
                <form action="" method="POST">
                    <div class="col-md-5" style="color: white; float:right">
                        <div class="row">
                            <div class="col-md-5">
                                <input type="text" placeholder="Email" name="email" class="form-control"/>
                            </div>
                            <div class="col-md-5">
                                <input type="password" name="password" placeholder="Password" class="form-control"/>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" name="login" class="btn btn-primary" value="Login"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <input type="checkbox" >Keep me logged in</input>
                            </div>
                            <div class="col-md-5">
                                <a href="">Forgot your Password?</a>
                            </div>
                        </div>
                    </div>
                </form>
            <div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text">
                            <style>
                                h1 { color: black;}
                            </style>
                            <h1><strong>People Centered Technology</strong> Registration Form</h1>
                            <div class="description">
                            	<p>
	                            	This is  a random text genereated for testing purpose, that how it would look on the page. Pretty well
                            	</p>
                            </div><!--
                            <div class="top-big-link">
                            	<a class="btn btn-link-1" href="#">Button 1</a>
                            	<a class="btn btn-link-2" href="#">Button 2</a>
                            </div>-->
                        </div>
                        <div class="col-sm-5 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Register</h3>
                            		<p>Fill in the form below & request for access:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="registration-form">
			                    	<div class="form-group">
			                        	<input type="text" name="form-first-name" placeholder="Full name..." class="form-first-name form-control" id="form-first-name">
			                        </div>
                                    
			                        <div class="form-group">
			                        	<input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
			
			                        </div>
                                    
			                        <div class="form-group">
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			
			                        </div>
                                    
			                        <div class="form-group">
			                        	<input type="password" name="form-password" placeholder="Re-enter Password..." class="form-email form-control" id="form-password">
			
			                        </div>
                                    <div class="form-group">
                                            <a data-toggle="tooltip" title="Why to Join PCT???" data-placement="left"><select class="form-control" name="type">
                                                <option>Why to Join PCT?</option>
                                                <option value="1">I Am a Teacher</option>
                                                <option value="2">I Am a Researcher</option>
                                                <option value="3">I Am a Both</option>
                                            </select></a> 
                                    
                                    </div>
                                        
                                    
			                        <button type="submit" class="btn">Give it to me!</button>
			                    </form>
                                <?php
                    if(isset($_POST["submit"])){
                        $link=  mysqli_connect('localhost', 'root', '', 'pctresearchgroup');
                        echo $sql="INSERT INTO request (date,name,email,password,type, response) VALUES ('".Date("Y/m/d")."','".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["type"]."','N')";
                        mysqli_query($link, $sql);
                        die("<script>alert('Your request has been sent, Please wait we'll get back to you..!)</script>");
                    }
                ?>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>