<?php
echo '<h3>All Student Projects</h3>';
if(isset($_GET["funded"])){
    $condition=" WHERE type = 'Funded'";
}
else if(isset($_GET["nonfunded"])){
    $condition=" WHERE type = 'Non Funded'";
}
else if(isset($_GET["inProgress"])){
    $condition=" WHERE progress = 'In Progress'";
}
else if(isset($_GET["done"])){
    $condition=" WHERE progress = 'Done'";
}
else{
    $condition="";
}

$sql="SELECT * FROM projects".$condition;
$result=  mysqli_query($link, $sql);
while($row=  mysqli_fetch_assoc($result)){
    echo '
    <div class="infoTab">
        <div class="row title">
            <div class="col-md-10">
                <b><u><i>'.$row["title"].'</i></u></b>
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
    echo '<center><img src="img/linebreak.jpg" width"100%"></center> ';
}