<h1>In Active News</h1>
<?php
$sql="SELECT * FROM news WHERE active = 'N'";
$result=  mysqli_query($link, $sql);
while($row=  mysqli_fetch_assoc($result)){
    echo '
    <div class="infoTab">
        <div class="row title">
            <div class="col-md-10">
                <b><u><i>'.$row["subject"].'</i></u></b><br>
                '.$row["description"].'
            </div>
            <div class="col-md-2">
                <a href="?add='.$row["id"].'" style="color:green ; float: right" ><span class="glyphicon glyphicon-plus"></span></a><br>
                 <div class="col-md-12 newsGreen">
                '.$row["startDate"].'
                </div>
            <div class="col-md-12 newsYellow">
                '.$row["inactiveDate"].'
            </div>
            </div>
        </div>

    </div>';

    
}