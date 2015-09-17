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
        <div class="row" id="inner_row">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="active"><a href=".biography" role="tab" data-toggle="tab">Biography</a></li>
                <li><a href=".profile" role="tab" data-toggle="tab">Academic Resource</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active biography">
                    <div class="row" id="first_row">
                        <br>
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
                                            <option>Assistant Professor</option>
                                            <option>Senior Lecturer</option>
                                            <option>Lecturer</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="comment">About Yourself:</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="second_row">
                        <br>
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
                                <button type="button" class="btn btn-info btn-primary glyphicon-plus" data-toggle="modal" data-target="#myModal"> Publication </button>
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">News Update</h4>
                                            </div>

                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="usr">Title:</label>
                                                    <input type="text" class="form-control" id="usr">
                                                </div>
                                                <br>

                                                <div class="form-group">
                                                    <label for="comment">Description: </label>
                                                    <textarea class="form-control" rows="5" id="comment"></textarea>
                                                </div>

                                                <div class='col-md-6' style="float: left;">
                                                    <div class="form-group">
                                                        <label class="control-label" for="exampleInputEmail">Pick Date:</label>
                                                        <input name="DATEFROM" id="dateFrom" type="date" class="form-control" />
                                                    </div>

                                                    <script type="text/javascript">
                                                        $(document).ready(function ()
                                                        {
                                                            $('#dateFrom').datepicker({
                                                                format: "dd/mm/yyyy",
                                                                orientation: "top"});
                                                        });
                                                    </script>
                                                    <br><br><br><br>
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
                        <br>
                            <div class="save_btn">
                                <button class="btn btn-group-sm btn-success">Save</button>
                            </div>
                        </div>
                    </div>
                <div class="tab-pane profile">
                    profile
                </div>
                </div>
            <hr>
            </div>
        </div>
    </body>
</html>