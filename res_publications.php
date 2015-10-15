<?php include 'Related-Data/Researcher/verifyAccess.php'; ?>   
<html lang="en">
    <head>
        <?php include('headerScript.php');?>
        <title>Publication | Admin Portal</title>
        <link rel="stylesheet" href="css/customStyling.css" type="text/css">
    </head>
    <body>
        <?php include('Related-Data/Researcher/nav.php');?>
        <div class="container">
            <br><br><br><br><br>
            <div class="row">
                <div class="col-md-4">
                    <h3>Add More Publications</h3>
                    <?php include('Related-Data/Researcher/Publications/phpScript.php') ?>
                    <ul class="nav nav-pills nav-justified">
                        <li class="active"><a data-toggle="pill" href="#home">Conference Paper</a></li>
                        <li><a data-toggle="pill" href="#menu1">Journal Paper</a></li>
                    </ul>
                    <?php include 'Related-Data/Researcher/Publications/addPublication.php'; ?>
                        
                </div>
                <div class="col-md-8">
                    <?php include 'Related-Data/Researcher/Publications/showPublication.php'; ?>
                </div>
            </div>
                
        </div>
            
    </body>
</html>