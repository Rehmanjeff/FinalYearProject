<?php $link=  mysqli_connect('localhost', 'root', '', 'pctresearchgroup')?>
<?php
    $sql="SELECT * FROM basicdata";
    $result=  mysqli_query($link, $sql);
    $brand=  mysqli_fetch_assoc($result);
?>
 <div class="row">
        <div id="menu" class="col-md">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <!-- The Logo button & menu toggle button-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1>
                    <?php echo '<a href="#" class="navbar-brand">'.$brand["title"].'</a>';?></h1>
                </div>
                <!--End button & logo -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar">
                        <li>
                            <a href="index.php" target="_self"><span class="glyphicon glyphicon-home"></span> Home</a>
                            &nbsp;&nbsp;
                        </li>

                        <li>
                            <a href="index.php" target="_self"><span class="glyphicon glyphicon-globe"></span> Research</a>
                            &nbsp;&nbsp;
                        </li>

                        <li>
                            <a href="publications.php" target="_self"><span class="glyphicon glyphicon-list-alt"></span>
                                Publications</a>&nbsp;&nbsp;&nbsp;
                        </li>

                        <li>
                            <a href="projects.php" target="_self"><span class="glyphicon glyphicon-book"></span> Projects</a>&nbsp;&nbsp;&nbsp;
                        </li>

                        <li>
                            <a href="Events.php" target="_self"><span class="glyphicon glyphicon-calendar"></span>Events</a>&nbsp;&nbsp;&nbsp;
                        </li>

                        <li>
                            <a href="news.php" target="_self"><span class="glyphicon glyphicon-calendar"></span>
                                News</a>&nbsp;&nbsp;&nbsp;
                        </li>

                        <li>
                            <a href="Profiles_View.php" target="_self"><span class="glyphicon glyphicon-user"></span> Knowledge
                                Power </a>&nbsp;&nbsp;&nbsp;
                        </li>

                        <li>
                            <a href="index.php" target="_self"><span class="glyphicon glyphicon-alt"></span> About
                                Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>