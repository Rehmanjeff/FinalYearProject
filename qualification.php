<!DOCTYPE html>
    
<html lang="en">
    <head>
        <?php include('headerScript.php');?>
        <title>Admin Portal</title>
    </head>
    <body>
        <?php include('navResearcher.php');?>
        <div class="container">
            <br><br><br><br><br><br><br><br>
            <div class="col-md-6">
                <h3>Qualification: (All Fields are required)</h3>
                    
                    <?php
                    $sql="SELECT * FROM ba WHERE BA_id = 1";
                    $result=  mysqli_query($link, $sql);
                    $row=  mysqli_fetch_assoc($result);
                        
                    if(empty($row["BA_title"])){
                        echo '<h4>Bachelor</h4>';
                        include('Researcher/formBA.php');
                    }else{
                        echo '<h4>Bachelor</h4>';
                        echo '<table class="table table-hover">
                                <tr>
                                    <td><b><u>'.$row["BA_title"].'</u></b> from <i>'.$row["BA_university"].'</i> in <b>'.$row["BA_year"].'</b></td>
                                    <td><a href="">Edit</a></td>
                                </tr>
                                </table>';
                    }
                        
                    $sql1="SELECT * FROM ma WHERE MA_id = 1";
                    $result1=  mysqli_query($link, $sql1);
                    $row1=  mysqli_fetch_assoc($result1);
                        
                    if(!empty($row["BA_title"]) AND empty($row1["MA_title"]) ){
                        include('Researcher/formMA.php');
                    }else{
                        echo '<h4>Master</h4>';
                        echo '<table class="table table-hover">
                                <tr>
                                    <td><b><u>'.$row1["MA_title"].'</u></b> from <i>'.$row1["MA_university"].'</i> in <b>'.$row1["MA_year"].'</b></td>
                                    <td><a href="">Edit</a></td>
                                </tr>
                                </table>';
                    }
                        
                        
                    $sql2="SELECT * FROM mphill WHERE MPhill_id = 1";
                    $result2=  mysqli_query($link, $sql2);
                    $row2=  mysqli_fetch_assoc($result2);
                        
                    if(!empty($row["BA_title"]) AND !empty($row1["MA_title"]) AND empty($row2["MPhill_title"]) ){
                        include('Researcher/formMPhill.php');
                    }else{
                        echo '<h4>M-Phill</h4>';
                        echo '<table class="table table-hover">
                                <tr>
                                    <td><b><u>'.$row2["MPhill_title"].'</u></b> from <i>'.$row2["MPhill_university"].'</i> in <b>'.$row2["MPhill_year"].'</b></td>
                                    <td><a href="">Edit</a></td>
                                </tr>
                                </table>';
                    }
                        
                    $sql3="SELECT * FROM phd WHERE phd_id = 1";
                    $result3=  mysqli_query($link, $sql3);
                    $row3=  mysqli_fetch_assoc($result3);
                        
                    if(!empty($row["BA_title"]) AND !empty($row1["MA_title"]) AND !empty($row2["MPhill_title"]) AND empty($row2["phd_title"]) AND !$row3["phd_status"]=='na'){
                        echo '<h4>PhD</h4>';
                        include('Researcher/formPhD.php');
                    }
                    else if($row3["phd_status"]!='na')  
                    {
                        echo '<h4>PhD</h4>';
                        echo '<table class="table table-hover">
                                <tr>
                                    <td><b><u>'.$row3["phd_title"].'</u></b> from <i>'.$row3["phd_university"].'</i> in <b>'.$row3["phd_year"].'</b></td>
                                    <td><a href="">Edit</a></td>
                                </tr>
                                </table>';
                    }
                    if(isset($_POST["btnSkipPhd"])){
                        echo $sqll="INSERT INTO phd (phd_status) VALUES ('na')";
                        mysqli_query($link,$sqll);
                    }
                    
                    ?>
                        
                <br/><br/><br/>
                <a href="researcher.php"><input type="submit" value='<< My Profile' class='btn btn-success' /></a>
                <a href="projects.html"><input type="submit"  value='My Projects>>' class='btn btn-success' /></a>
            </div>
            <div class="">
                <img src="img/icon news.png" widht=100%>
            </div>
                
        </div>
        
    </body>
</html>