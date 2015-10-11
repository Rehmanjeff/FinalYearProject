<?php
function countRequest(){
    $link=  mysqli_connect('localhost', 'root', '', 'pctresearchgroup');
    $count=0;
    $sql="SELECT * FROM request";
    $result=  mysqli_query($link, $sql);
    while($row=  mysqli_fetch_assoc($result)){
        if($row["response"]=='N'){
            $count++;
        }
    }
    return $count;
}
?>
<div id="menu" class="col-md-12">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="row" style="margin: 30px">
                <div class="col-md-4">
                    <a href="cpanel.php" data-toggle="tooltip" title="Go To Home"><img src="img/Logo1.png" width="400px" height="50px;"></a>
                </div>
                <div class="col-md-7">
                    <ul class="nav navbar-nav">
                        
                        <li class="active"><a href="cpanel.php" data-toggle="tooltip" title="Contrl Panel">Home</a></li>
                        <li><a href="slider.php">Slider</a></li>
                        <li><a href="users.php">Users</a></li>
                        <?php echo '<li><a href="request.php">New Requests<span class="badge">'.countRequest().'</span></a></li>';?>
                        <li><a href="apNews.php">News</a></li>
                        <li><a href="apEvent.php">Event</a></li>
                        <li><a href="apAlbum.php">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-md-1">
                    <div style="width:50px; height:50px; border:solid">
                        <a href="?logout" data-toggle="tooltip" title="Logout!!"><img src="img/male.png" width="50" height="50"></a>
                    </div>
                    <?php include 'Related-Data/Admin/logout.php'; ?>
                </div>
            </div>
                
        </div>
    </nav>
</div>
