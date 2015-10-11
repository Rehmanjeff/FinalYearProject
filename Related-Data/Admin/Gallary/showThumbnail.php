<div class="col-md-8">
    
</div>

        </div>
            

<div class="row">
    <div id="profiles_view" class="col-md">
<?php
    
	$sql="SELECT * FROM gallary WHERE album_FK = ".$_SESSION["albumId"];
	$result= mysqli_query($link,$sql);
            
	while($row=mysqli_fetch_array($result))
	{
            
            echo '
            <div class="col-md-3">
                <div class="flip-container">
                    <div class="card">
                        <div class="front">
                            
                            <div class="col-md-8">
                                <a href="gallary/'.$row['file'].'">Name: '.$row['file'].'<br/></a>
                            </div>
                            <div class="col-md-4">
                                <a href="?delete='.$row["id"].'" style="float:right; color:red;"><span class="glyphicon glyphicon-trash"></span></a>
                            </div>
                            
                        </div>
                        <div class="back">
                            <!-- back side content -->
                            <a href="gallary/'.$row['file'].'"><img src="gallary/'.$row['file'].'" width="150px" height="150px"></a>
                            <span class="caption">'.$row['file'].'</span>
                        </div>
                    </div>
                </div>
            </div>';
                
        }
            

        if(isset($_GET["delete"])){
            $sql="DELETE FROM gallary WHERE id = ".$_GET["delete"];
            mysqli_query($link, $sql);
            die("<script>location.href='slider.php'</script>");
        }
	?>
    </div>
</div>
            
        
        