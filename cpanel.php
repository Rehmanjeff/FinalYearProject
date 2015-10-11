<?php include("Related-Data/Admin/verifyAccess.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
<?php include('headerScript.php'); ?>

    <title>User Profile Sidebar - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    /***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

    </style>
</head>
<body>
	<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div class="container">
    
    <?php include('header.php'); ?>
    <div class="row profile" id="admin_profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<?php

                        $sql="SELECT * FROM profilephoto WHERE userId_FK = 2";
                        $result=  mysqli_query($link, $sql);
                        $dp=  mysqli_fetch_assoc($result);
        
                        if(empty($dp)){
                            echo '<img style="float: left"  hspace="20" src="img/male.png    " >';
                        }
                        
                        else{
                            echo '<img style="" class="image-cropper" hspace="20" src="dp/'.$dp['dp_file'].'">';
                        }
                    ?>
				</div>
                <h3>Admin Pannel</h3>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<!--<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Marcus Doe
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>-->
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<!--<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>-->
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
                        
                        <li class="active">
                            <a href="#home" data-toggle="tab">
                            <i class="glyphicon glyphicon-home"></i>
                            Home Page </a>
				        </li>	
							
						
                        <li>
                            <a href="#slider" data-toggle="tab">
                            <i class="glyphicon glyphicon-picture" data-toggle= "tab"></i>
                            Slider </a>
                        </li>
                        
                        <li>
                            <a href="#users" data-toggle="tab">
                            <i class="glyphicon glyphicon-user"></i>
							Users </a>
                        </li>
                        
                        <li>
                            <a href="#new_requests" data-toggle="tab">
                            <i class="glyphicon glyphicon-flag"></i>
							New Requests </a>
                        </li>
                        
                        <li>
                            <a href="#news" data-toggle="tab">
                            <i class="glyphicon glyphicon-calendar"></i>
							News</a>
                        </li>
                        
                        <li>
                            <a href="#events" data-toggle="tab">
                            <i class="glyphicon glyphicon-list-alt"></i>
							Events </a>
                        </li>
                        
                        <li>
                            <a href="#gallery" data-toggle="tab">
                            <i class="glyphicon glyphicon-picture"></i>
							Gallery </a>
                        </li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <div class="panel-body">
                    <div class="tab-content">
                    <div class="tab-pane fade in active" id="home">
                       <div class="row">
                                    <div class="col-md-12">
                                        <?php include ('apHome.php');  ?>
                                    </div>
                                </div>
                    </div>
                        <div class="tab-pane fade" id="slider">
                            Slider
                        </div>
                        <div class="tab-pane fade" id="users">
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php include 'Related-Data/Admin/User/bodyUser.php'  ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="new_requests">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php include 'Related-Data/Admin/User/request/bodyUserRequest.php'  ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="news">
<!--
                            <div class="col-md-12">
                                <?php/* include ('aPNews.php')*/;?>
                            </div>
-->
                            <div class="col-md-12">
                                <?php include ('Related-Data/Admin/News/body.php');?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="events">          
                            <div class="row" >
                                    <?php include 'Related-Data/Admin/Event/body.php';?>
                            </div> 
                        </div>
                        <div class="tab-pane fade" id="gallery">
                            Gallery
                        </div>
                    </div>
                </div>
            </div>
		</div>
                
                                
            
		</div>
	</div>
</div>
<center>
<strong>Powered by <a href="http://j.mp/metronictheme" target="_blank">KeenThemes</a></strong>
</center>
<br>
<br>
	<script type="text/javascript">
	
	</script>
</body>
</html>
