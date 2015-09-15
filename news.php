<html class="no-js" lang=""> 
    <html lang="en">
        <head>
            <title>News | Research Group</title>
    <?php include('headerScript.php'); ?>
        </head>
        <body>
        <body>
            
            <div class="container" >
                <div class="row" style="margin-top: 150px; background-color: #a6e1ec" >
            <?php include('header.php');?>
                
                
                </div>
                <div class="row" >
                    <div class="col-md-3" style="margin-top: 10px; background-color: #a6e1ec" >
                        <a href="">Since 2015</a><br/>
                        <a href="">Since 2015</a><br/>
                        <a href="">Since 2015</a><br/>
                        <a href="">Since 2015</a>
                    </div>
                    <div class="col-md-9"  >
                        <form action="" method="POST">
                    <?php
                        
                                $sql="SELECT * FROM news";
                                $result=  mysqli_query($link, $sql);
                                while($row=  mysqli_fetch_assoc($result)){
                                    if($row["active"]=='Y' AND Date("Y-m-d") <= $row["inactiveDate"]){
                                    echo '<div id="newsPane" style="margin-top: 10px; background-color: #f2dede">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <i><b style="color:red">'.$row["date"].'</i></b> 
                                                </div>
                                                <div class="col-md-4">
                                                    In Activate on:'.$row["inactiveDate"].'
                                                </div>
                                                    
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <u><b>'.$row["subject"].'</b></u>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" style="margin:20px">
                                                    <strong>News: </strong>'.$row["description"].'
                                                </div>
                                            </div>    
                                    </div>';
                                    }
                                }                             
                    ?>
                        </form>
                            
                    </div>
                </div>
            </div>
        </body>
    </html>