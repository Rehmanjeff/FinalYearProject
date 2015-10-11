<?php
    session_start();
    if(isset($_GET["teacher_id"])){
        $_SESSION["id"]=$_GET["teacher_id"];
        
    }
?>
<div id="menu">
    <nav class="navbar navbar-inverse navbar-fixed " role="navigation">
        <div class="container-fluid">
            <div class="row" style="margin: 30px">
                <div class="col-md-3" style='color: white'>
                    <a href="teacherList.php"><h3>UOL Teacher Portal</h3></a>
                </div>
                <div class="col-md-8"> 
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="studentView.php">Welcome</a></li>
                        <?php
                            $sql="SELECT * FROM subject WHERE userId_FK =".$_SESSION["userId_FK"];
                            $result=  mysqli_query($link, $sql);
                            while($subject=  mysqli_fetch_assoc($result)){
                                echo '<li><a href="course.php?subjectId='.$subject["subject_id"].'">'.$subject["subject_name"].'</a></li>';
                            }
                            
                        ?>
                        <li><a href="teacherContact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-1">
                    <div style="width:50px; height:50px; border:solid">
                        <img src="img/dr nadeem.jpg" width="50" height="50">
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>