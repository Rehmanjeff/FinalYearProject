<br>
<br>
<?php
$sql="SELECT * FROM news ORDER BY inactiveDate DESC";
$result=  mysqli_query($link, $sql);
while($row=  mysqli_fetch_assoc($result)){
    if($row["active"] == 'Y'){
    echo '
    <div class="unreadNews">
        <div class="row title">
            <div class="col-md-8">
                <b><i>'.$row["subject"].'</i></b>
                '.$row["description"].'
            </div>
            <div class="col-md-4">
            <div class="row">
                <div class="col-md-5">
                    <div class="col-md-12 newsGreen">
                        '.date($row["startDate"]).'
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="col-md-12 newsRed">     
                        '.date($row["inactiveDate"]).'
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="?remove='.$row["id"].'" data-toggle="tooltip" title="De-Activate News" style="color:red ; float: right" ><span class="glyphicon glyphicon-remove"></span></a><br>
                </div>

            </div>
                
                 
            </div>
        </div>

    </div>';
    
}
else{
    echo '
    <div class="readNews">
        <div class="row title">
            <div class="col-md-8">
                <i>'.$row["subject"].'</i>:
                '.$row["description"].'
            </div>
            <div class="col-md-4">
            <div class="row">
                <div class="col-md-5">
                    <div class="col-md-12 newsGreen">
                        '.date($row["startDate"]).'
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="col-md-12 newsRed">
                        '.date($row["inactiveDate"]).'
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="?forceDelete='.$row["id"].'" data-toggle="tooltip" title="Delete Forever" style="color:green ; float: right" ><span class="glyphicon glyphicon-remove"></span></a>
                <a href="?add='.$row["id"].'" data-toggle="tooltip" title="Activate News" style="color:green ; float: right" ><span class="glyphicon glyphicon-plus"></span></a><br>
                </div>

            </div>
                
                 
            </div>
        </div>

    </div>';
}
}
