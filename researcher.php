
<?php include 'Related-Data/Researcher/verifyAccess.php'; ?>
<!--
<div class="dropdown">
    <a data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-chevron-down" style="float: right"></span></b></a>
    <ul class="dropdown-menu">
        <li><a data-toggle="modal" data-target="#myModal1">Edit</a></li>
    </ul>
</div>
!-->
<!DOCTYPE html>
    
<html lang="en">
    <head>
        <?php include('headerScript.php');?>
        <title>Personal Info | Researcher</title>
        
        
    </head>
    <body>
        <?php include('header.php');?>
        <?php include 'Related-Data/Researcher/research/editPersonalInfo.php'; ?>
        <?php include 'Related-Data/Researcher/research/queryUserInfo.php'; ?>
        <div class="row profile" id="admin_profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic" style="">
					<?php
                    	$sql="SELECT * FROM profilephoto WHERE userId_FK = ".$FK;
                        $result= mysqli_query($link,$sql);
                	$row1=mysqli_fetch_array($result);
                        echo '<div class="image-cropper">
                            <a href="" data-toggle="tooltip" title="Profile Photo"><img src="dp/'.$row1['dp_file'].'" class="rounded" /></a>
                                
                        </div>';
                        if(isset($_POST['btn-upload'])){
                            include 'Related-Data/Researcher/uploadDp.php';
                        }
                    ?>
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
                        <?php echo'<h3 style="text-transform: capitalize;">'.$row["profile_name"].'</h3>'?>
					</div>
					<div class="profile-usertitle-job">
						<?php echo'<h4>'.$row["profile_designation"].'</h4>'?>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <span class="btn btn-primary btn-file" ><input type="file" class="filestyle" data-classButton="btn btn-primary" name="file"></span>
                        <button type="submit" name="btn-upload" class="btn btn-success btn-file"> Upload</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
                        
                        <li class="active">
                            <a href="#home" data-toggle="tab">
                            <i class="glyphicon glyphicon-home"></i>
                            MY Profile </a>
				        </li>	
							
						
                        <li>
                            <a href="#my_qualifications" data-toggle="tab">
                            <i class="glyphicon glyphicon-picture" data-toggle= "tab"></i>
                            My Qualifications </a>
                        </li>
                        
                        <li>
                            <a href="#my_publications" data-toggle="tab">
                            <i class="glyphicon glyphicon-user"></i>
							My Publications </a>
                        </li>
                        
                        <li>
                            <a href="#students_projects" data-toggle="tab">
                            <i class="glyphicon glyphicon-flag"></i>
							Students Projects </a>
                        </li>
                        
                        <li>
                            <a href="#academic_resources" data-toggle="tab">
                            <i class="glyphicon glyphicon-calendar"></i>
							Academic Resources</a>
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
                                    <?php include 'Related-Data/Researcher/researcher_home.php'; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="my_qualifications">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php include 'res_qualification.php'; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="my_publications">
                            <div class="col-md-10">
                                <div class="row">
                                    Publications
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="my_projects">
                            <div class="row">
                                academic resources
                            </div>
                        </div>
                    
                        <div class="tab-pane fade" id="academic_resources">
                            Academic Resources
                        </div>
                    
                    </div>
                </div>
            </div>
		</div>                  
    </div>
        
    </div>
        
        
</div>
    
</body>
</html>