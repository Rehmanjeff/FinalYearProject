<html>
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Research Group</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <script src="js/jquery.min.js"></script>
    <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<body>
<header>
    <?php require_once('header.php');?>
</header>
<div class="container" style="margin-top: 200px;">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="active"><a href=".home" role="tab" data-toggle="tab">Home</a></li>
        <li><a href=".profile" role="tab" data-toggle="tab">Profile</a></li>
        <li><a href=".messages" role="tab" data-toggle="tab">Messages</a></li>
        <li><a href=".settings" role="tab" data-toggle="tab">Settings</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active home">home
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div></div>
        <div class="tab-pane profile">profile
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row" id="Third_row">
                <br>
                <div class="row">
                    <div class="col-md-3" style="text-align:">
                        <h3>Publications</h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row" id="Third_row">
                        <br>
                        <div class="row">
                            <div class="col-md-3" style="text-align:">
                                <h3>Publications</h3>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4>Description:</h4>
                            <div id="closeable-ofi">
                                Building on our earlier work and that of Son, we construct string theory duals of non-relativistic critical phenomena at finite temperature and density. Concretely, we find black hole solutions of type IIB supergravity whose asymptotic geometries realize the Schroedinger group as isometries. We then identify the non-relativistic conformal field theories to which they are dual. We analyze the thermodynamics of these black holes, which turn out to describe the system at finite temperature and finite density. The strong-coupling result for the shear viscosity of the dual non-relativistic field theory saturates the KSS bound.
                            </div>
                            <span class="sub-searchBlue"><a id="setup-ofi" href="javascript:;"> Show Details &#x25BC;</a></span>
                            <script>
                                $("#setup-ofi").click(function() {
                                    if ($("#closeable-ofi").css('height') === "50px") {
                                        $("#closeable-ofi").animate({'height': '100px'}, function(){
                                            $("#setup-ofi").text("Hide Details \u25b2");
                                        });
                                    } else {
                                        $("#closeable-ofi").animate({'height': '50px'}, function(){
                                            $("#setup-ofi").text("Show Details \u25bc");
                                        });
                                    }
                                });
                            </script>
                            <br>
                            <br>
                            <strong>Website Link:</strong><a href="http://arxiv.org/abs/0807.1111">A. Adams, K. Balasubramanian, J. McGreevy</a>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        <div class="tab-pane messages">messages
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div></div>
        <div class="tab-pane settings">settings</div>
    </div>


    <hr>
</div>
</body>
</html>


<br>
<div class="row">
    <div class="col-md-3" style="text-align:">
        <h3>Publications</h3>
    </div>
</div>
<div class="row">
    <br>
    <div id="add_publications_button">
        <button type="button" style = " " class="btn btn-sm btn-primary glyphicon-plus" data-toggle="modal" data-target="#myModal"> Publication </button>
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
    </div>
</div>

<div class="row" id="Third_row">
    <br>
    <div class="row">
        <div class="col-md-3" style="text-align:">
            <h3>Publications</h3>
        </div>
    </div>
    <div class="col-md-8">
        <div class="row" id="Third_row">
            <br>
            <div class="row">
                <div class="col-md-3" style="text-align:">
                    <h3>Publications</h3>
                </div>
            </div>
            <div class="col-md-8">
                <h4>Description:</h4>
                <div id="closeable-ofi">
                    Building on our earlier work and that of Son, we construct string theory duals of non-relativistic critical phenomena at finite temperature and density. Concretely, we find black hole solutions of type IIB supergravity whose asymptotic geometries realize the Schroedinger group as isometries. We then identify the non-relativistic conformal field theories to which they are dual. We analyze the thermodynamics of these black holes, which turn out to describe the system at finite temperature and finite density. The strong-coupling result for the shear viscosity of the dual non-relativistic field theory saturates the KSS bound.
                </div>
                <span class="sub-searchBlue"><a id="setup-ofi" href="javascript:;"> Show Details &#x25BC;</a></span>
                <script>
                    $("#setup-ofi").click(function() {
                        if ($("#closeable-ofi").css('height') === "50px") {
                            $("#closeable-ofi").animate({'height': '100px'}, function(){
                                $("#setup-ofi").text("Hide Details \u25b2");
                            });
                        } else {
                            $("#closeable-ofi").animate({'height': '50px'}, function(){
                                $("#setup-ofi").text("Show Details \u25bc");
                            });
                        }
                    });
                </script>
                <br>
                <br>
                <strong>Website Link:</strong><a href="http://arxiv.org/abs/0807.1111">A. Adams, K. Balasubramanian, J. McGreevy</a>
            </div>
        </div>
    </div>
</div>