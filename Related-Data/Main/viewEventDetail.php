<?php


$sql="SELECT * FROM event WHERE id = ".$_GET["more"];
$result=  mysqli_query($link, $sql);
while($row=  mysqli_fetch_assoc($result)){
    echo '
    <h3>'.$row["event"].' on "'.$row["title"].'"</h3>
    <div class="infoTab">
        <div class="row">
            <b><center><div class="col-md-12">
                '.$row["event"].' on<br/>
                '.$row["title"].'<br/>
                '.$row["startDate"].'<br/>
                '.$row["venue"].'<br/>
                Timing: '.$row["startTime"].' to '.$row["endTime"].'<br/><br/>
                Speaker: '.$row["speaker"].'
            </div></center></b>
        </div>
        <div class="row">
            <div class="col-md-12">
                <b>Description:</b><br/>'.$row["description"].'
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <b>Abstract:</b><br/>'.$row["objective"].'
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <b>Objective:</b><br/>'.$row["objective"].'
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <b>Venue:</b><br/>'.$row["venue"].'
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <b>Outline:</b><br/>'.$row["outline"].'
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <b>Who Should Attend:</b><br/>'.$row["audience"].'
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <b>Registration:</b><br/>'.$row["registration"].'
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <b>Contact Person:</b><br/>'.$row["name"].'<br/>'.$row["email"].'<br/>'.$row["phNo"].'<br/>
            </div>
        </div>
        
    </div>';
    echo '<center><img src="img/linebreak.jpg" width"100%"></center> ';
}