<html xmlns="http://www.w3.org/1999/html">
<head>
    <?php include('headerScript.php'); ?>
</head>
<body>
        <?php include 'Related-Data/Researcher/research/editPersonalInfo.php'; ?>
        <?php include 'Related-Data/Researcher/research/queryUserInfo.php'; ?>
<div class="container">
    <div class="col-md">
        <div class="row">
            <header>
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
                                <h1><a href="#" class="navbar-brand"><strong>PCT Research Group</strong></a></h1>
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
                                        <a href="publications.html" target="_self"><span class="glyphicon glyphicon-list-alt"></span>
                                            Publications</a>&nbsp;&nbsp;&nbsp;
                                    </li>

                                    <li>
                                        <a href="projects.html" target="_self"><span class="glyphicon glyphicon-book"></span> Projects</a>&nbsp;&nbsp;&nbsp;
                                    </li>

                                    <li>
                                        <a href="news.php" target="_self"><span class="glyphicon glyphicon-calendar"></span>Events</a>&nbsp;&nbsp;&nbsp;
                                    </li>

                                    <li>
                                        <a href="news.php" target="_self"><span class="glyphicon glyphicon-calendar"></span>
                                            News</a>&nbsp;&nbsp;&nbsp;
                                    </li>

                                    <li>
                                        <a href="Profiles_View.html" target="_self"><span class="glyphicon glyphicon-user"></span> Knowledge
                                            Power </a>&nbsp;&nbsp;&nbsp;
                                    </li>

                                    <li>
                                        <a href="index.html" target="_self"><span class="glyphicon glyphicon-alt"></span> About
                                            Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
        <div>
        </div>
    </div>
    <div class="row" id="All_nav_pills" style="margin-top:70px;">
        <br>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href=".biography" role="tab" data-toggle="tab">Biography</a></li>
            <li><a href=".publication" role="tab" data-toggle="tab">Publications</a></li>
            <li><a href=".qualification" role="tab" data-toggle="tab">Qualification</a></li>
            <li><a href=".supervision" role="tab" data-toggle="tab">Supervision</a></li>
            <li><a href=".projects" role="tab" data-toggle="tab">Projects</a></li>
            <li><a href=".awards" role="tab" data-toggle="tab">Awards</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active biography">
                <div class="row" id="inner_row">
                    <br>
                    <div id="first_row">
                        <div class="col-md-2">
                            <img src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" class="img-circle" alt="Cinque Terre">
                        </div>
                        <div class="col-md-2">
                            <div id="name_position_select">
                                <form role="form">
                                    <div class="form-group">
                                        <label for="usr">Name:</label>
                                        <input type="text" class="form-control" id="usr">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Position:</label>
                                        <select id="pwd">
                                            <option>Professor</option>
                                            <option>Associate Professor</option>
                                            <option>Senior Lecturer</option>
                                            <option>Lecturer</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="contact_info">
                                <h4>Contact Information</h4>
                                <div id="contact_name">
                                    <input type="email" placeholder="Enter Email Address" class="form-control" id=""><br>
                                    <input type="number" placeholder="Enter Phone Number" class="form-control" id=""><br>
                                    <input type="number" placeholder="Enter Fax" class="form-control" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="second_row">
                    <br>
                    <div>
                        <h3>About Yourself: </h3>
                        <div class="form-group">
                            <label for="comment"></label>
                            <textarea class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <div class="save_btn">
                    <button class="btn btn-group-sm btn-success">Save</button>
                </div>
            </div>
            <div class="tab-pane projects">
                <div class="row">
                    <br>
                    <div class="col-md">
                        <div class="projects_backend">
                            <div id="nav_projects_outer" class="col-md-9">
                                <div id="all_done" class="col-md-8">
                                    <div id="project_name">
                                        <h3>Project Name <small>(Supervisor)</small></h3>
                                    </div>
                                    <div style="clear: both;"></div>
                                    <div id="setup-ofi-1">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis in nunc vel cursus.
                                        Proin elementum pellentesque laoreet. Nam vitae orci ullamcorper, luctus justo ac, dapibus ipsum.
                                        Nam laoreet, sem in luctus dapibus, tellus enim luctus ex, nec aliquet enim nulla sit amet lectus.
                                        In hac habitasse platea dictumst. Maecenas lectus massa, semper nec lacinia ac, mollis vel leo.
                                        Nulla vestibulum volutpat sapien quis viverra. Etiam vitae elementum sapien, sed finibus odio.
                                        Sed sed commodo neque.
                                    </div>

                                    <br>
                                    <div style="border:1px black solid;" class="col-md-7">
                                        <p><strong> Sponsor name </strong></p>
                                    </div>
                                    <div><span class="label label-success">Done</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane qualification">
                <div class="col-md">pu
                    <div class="row">
                        <br>
                        <div class="col-md-3">
                            <h3>Qualification</h3>
                        </div>
                    </div>
                    <div class="row">
                        <br>
                        <div class="col-md-2">
                            <div id="select_degree">
                                <form role="form">
                                    <div class="form-group">
                                        <select>
                                            <option>Ph.D</option>
                                            <option>MS</option>
                                            <option>BS</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="">
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <div class="col-md-2">
                                <div id="select_ending_year">
                                    <form role="form">
                                        <div class="form-group">
                                            <select>
                                                <option>Continued</option>
                                                <option>2015</option>
                                                <option>2014</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane publication">
                <div class="row" id="Third_row">
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Publications</h3>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h4>Description:</h4>
                        <div id="closeable-ofi">
                            Building on our earlier work and that of Son, we construct string theory duals of non-relativistic critical phenomena at finite temperature and density. Concretely, we find black hole solutions of type IIB supergravity whose asymptotic geometries realize the Schroedinger group as isometries. <span class="more-details">We then identify the non-relativistic conformal field theories to which they are dual. We analyze the thermodynamics of these black holes, which turn out to describe the system at finite temperature and finite density. The strong-coupling result for the shear viscosity of the dual non-relativistic field theory saturates the KSS bound.</span>
                        </div>
                        <span class="sub-searchBlue"><a id="setup-ofi-2" href="#">Show Details &#x25BC;</a></span>
                        <br>
                        <br>
                        <strong>Website Link:</strong> <a href="http://arxiv.org/abs/0807.1111">A. Adams, K. Balasubramanian, J. McGreevy</a>
                    </div>
                </div>
            </div>
            <div class="tab-pane supervision">
                <br>
                <div class="row">
                    <div class="col-md">
                        <h3>Supervision</h3>
                        <form role="form">
                            <div class="radio">
                                <label><input type="radio" name="optradio">Available</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio">Not Available</label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <h3>Supervised Projects</h3>
                        <div id="nav_projects_outer" class="col-md-9">
                            <div id="all_done" class="col-md-8">
                                <div id="project_name">
                                    <h3>Project Name <small>(Supervisor)</small></h3>
                                </div>
                                <div style="clear: both;"></div>
                                <div id="setup-ofi-3">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis in nunc vel cursus.
                                    Proin elementum pellentesque laoreet. Nam vitae orci ullamcorper, luctus justo ac, dapibus ipsum.
                                    Nam laoreet, sem in luctus dapibus, tellus enim luctus ex, nec aliquet enim nulla sit amet lectus.
                                    In hac habitasse platea dictumst. Maecenas lectus massa, semper nec lacinia ac, mollis vel leo.
                                    Nulla vestibulum volutpat sapien quis viverra. Etiam vitae elementum sapien, sed finibus odio.
                                    Sed sed commodo neque.
                                </div>

                                <br>
                                <div style="border:1px black solid;" class="col-md-7">
                                    <p><strong> Sponsor name </strong></p>
                                </div>
                                <div><span class="label label-success">Done</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>
</body>
</html>