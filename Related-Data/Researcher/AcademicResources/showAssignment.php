<div class='row contentHeader'>Assignment</div>
<div class="row">
    <div id="profiles_view" class="col-md">
<?php
        $flag=1;
	$sql="SELECT * FROM assignment WHERE subjectId_FK = ".$_SESSION["subject"];
	$result= mysqli_query($link,$sql);
            
	while($row=mysqli_fetch_array($result))
	{   echo '<div class="row dataRow">'
            . '     <div class="col-md-10">'
                        ?>
        <a href="downloadFile.php?file=assignment/<?php echo $row['assignment_file'] ?>" target="_blank">Lecture: <?php echo $flag .':'.$row['assignment_name'] ?></a> 
                        <?php
                        echo '</div>
                          <a href="?delete='.$row["assignment_id"].'"><span class="glyphicon glyphicon-remove"></span></a>
                        </div>';
                    $flag++;
        }
            
            
        if(isset($_GET["delete"])){
            $sql="DELETE FROM assignment WHERE lecture_id = ".$_GET["delete"];
            mysqli_query($link, $sql);
            die("<script>location.href='uploadLecture.php'</script>");
        }
	?>
    </div>
</div>



