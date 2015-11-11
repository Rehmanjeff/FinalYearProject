<div class="row cursor">
    Active News
</div>

<?php
$sql="SELECT * FROM news WHERE active = 'Y'";
$result=  mysqli_query($link, $sql);
while($row=  mysqli_fetch_assoc($result)){
    if(Date("Y-m-d") <= $row["inactiveDate"] AND Date("Y-m-d")>=$row["startDate"] OR !isset($_POST['formFilter'])){
    echo '
    <div class="infoTab">
        <div class="row title">
            <div class="col-md-8">
                <b><u><i>'.$row["subject"].'</i></u></b><br>
                '.$row["description"].'
            </div>
            <div class="col-md-4">
                <a href="?remove='.$row["id"].'" style="color:red ; float: right" ><span class="glyphicon glyphicon-remove"></span></a><br>
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
