<div class="row cursor">
    Active Announcements
</div>

<?php
$sql="SELECT * FROM announcement WHERE active = 'Y' AND userId_FK = '".$FK."' ORDER BY subjectId_FK ASC";
$result=  mysqli_query($link, $sql);
while($row=  mysqli_fetch_assoc($result)){
    if(Date("Y-m-d") <= $row["inactiveDate"] AND Date("Y-m-d")>=$row["startDate"] OR !isset($_POST['formFilter'])){
        echo '
        <div class="infoTab">
            <div class="row title">
                <div class="col-md-9">
                    <b><u><i>'.$row["subject"].'</i></u></b><br>
                    '.$row["description"].'
                </div>
                <div class="col-md-3">
                    <div class="col-md-9 newsYellow">';
                        $sql="SELECT subject_name FROM subject WHERE subject_id = ".$row["subjectId_FK"];
                        $result1=  mysqli_query($link, $sql);
                        $subName=  mysqli_fetch_assoc($result1);
                        echo $subName["subject_name"];
                    echo '</div>
                    <div class="col-md-3">
                        <a href="academicresources.php?remove='.$row["id"].'" style="color:red ; float: right" ><span class="glyphicon glyphicon-remove"></span></a><br>
                    </div>
                     <div class="col-md-12 newsGreen">
                    '.$row["startDate"].'
                    </div>
                    <div class="col-md-12 newsRed">
                        '.$row["inactiveDate"].'
                    </div>
                </div>
            </div>
        </div>';
    
    }
}
echo '<div class="row cursor">
    InActive Announcement
</div>';

$sql="SELECT * FROM announcement WHERE active = 'N' AND userId_FK = '".$FK."' ORDER BY subjectId_FK ASC";
$result=  mysqli_query($link, $sql);
while($row=  mysqli_fetch_assoc($result)){
    echo '
    <div class="infoTab">
        <div class="row title">
                <div class="col-md-9">
                    <b><u><i>'.$row["subject"].'</i></u></b><br>
                    '.$row["description"].'
                </div>
                <div class="col-md-3">
                    <div class="col-md-9 newsYellow">';
                        $sql="SELECT subject_name FROM subject WHERE subject_id = ".$row["subjectId_FK"];
                        $result1=  mysqli_query($link, $sql);
                        $subName=  mysqli_fetch_assoc($result1);
                        echo $subName["subject_name"];
                    echo '</div>
                    <div class="col-md-3">
                        <a href="academicresources.php?add='.$row["id"].'" style="color:green; float:right;"><span class="glyphicon glyphicon-plus"></span></a><br>
                    </div>
                     <div class="col-md-12 newsGreen">
                    '.$row["startDate"].'
                    </div>
                    <div class="col-md-12 newsRed">
                        '.$row["inactiveDate"].'
                    </div>
                </div>
    </div>';

    
}