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
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
        
          <script type="text/javascript">
  //login page           
             $(document).ready(function(){
                 $('#loginEmail').keyup(function(e){
                     $('#loginEmailSpan').html(validateEmail($('#loginEmail').val()));
                 });
                  $('#Login').click(function (e) {
                    var email = $('#loginEmail').val();
                    // Checking Empty Fields
                    if ($.trim(email).length == 0 || $("#loginPassword").val() == "") {
                         alert('Both fields require!');
                         e.preventDefault();
                    }
                    //alert("plesae");
                    if (validateEmail(email)) {
                        //alert("hi");
                        $('#loginEmailSpan').removeClass();
                        $('#loginEmailSpan').addClass('Valid');
                        return 'valid';
                     //return true;
                    }
                    else {
                        //alert('Invalid Email Address');
                        $('#loginEmailSpan').removeClass();
                        $('#loginEmailSpan').addClass('Invalid');
                        return 'Invalid Email Address';
                        e.preventDefault();
                    }
                });
                
                function validateEmail(pEmail) {
                var filterValue = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                if (filterValue.test(pEmail)) {
                    //alert("first if");
                    if (pEmail.indexOf('@uol.edu.pk', pEmail.length - '@uol.edu.pk'.length) != -1)
                    {
                       // alert("2nd if");
                        $('#loginEmailSpan').removeClass();
                        $('#loginEmailSpan').addClass('Perfect');
                        return 'Just Perfect!';
                    }
                    else 
                    {
                        //alert("like(Name@uol.edu.pk)");
                        $('#loginEmailSpan').removeClass();
                        $('#loginEmailSpan').addClass('Email Must be like(yourName@uol.edu.pk)');
                        return 'like(Name@uol.edu.pk)';
                    }
                }
                else
                {
                    return false;
                }
            }
            });
//login page ended


            // User name TExt Box Start
            $(document).ready(function() {
                $('#form-first-name').keyup(function() {
                    $('#result').html(isValid($('#form-first-name').val()));
                });
                //confirm password calling
                $('#Password1').keypress(function() {
                    $('#ConformPasswordSpan').html(matchPassword($('#Password1').val()));
                });
            });
             // isvalid Function for User name
            function isValid(firstName)
                {
                   // alert("Hiiiii");
                    var validity = 0;
                    var data = $('#form-first-name').val();
                    var  tmpRes=data.replace(/[^A-Za-z]/g, '');
                    $('#form-first-name').val(tmpRes);

                    if (firstName.match(/([!,%,&,@,#,$,^,*,?,_,~])/) || firstName.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/))
                    {
                        $('#Lable1').text('Special characters are not allowed');
                    }
                    if (firstName.match(/([0-9])/))
                    {
                        $('#Lable1').text('User Name cannot be blank');
                    }
                }
            // User name ended
            
           //Password validation
            $(document).ready(function () {
                //Password validation fuction calling
                $('#form-password').keyup(function() {
                    $('#PassworsSpan').html(checkStrenght($('#form-password').val()));
                    $('#ConformPasswordSpan').html(matchPassword($('#Password1').val()));
                });
            });
                function checkStrenght(password) {
                    var strenght = 0;
                    var data = $('#form-password').val();
                    var  tmpRes=data.replace(/[^A-Za-z0-9]/g, '');
                    $('#form-password').val(tmpRes); 
                    
                    if (password.length < 4) {
                        $('#PassworsSpan').removeClass();
                        $('#PasswordSpan').addClass('short');
                        return 'Too Short';
                    }

                    if (password.length > 6) {
                        strenght = strenght + 1;
                    }

                    if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/) && password.match(/(.*[!,%,&,@,#,$,^,*,?,_,~].*[!,%,&,@,#,$,^,*,?,_,~])/)) {
                        //alert('Special characters are not allowed');
                        $('#PassworsSpan').removeClass();
                        $('#PassworsSpan').addClass('Special charaters are not Allowed');
                        return 'Special charaters are not Allowed';
                    }

                    if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
                        strenght = strenght + 1;
                    }

                    if (password.match(/([a-zA-Z])/) && password.match(/([0-9])/)) {
                        strenght = strenght + 1;
                    }

                    if (strenght < 2) {
                        $('#PassworsSpan').removeClass();
                        $('#PassworsSpan').addClass('waek');
                        $('#PasswordSpan').css("color","red");
                        return 'Weak';
                    } else if (strenght == 2) {
                        $('#PassworsSpan').removeClass();
                        $('#PassworsSpan').addClass('good');
                        $('#PasswordSpan').css("color","green");
                        return 'Good';
                    } else {
                        $('#PassworsSpan').removeClass();
                        $('#PassworsSpan').addClass('strong');
                        return 'Strong';
                    }
                }

                //Check if password match with confirm password
                function matchPassword() {
                    if ($('#form-password').val() == $('#Password1').val()) {
                        $('#ConformPasswordSpan').removeClass();
                        $('#ConformPasswordSpan').addClass('PasswordMatch!');
                        return 'Password Match!';
                    }
                    else
                    {
                        $('#ConformPasswordSpan').removeClass();
                        $('#ConformPasswordSpan').addClass('NotMatch!');
                        return 'Password Not Match!';
                    }
                }


            //end of password validation

            // Email checking 
            $(document).ready(function (e) {
                $('#form-email').keyup(function () {
                    $('#emailSpan').html(validateEmail($('#form-email').val()));
                });
                $('#SubmitButton').click(function (e) {
                    
                    var email = $('#form-email').val();
                    // Checking Empty Fields
                    if ($.trim(email).length == 0 || $("#form-first-name").val() == "" || $("#form-password").val() == "" || $("#Password1").val()=="") {
                        alert('All fields are Required');
                        e.preventDefault();
                    }
                    if (validateEmail(email)) {
                        $('#emailSpan').removeClass();
                        $('#emailSpan').addClass('Good!! your Email is valid');
                        return 'Good!! your Email is valid';
                    }
                    else {
                        $('#emailSpan').removeClass();
                        $('#emailSpan').addClass('Invalid');
                        return 'Invalid Email Address';
                        e.preventDefault();
                    }
                });
                $('#SubmitButton').validateEmail();
            });
            // Function that validates email address through a regular expression.
            function validateEmail(pEmail) {
                var filterValue = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
                if (filterValue.test(pEmail)) {
                    if (pEmail.indexOf('@uol.edu.pk', pEmail.length - '@uol.edu.pk'.length) != -1)
                    {
                        $('#emailSpan').removeClass();
                        $('#emailSpan').addClass('Perfect');
                        return 'Just Perfect!';
                        $('#emailSpan').css("color","green");
                    }
                    else {
                        //alert("Email Must be like(yourName@uol.edu.pk)");
                        $('#emailSpan').removeClass();
                        $('#emailSpan').addClass('Email Must be like(yourName@uol.edu.pk)');
                        return 'Email Must be like(yourName@uol.edu.pk)';
                    }
                }
                else
                {
                    return false;
                }
            }
            //Email checking end
      </script>
       

            //end of password validation






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
				</div>                <div class="form-group">
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
                                <input type="submit" name="login" class="btn btn-lg btn-primary" value="Login"/>
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
			                    <form action="" method="post" class="registration-form">
			                    	<div class="form-group">
                                                    <input type="text" name="form-first-name" placeholder="Full name..." class="form-first-name form-control" id="form-first-name">
                                                    <label id="Lable1"> </label>
                                                    <span id="result"></span>
			                        </div>
                                    
			                        <div class="form-group">
			                        	<input type="email" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                                        <span id="emailSpan"></span>
			
			                        </div>
                                    
			                        <div class="form-group">
			                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                                        <span id="PassworsSpan"></span>
			                        </div>
                                    
			                        <div class="form-group">
			                        	<input type="password" name="form-password" placeholder="Re-enter Password..." class="form-ConformPassword form-control" id="Password1">
                                                        <span id="ConformPasswordSpan"></span>
			                        </div>
                                                <div class="form-group">
                                                    <input type="submit" name="submit" class="btn btn-lg btn-primary" value="Submit"/>
                                                </div>
			                    </form>
                                            <?php
                                                $flag=1;
                                                if(isset($_POST["submit"])){
                                                    echo 'good';
                                                    $link=  mysqli_connect('localhost', 'root', '', 'pctresearchgroup');
                                                    $sql="SELECT email FROM request";
                                                    $result=  mysqli_query($link, $sql);
                                                    while($row=  mysqli_fetch_assoc($result)){
                                                        if($row['email']==$_POST["form-email"]){
                                                            die("<script>alert('This Email has been already taken!!!)</script>");
                                                            $flag=0;
                                                        }
                                                    }
                                                    $sql="SELECT email FROM user";
                                                    $result=  mysqli_query($link, $sql);
                                                    while($row=  mysqli_fetch_assoc($result)){
                                                        if($row['email']==$_POST["form-email"]){
                                                            die("<script>alert('This Email has been already taken!!!)</script>");
                                                            $flag=0;
                                                        }
                                                    }
                                                    if($flag==1){
                                                        echo $sql1="INSERT INTO request (date,name,email,password, response) VALUES ('".Date("Y/m/d")."','".$_POST["form-first-name"]."','".$_POST["form-email"]."','".$_POST["form-password"]."','N')";
                                                            mysqli_query($link, $sql1);
                                                            die("<script>alert('Your request has been sent, Please wait we'll get back to you..!)</script>");
                                                    }

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