<div class="row">
    <div class="col-md-12 cursor">
        UpComming..
    </div>
</div>

<?php
$sql="SELECT * FROM event WHERE active = 'Y'";
$result=  mysqli_query($link, $sql);
while($row=  mysqli_fetch_assoc($result)){
    echo '
    <div class="row infoTab">
        <div class="col-md-8">
            a <b><u><i>'.$row["event"].' </i></u></b>'.$row["title"].' starting from '.$row["startDate"].' to '.$row["inactiveDate"].'
        </div 
        <div class="col-md-4">
            <a href="?remove='.$row["id"].'" style="color:red ; float: right" ><span class="glyphicon glyphicon-remove"></span></a><br>
        </div>
    </div>';
}
