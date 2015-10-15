<?php include 'Related-Data/Researcher/verifyAccess.php'; ?>
<html lang="en">
    <head>
        <?php include('headerScript.php');?>
        <title>Academic Resources | Admin Portal</title>
        <link rel="stylesheet" href="css/customStyling.css" type="text/css">
    </head>
    <body>
        <?php include('Related-Data/Researcher/nav.php');?>
        
        <div class="container">
            <br><br><br><br><br><br><br><br>
            <div class="row">
                <div class="col-md-3">
                    <?php include 'Related-Data/Researcher/AcademicResources/sidebar.php'; ?>
                </div>
                <div class="col-md-9">
                    <?php include 'Related-Data/Researcher/AcademicResources/Announcement/body.php'; ?>
                    
                </div>
            </div>
        </div>
        <?php include 'Related-Data/Researcher/project/phpScript.php'; ?>
        
    </body>
</html>