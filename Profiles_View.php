<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects | Research Group</title>
    <?php include('headerScript.php');?>
    <link rel="stylesheet" href="css/profile_view.css">
</head>
<body>
    <header>
        <?php include('header.php');?>
    </header>
<div class="container">
    <div class="row">
        <div  id="header_profiles" class="col-md">
            <div class="col-md-4">
                <div id="sort_profile_op">
                    <div class="form-group">
                        <div class="icon-addon addon-md">
                            <select class="form-control">
                                <option>Select Option</option>
                                <option>Sample</option>
                                <option>Sample</option>
                            </select>
                            <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="email"></label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div id="id_bar">
                    <div class="form-group" style="width: 340px;">
                        <div class="input-group input-group-md-4">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-filter"></i></span>
                            <div class="icon-addon addon-md-4">
                                <input type="text" placeholder="Search By Name" class="form-control" id="email">
                                <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="Search By Name"></label>
                            </div>
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div id="profiles_view" class="col-md">
            <?php
        if(isset($_POST["search"])){
            $sql="SELECT * FROM userprofile WHERE profile_name LIKE '%".$_POST["name"]."%'";
            $result= mysqli_query($link,$sql);
            while($row=mysqli_fetch_array($result))
            {
                echo '
                <div class="col-md-3">
                    <div class="flip-container">
                        <div class="card">
                            <div class="front">
                                <div class="col-md-12">
                                    <a href="studentView.php?teacher_id='.$row['id'].'">'.$row['profile_name'].'<br/></a>
                                    '.$row['profile_designation'].'<br/>
                                </div>
                            </div>';

                            $sql1="SELECT * FROM profilephoto WHERE userId_FK = ".$row["userId_FK"];
                            $result1= mysqli_query($link,$sql1);
                            $row1=mysqli_fetch_array($result1);
                            if(empty($row1)){
                                echo '<div class="back">
                                    <img src="img/male.png    " width="150px" height="150px">
                                <span class="caption">'.$row['profile_name'].'</span>'
                                        . '</div>';
                            }else{
                                echo '<div class="back">
                                        <!-- back side content -->
                                        <div class="image-cropper" style="width: 150px; height:150px">
                                            <img src="dp/'.$row1['dp_file'].'" width="150px" height="150px">
                                            <span class="caption">'.$row['profile_name'].'</span>
                                        </div>
                                    </div>';
                            }

                        echo '</div>
                    </div>
                </div>';

            }
        }
        if(!isset($_POST["search"])){    
	$sql="SELECT * FROM userprofile";
	$result= mysqli_query($link,$sql);
            
	while($row=mysqli_fetch_array($result))
	{
            
            echo '
            <div class="col-md-3">
                <div class="flip-container">
                    <div class="card">
                        <div class="front">
                            <div class="col-md-12">
                                <a href="studentView.php?teacher_id='.$row['id'].'">'.$row['profile_name'].'<br/></a>
                                '.$row['profile_designation'].'<br/>
                            </div>
                        </div>';
            
                        $sql1="SELECT * FROM profilephoto WHERE userId_FK = ".$row["userId_FK"];
                        $result1= mysqli_query($link,$sql1);
                        $row1=mysqli_fetch_array($result1);
                        if(empty($row1)){
                            echo '<div class="back">
                                <img src="img/male.png" width="150px" height="150px">
                            <span class="caption">'.$row['profile_name'].'</span>'
                                    . '</div>';
                        }else{
                            echo '<div class="back">
                                    <!-- back side content -->
                                    <div class="image-cropper" style="width: 150px; height:150px">
                                        <img src="dp/'.$row1['dp_file'].'" width="150px" height="150px">
                                        <span class="caption">'.$row['profile_name'].'</span>
                                    </div>
                                </div>';
                        }
                        
                    echo '</div>
                </div>
            </div>';
                
        }
        }
?>      
        </div>
</div>
</div>

</body>
</html>