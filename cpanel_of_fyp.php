
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
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Marcus Doe
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
                        
                        <li class="active">
                            <a href="#tab1default" data-toggle="tab">
                            <i class="glyphicon glyphicon-home"></i>
                            Home Page </a>
				        </li>	
							
						
                        <li>
                            <a href="#tab2default" data-toggle="tab">
                            <i class="glyphicon glyphicon-picture" data-toggle= "tab"></i>
                            Slider </a>
                        </li>
                        
                        <li>
                            <a href="#tab3default" data-toggle="tab">
                            <i class="glyphicon glyphicon-user"></i>
							Users </a>
                        </li>
                        
                        <li>
                            <a href="#tab4default" data-toggle="tab">
                            <i class="glyphicon glyphicon-flag"></i>
							New Requests </a>
                        </li>
                        
                        <li>
                            <a href="#tab4default" data-toggle="tab">
                            <i class="glyphicon glyphicon-calendar"></i>
							News</a>
                        </li>
                        
                        <li>
                            <a href="#tab4default" data-toggle="tab">
                            <i class="glyphicon glyphicon-list-alt"></i>
							Events </a>
                        </li>
                        
                        <li>
                            <a href="#tab4default" data-toggle="tab">
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
                    <div class="tab-pane fade in active" id="tab1default">
                        <?php 
						    $sql="SELECT * FROM profilephoto WHERE userId_FK = 2";
						    $result=  mysqli_query($link, $sql);
						    $dp=  mysqli_fetch_assoc($result);
						        
						    include "Related-Data/Admin/welcome/EditWebsiteTitle.php";
						    $sql="SELECT * FROM basicdata";
						    $result=  mysqli_query($link, $sql); 
						?>
                    </div>
                        <div class="tab-pane fade" id="tab2default">Default 2</div>
                        <div class="tab-pane fade" id="tab3default">Default 3</div>
                        <div class="tab-pane fade" id="tab4default">Default 4</div>
                        <div class="tab-pane fade" id="tab5default">Default 5</div>
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
