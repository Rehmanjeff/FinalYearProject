<?php
echo '<div class="row">
        <div class="col-md-4">
            <form action="" method="POST">
                <a href="#supervisorStatus" data-toggle="collapse"><b><u><i>Supervisory Status:</i></u></b><br/></a>
                <div id="supervisorStatus" class="collapse" onchange="this.form.submit();">
                    <label class="radio-inline"><Input type="radio" name="available">Available</label>
                    <label class="radio-inline"><Input type="radio" name="available">Not Available</label>  
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h3>Student Projects</h3>
        </div>
    </div>';
$sql="SELECT * FROM projects WHERE userId_FK =".$FK;
$result=  mysqli_query($link, $sql);
while($row=  mysqli_fetch_assoc($result)){
    echo '
    <div class="infoTab">
        <div class="row title">
            <div class="col-md-10">
                <b><u><i>'.$row["title"].'</i></u></b>
            </div>
            <div class="col-md-2">
                <div class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-chevron-down" style="float: right"></span></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?edit='.$row["id"].'">Edit</a></li>
                        <li><a href="?delete='.$row["id"].'">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <b>Brief:</b>'.$row["description"].'<br/>
                <b>Members:</b>'.$row["members"].'
            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-md-1"> </div>
            <div class="col-md-2 newsGreen">
                '.$row["startDate"].'
            </div>
            <div class="col-md-2"> </div>
            <div class="col-md-2 newsYellow">
                '.$row["type"].'
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2 newsRed">
                '.$row["progress"].'
            </div>
        </div>

    </div>';
    
}