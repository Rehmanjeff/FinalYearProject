<div id="menu" class="col-md-12">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="row" style="margin: 30px">
            <div class="col-md-6">
                <a href="index.php"><img src="img/Logo1.png" width="400px" height="50px;"></a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="adminPortal.php">Home</a></li>
                    <?php 
                        $count=0;
                        $sql="SELECT * FROM request";
                        $result=  mysqli_query($link, $sql);
                        while($row=  mysqli_fetch_assoc($result)){
                            if($row["response"]=='N'){
                                $count++;
                            }
                        }
                        echo '<li><a href="request.php">Requests<span class="badge">'.$count.'</span></a></li>';
                        
                    ?>
                    
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Drop Down <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Page 1-1</a></li>
                            <li><a href="#">Page 1-2</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li><a href="apNews.php">News</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
            </div>
            </div>
        </div>
    </nav>
</div>