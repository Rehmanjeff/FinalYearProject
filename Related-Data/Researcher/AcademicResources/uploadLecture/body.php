<?php
if(isset($_GET["subject"]))
    $_SESSION["subject"]=$_GET["subject"];
    $sql="SELECT * FROM subject WHERE subject_id = ".$_SESSION["subjectId"];
    $result=  mysqli_query($link, $sql);
    $row=  mysqli_fetch_assoc($result);
    
?>
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
</style>

<h1><?php echo '<a href="uploadLecture.php?subject='.$row["subject_id"].'">'.$row["subject_name"].' ('.$row["subject_class"].') - '.$row["subject_semestor"].'</a>'; ?></h1>
<div class='row'>
    <div class='col-md-4 contentHeader'>
        Upload Contents
    </div>
    <div class='col-md-8 contentHeader'>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="float:right"><span class="glyphicon glyphicon-plus" ></span>Class Announcement</button><br/><br/>
    </div>
</div>

<form action="" method="post" enctype="multipart/form-data" name="form">
    <div class="row jumbotron">
        <div class="row">
            <div class="col-md-8">
                <input type="text" class="form-control" name="name" placeholder="Name of Lecture" required>
            </div>
            <div class="col-md-4">
                <select name="type" class="form-control">
                    <option value="lecture">Lecture</option>
                    <option value="assignment">Assignment</option>
                    <option value="reference">Reference</option>
                    <option value="result">Result</option>
                </select>
            </div>
        </div>
        <br/>
        <div class="row" style="float: right">
            <div class="col-md-12">
                <span class="btn btn-default btn-file" >Choose File<input type="file" name="file"></span>
                <button type="submit" name="btn-upload" class="btn btn-default btn-file"> Upload Lecture</button>
            </div>
        </div>
        <?php
	if(isset($_GET['success']))
            echo 'File Uploaded Successfully...';
	else if(isset($_GET['fail']))
            echo 'Problem While File Uploading !';
        else
            echo 'Try to upload any files(PDF, DOC, EXE, ZIP,etc...)';
         ?>
    </div>
</form>
    
<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{    
    if($_POST["type"]=="lecture"){
        include 'Related-Data/Researcher/AcademicResources/uploadLecture.php';
    }
    if($_POST["type"]=="assignment"){
        include 'Related-Data/Researcher/AcademicResources/uploadAssignment.php';
    }
    
}

/**************************************************************************************************************************
VIEW CONTENTS
**************************************************************************************************************************/
if(isset($_GET["subject"])){
echo '<div class="row">
    <div class="col-md-5">';
         include 'Related-Data/Researcher/AcademicResources/showLectures.php';
    echo '</div>
    <div class="col-md-2"></div>
    <div class="col-md-5">';
        include 'Related-Data/Researcher/AcademicResources/showAssignment.php';
        include 'Related-Data/Researcher/AcademicResources/showLectures.php';
        include 'Related-Data/Researcher/AcademicResources/showLectures.php';
    echo '</div>
</div>';
}

    
