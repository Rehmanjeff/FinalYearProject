
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
?>            
    </div>
</div>
            
