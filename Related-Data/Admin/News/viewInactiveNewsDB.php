<div class="row cursor">
    In Active News
</div>
<?php
$sql="SELECT * FROM news WHERE active = 'N'";
$result=  mysqli_query($link, $sql);
while($row=  mysqli_fetch_assoc($result)){
    echo '
    <div class="infoTab">
        <div class="row title">
            <div class="col-md-8">
                <b><u><i>'.$row["subject"].'</i></u></b><br>
                '.$row["description"].'
            </div>
            <div class="col-md-4">
                <a href="?forceDelete='.$row["id"].'" style="color:green ; float: right" ><span class="glyphicon glyphicon-remove"></span></a>
                <a href="?add='.$row["id"].'" style="color:green ; float: right" ><span class="glyphicon glyphicon-plus"></span></a><br>
                 <div class="col-md-12 newsGreen">
                '.$row["startDate"].'
                </div>
            <div class="col-md-12 newsRed">
                '.$row["inactiveDate"].'
            </div>
            </div>
        </div>
    </div>
    <br>';

    
}
