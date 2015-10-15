
<?php include 'Related-Data/Researcher/verifyAccess.php'; ?>
<html lang="en">
    <head>
        <?php include('headerScript.php');?>
        <title>Projects | Admin Portal</title>
        <link rel="stylesheet" href="css/customStyling.css" type="text/css">
    </head>
    <body>
        <?php include('Related-Data/Researcher/nav.php');?>
        
        <div class="container">
            <br><br><br><br><br><br><br><br>
            <div class="row">
                <div class="col-md-4">
                    <?php include 'Related-Data/Researcher/project/addProject.php'; ?>
                </div>
                <div class="col-md-8">
                    <?php include 'Related-Data/Researcher/project/showProject.php'; ?>
                </div>
            </div>
        </div>
        <?php include 'Related-Data/Researcher/project/phpScript.php'; ?>
    </body>
</html>
