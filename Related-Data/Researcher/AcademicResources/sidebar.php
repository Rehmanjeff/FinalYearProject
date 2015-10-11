<?php
    echo $row["subject_name"];
?>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-plus" ></span>Add Subject</button><br/><br/>
    <?php include 'Related-Data/Researcher/AcademicResources/Announcement/addAnnouncement.php'; ?>    
    <?php include 'Related-Data/Researcher/AcademicResources/Announcement/phpScript.php'; ?>    
    <?php include 'Related-Data/Researcher/AcademicResources/Announcement/addSubject.php'; ?>    
    <div class="row">
    <?php
        echo '<div class="dataRow">
                <a href="academicresources.php">Home</a>
            </div>';
    
        $sql="SELECT * FROM subject WHERE userId_FK = ".$FK;
        $result=  mysqli_query($link, $sql);
        while($row=  mysqli_fetch_assoc($result)){
            echo '<div class="dataRow">';
            echo '<a href="uploadLecture.php?subject='.$row["subject_id"].'">'.$row["subject_name"].' ('.$row["subject_class"].') - '.$row["subject_semestor"].'</a>';
            $_SESSION["subjectId"]=$row["subject_id"];
            echo '</div>';
        }
        
    ?>
    </div>

 
<?php
if(isset($_POST["addCourse"])){
    $sql="INSERT INTO subject (subject_name, subject_class, subject_semestor,userId_FK) VALUES"
            . "('".$_POST["name"]."','".$_POST["class"]."','".$_POST["semestor"]."','".$FK."')" ;
            mysqli_query($link, $sql);
            die("<script>location.href='uploadLecture.php'</script>");
}
    
?>