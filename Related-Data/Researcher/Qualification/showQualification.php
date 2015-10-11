<h3>My Qualification</h3>
<?php
    $sql="SELECT * FROM qualification WHERE userId_FK = ".$FK." ORDER BY qual_year DESC ";
    $result=  mysqli_query($link, $sql);
    while($row=  mysqli_fetch_assoc($result)){
    echo '<div class="infoTab">
        <div class="row title">
            <div class="col-md-4">
                <b><u><i>'.$row["qual_degreeName"].'</i></u></b>
            </div>
            <div class="col-md-3">
                '.$row["qual_year"].'
            </div>
            <div class="col-md-4">
                '.$row["qual_university"].'
            </div>
            <div class="col-md-1">
                <div class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-chevron-down" style="float: right"></span></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?edit='.$row["qual_id"].'">Edit</a></li>
                        <li><a href="?delete='.$row["qual_id"].'">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-12">
                '.$row["qual_details"].'
            </div>
        </div>
    </div>';
    }