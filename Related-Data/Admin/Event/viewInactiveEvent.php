<div class="row">
    <div class="col-md-12 cursor">
        Organized Events
    </div>
</div>
    <?php
$sql="SELECT * FROM event WHERE active = 'N'";
$result=  mysqli_query($link, $sql);
while($row=  mysqli_fetch_assoc($result)){
    echo '
    <div class="row infoTab">
            <div class="col-md-10">
                '.$row["startDate"].': <b><u><i>'.$row["event"].'</i></u></b> on '.$row["title"].'
            </div>
        
            <div class="col-md-2">
                <div class="col-md-4">
                    <a href="apGallary.php?albumId='.$row["id"].'" data-toggle="tooltip" title="Add Album Photos!!" style="color:brown ; float: right" ><span class="glyphicon glyphicon-camera"></span></a><br>
                </div>
                <div class="col-md-4">
                    <a href="?add='.$row["id"].'" style="color:green ; float: right" data-toggle="tooltip" title="Re-Activate Event"><span class="glyphicon glyphicon-plus"></span></a>
                </div>
                <div class="col-md-4">
                    <a href="?forceDelete='.$row["id"].'" style="color:green ; float: right" data-toggle="tooltip" title="Delete Forever"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
            </div>
    </div>';
}
/**
 * SELECT DATA FROM EVENT TABLE ON GROUPING ON THE BASIS OF DATE
 * PROBLE IS TO GROUP DATA ON THE BASIS OF YEAR
$sql="SELECT * FROM event WHERE active = 'N'  GROUP BY inactiveDate";
$result1=  mysqli_query($link, $sql);
while($row1=  mysqli_fetch_assoc($result1)){
    echo $row1["inactiveDate"].'<br>';
}**/