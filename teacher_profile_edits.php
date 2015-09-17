<html>
<head>
    <?php include('headerScript.php'); ?>
</head>
<body>
    <div class="container">
        <div class="col-md">
            <div class="row">
                <header>
                    <?php include('header.php'); ?>
                </header>
            </div>
            <div>
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
                                        <input type="text" class="form-control" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Position:</label>
                                        <select>
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
                </div>
            </div>
        <div class="row" id="">
            <br>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href=".biography" role="tab" data-toggle="tab">Biography</a></li>
                <li><a href=".publication" role="tab" data-toggle="tab">Publications</a></li>
                <li><a href=".supervision" role="tab" data-toggle="tab">Supervision</a></li>
                <li><a href=".projects" role="tab" data-toggle="tab">Projects</a></li>
                <li><a href=".awards" role="tab" data-toggle="tab">Awards</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active biography">
                    <div class="row" id="second_row">
                        <br>
                        <div>
                            <h3>About Yourself: </h3>
                            <div class="form-group">
                                <label for="comment"></label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3" style="text-align:">
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
                        <div class="row">
                            <div class="col-md">
                                <div class="projects_backend">
                                    <h3>Projects: </h3>
                                    <div id="nav_projects_outer" class="col-md-9">
                                        <div id="all_done" class="col-md-8">
                                            <div id="project_name">
                                                <h4>Project Name <small>(Supervisor)</small></h4>
                                                <h4>HCI</h4>
                                            </div>
                                            <div style="clear: both;"></div>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis in nunc vel cursus.
                                                Proin elementum pellentesque laoreet. Nam vitae orci ullamcorper, luctus justo ac, dapibus ipsum.
                                                Nam laoreet, sem in luctus dapibus, tellus enim luctus ex, nec aliquet enim nulla sit amet lectus.
                                                In hac habitasse platea dictumst. Maecenas lectus massa, semper nec lacinia ac, mollis vel leo.
                                                Nulla vestibulum volutpat sapien quis viverra. Etiam vitae elementum sapien, sed finibus odio.
                                                Sed sed commodo neque.
                                            </p>
                                            <div style="border:1px black;" class="col-md-7">
                                                <p><strong> Sponsor name </strong></p>
                                            </div>
                                            <div><span class="label label-success">Done</span></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <br>
                            <div class="save_btn">
                                <button class="btn btn-group-sm btn-success">Save</button>
                            </div>
                        </div>
                <div class="tab-pane profile">
                    profile
                </div>
                <div class="tab-pane publication">

                    <div class="row" id="Third_row">
                        <br>
                        <div class="row">
                            <div class="col-md-3" style="text-align:">
                                <h3>Publications</h3>
                            </div>
                        </div>

                        <div class="row">
                            <br>
                            <div id="add_publications">
                                <button type="button" style = "margin-left:12px; " class="btn btn-sm btn-primary glyphicon-plus" data-toggle="modal" data-target="#myModal"> Publication </button>
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Add Publications</h4>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="comment">Description:</label>
                                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="usr">Link:</label>
                                                    <input type="text" placeholder="Provide link for publication" class="form-control" id="usr">
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-warning" data-dismiss="modal">Close</button>
                                                    <button class="btn btn-success" type="submit" data-dismiss="modal">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h4>Description:</h4>
                                    <p id="para">
                                        Building on our earlier work and that of Son, we construct string theory duals of non-relativistic critical phenomena at finite temperature and density. Concretely, we find black hole solutions of type IIB supergravity whose asymptotic geometries realize the Schroedinger group as isometries. We then identify the non-relativistic conformal field theories to which they are dual. We analyze the thermodynamics of these black holes, which turn out to describe the system at finite temperature and finite density. The strong-coupling result for the shear viscosity of the dual non-relativistic field theory saturates the KSS bound.
                                    </p>
                                    <input type="button" onclick="return toggleMe('para')" value="view more">
                                    <br><br>
                                    <strong>Website Link:</strong><a href="http://arxiv.org/abs/0807.1111">A. Adams, K. Balasubramanian, J. McGreevy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            </div>
        </div>
    </body>
</html>