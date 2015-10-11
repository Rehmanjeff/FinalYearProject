<?php
echo '<h3>Up Comming Events</h3>';
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

$sql="SELECT * FROM event WHERE active = 'Y'".$condition;
$result=  mysqli_query($link, $sql);
while($row=  mysqli_fetch_assoc($result)){
    echo '
    <div class="infoTab">
        <div class="row">
            <div class="col-md-12">
                '.$row["startDate"].': PCT Research Group is organizing a '.$row["event"].' under the title of "'.$row["title"].'" on '.$row["startDate"].'
                from '.$row["startTime"].' to '.$row["endTime"].' at '.$row["venue"].'.<a href="?more='.$row["id"].'">more...</a>
            </div>
        </div>
    </div>';
    echo '<center><img src="img/linebreak.jpg" width"100%"></center> ';
}