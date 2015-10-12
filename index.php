<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<html class="no-js" lang=""> <!--<![endif]-->
<html lang="en">
<head>

    <title>People Centered Technology</title>
    <?php include('headerScript.php'); ?>
</head>
<body>
<div class = "container-fluid">
<div class="container">
    <div class="row">
        <?php include('header.php');?>

        <div id="slideShow" class="col-md">
            <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1" class="slider"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/img1.jpg"  class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="img/img3.jpg"  class="img-responsive">
                    </div>
                    <div class="item">
                        <img src="img/img2.jpg"  class="img-responsive">
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </div>
            <!-- /.carousel -->

        </div>
        <div class="container">
            <div class="row">
                <div class="inner_row">
                <?php 
                    $sql="SELECT * FROM basicdata";
                    $result=  mysqli_query($link, $sql);
                    $row=  mysqli_fetch_assoc($result);
                    echo '
                        <div id="Organization-and-Head" class="col-md-7" style="">
                            <h3><strong>'.$row["title"].'</strong></h3>
                            
                            <div class="clearfix">
                                <img style="float: left" class="img-circle" hspace="20" src="img/library.jpg"/>
                                    <p>'.$row["text"].'</p>
                            </div>
                        </div>';?>

            <div id="News" class="col-md-4">
                <h3><strong>Updates</strong></h3>
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="Newsh.php" target="_self"><strong>News</strong></a></li>
                    </ul>
                <marquee direction="up" onMouseOver="this.stop();" onMouseOut="this.start();" height="180" scrollamount="3" scrolldelay="0" width="100%" left="10" top="0">
                <div>
                    <?php
                        $link=  mysqli_connect('localhost', 'root', '', 'pctresearchgroup');
                        $sql="SELECT * FROM news";
                        $result=  mysqli_query($link, $sql);
                            while($row=  mysqli_fetch_assoc($result)){
                                if($row["active"]=='Y' AND $row["inactiveDate"]>=Date("Y-m-d")){
                                    echo '<p><img src="img/icon news.png" width="15" height="15"><b><u>'.$row["subject"].'</u></b>'.$row["description"].'</p>';
                                }
                            }
                        ?>
                    </div>
                </marquee>
                <a href="Newsh.php">View More Details</a>
            </div>

            <div id="Research-Contributions" class="col-md-7">
                <h3><strong>Research Contributions</strong></h3>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis in nunc vel cursus. Proin
                    elementum pellentesque laoreet. Nam vitae orci ullamcorper, luctus justo ac, dapibus ipsum. Nam
                    laoreet, sem in luctus dapibus, tellus enim luctus ex, nec aliquet enim nulla sit amet lectus. In
                    hac habitasse platea dictumst. Maecenas lectus massa, semper nec lacinia ac, mollis vel leo. Nulla
                    vestibulum volutpat sapien quis viverra. Etiam vitae elementum sapien, sed finibus odio. Sed sed
                    commodo neque.

                    Donec in orci enim. Curabitur vel nunc id tellus suscipit pulvinar elementum nec massa. Donec vitae
                    libero id nunc hendrerit ullamcorper eu dapibus odio. Aliquam a libero scelerisque, mollis massa a,
                    consequat dui. Suspendisse enim lacus, blandit quis semper in, imperdiet non odio. Mauris a sem at
                    quam tincidunt ullamcorper. Fusce ac porttitor turpis. Integer in scelerisque tellus. Pellentesque
                    tempus sit amet libero quis gravida.
                </p>
            </div>


            <div id="Events" class="col-md-4">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><a href="Events.html" target="_self"><strong>Events</strong></a></li>
                </ul>
                <marquee direction="up" onMouseOver="this.stop();" onMouseOut="this.start();" height="180" scrollamount="3" scrolldelay="0" width="100%" left="10" top="0">
                    <div>
                        <?php
                            $link=  mysqli_connect('localhost', 'root', '', 'pctresearchgroup');
                            $sql="SELECT * FROM news";
                            $result=  mysqli_query($link, $sql);
                                while($row=  mysqli_fetch_assoc($result)){
                                    if($row["active"]=='Y' AND $row["inactiveDate"]>=Date("Y-m-d")){
                                    echo '<p><img src="img/icon news.png" width="15" height="15"><b><u>'.$row["subject"].'</u></b>'.$row["description"].'</p>';
                                }
                            }
                        ?>
                    </div>
                </marquee>
                <a href="Events.php">View More Details</a>
            </div>

            <div id="Opportunities" class="col-md-7">
                <h3><strong>Opportunities</strong></h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis in nunc vel cursus. Proin
                    elementum pellentesque laoreet. Nam vitae orci ullamcorper, luctus justo ac, dapibus ipsum. Nam
                    laoreet, sem in luctus dapibus, tellus enim luctus ex, nec aliquet enim nulla sit amet lectus. In
                    hac habitasse platea dictumst. Maecenas lectus massa, semper nec lacinia ac, mollis vel leo. Nulla
                    vestibulum volutpat sapien quis viverra. Etiam vitae elementum sapien, sed finibus odio. Sed sed
                    commodo neque.

                    Donec in orci enim. Curabitur vel nunc id tellus suscipit pulvinar elementum nec massa. Donec vitae
                    libero id nunc hendrerit ullamcorper eu dapibus odio. Aliquam a libero scelerisque, mollis massa a,
                    consequat dui. Suspendisse enim lacus, blandit quis semper in, imperdiet non odio. Mauris a sem at
                    quam tincidunt ullamcorper. Fusce ac porttitor turpis. Integer in scelerisque tellus. Pellentesque
                    tempus sit amet libero quis gravida.
                </p>
            </div>
            <div id="Tweets" class="col-md-4" style="">
                <h3><strong>Tweets</strong></h3>
                <a class="twitter-timeline" href="https://twitter.com/twitter" data-widget-id="619794175991549953"
                   height="300">Tweets by @twitter</a>
                <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + "://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, "script", "twitter-wjs");</script>
            </div>
        </div>
        <div style="clear:both;">
        </div>
        <!--<div class="container">
            <div class="col-md">
                <div class="well well-lg">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="//placehold.it/180x100" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                            Some text here
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        </div>
    </div>
</div>

        <?php include('footer.php');?>
</div>
</div>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
                function () {
                    (b[l].q = b[l].q || []).push(arguments)
                });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>
