<?php
    if(isset($_SESSION["subject"]))
        $subject=$_SESSION["subject"];
?>
<div class='row contentHeader'>Lectures</div>
<div class="row">
    <div id="profiles_view" class="col-md">
<?php
        $flag=1;
	$sql="SELECT * FROM lecture WHERE subjectId_FK = ".$subject;
	$result= mysqli_query($link,$sql);
	while($row=mysqli_fetch_array($result))
	{   echo '<div class="row dataRow">
                     <div class="col-md-10">';
                        ?>
                            <a href="downloadFile.php?file=lecture/<?php echo $row['lecture_file'] ?>" target="_blank">Lecture: <?php echo $flag .':'.$row['lecture_name'] ?></a> 
                        <?php
                echo '</div>
                    <div class="col-md-2">
                          <a href="?delete='.$row["lecture_id"].'"><span class="glyphicon glyphicon-remove"></span></a>
                    </div>
                </div>';
                    $flag++;
                
        }
            
            
        if(isset($_GET["delete"])){
            $sql="DELETE FROM lecture WHERE lecture_id = ".$_GET["delete"];
            mysqli_query($link, $sql);
            die("<script>location.href='uploadLecture.php'</script>");
        }
	?>
    </div>
</div>



