<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Publications | Research Group</title>

    <!--[if lt IE 9]>
    <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
    <![endif]-->
        <?php include('headerScript.php');?>
        <link rel="stylesheet" href="css/publications.css">
</head>
<body>
    <header>
        <?php include('header.php');?>
    </header>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h3>Search</h3>
            <div class="form-group">
                <label for="selectYear">Search by Year:</label>
                <select id="selectYear" style="width:auto;" class="form-control selectWidth">
                    @for ($i = 1900; $i <= 2015; $i++)
                    <option class="">{{$i}}</option>
                    @endfor
                </select>

                <label for="selectField">Area of Research</label>
                <select id="selectField" style="width: auto" class="form-control selectWidth">
                    <option>HCI</option>
                </select>
            </div>
        </div>

        <div class="col-md-8">
            <div id="publication_section">
                <h3>Publications</h3>

                <div class="row">
                    <div class="col-md-7">
                        <div id="project_name">
                            <h3>Project Name <small>(Supervisor)</small></h3>
                            <ledgend>HCI</ledgend>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis in nunc vel cursus.
                        Proin elementum pellentesque laoreet. Nam vitae orci ullamcorper, luctus justo ac, dapibus ipsum.
                        Nam laoreet, sem in luctus dapibus, tellus enim luctus ex, nec aliquet enim nulla sit amet lectus.
                        In hac habitasse platea dictumst. Maecenas lectus massa, semper nec lacinia ac, mollis vel leo.
                        Nulla vestibulum volutpat sapien quis viverra. Etiam vitae elementum sapien, sed finibus odio.
                        Sed sed commodo neque.
                    </p>
                    </div>
                </div>
                <hr>


                <div class="row">
                    <div class="col-md-7">
                        <div id="project_name">
                            <h3>Project Name <small>(Supervisor)</small></h3>
                            <ledgend>HCI</ledgend>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis in nunc vel cursus.
                            Proin elementum pellentesque laoreet. Nam vitae orci ullamcorper, luctus justo ac, dapibus ipsum.
                            Nam laoreet, sem in luctus dapibus, tellus enim luctus ex, nec aliquet enim nulla sit amet lectus.
                            In hac habitasse platea dictumst. Maecenas lectus massa, semper nec lacinia ac, mollis vel leo.
                            Nulla vestibulum volutpat sapien quis viverra. Etiam vitae elementum sapien, sed finibus odio.
                            Sed sed commodo neque.
                        </p>
                    </div>
                </div>
                <hr>


                <div class="row">
                    <div class="col-md-7">
                        <div id="project_name">
                            <h3>Project Name <small>(Supervisor)</small></h3>
                            <ledgend>HCI</ledgend>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis in nunc vel cursus.
                            Proin elementum pellentesque laoreet. Nam vitae orci ullamcorper, luctus justo ac, dapibus ipsum.
                            Nam laoreet, sem in luctus dapibus, tellus enim luctus ex, nec aliquet enim nulla sit amet lectus.
                            In hac habitasse platea dictumst. Maecenas lectus massa, semper nec lacinia ac, mollis vel leo.
                            Nulla vestibulum volutpat sapien quis viverra. Etiam vitae elementum sapien, sed finibus odio.
                            Sed sed commodo neque.
                        </p>
                    </div>
                </div>
                <hr>


                <div class="row">
                    <div class="col-md-7">
                        <div id="project_name">
                            <h3>Project Name <small>(Supervisor)</small></h3>
                            <ledgend>HCI</ledgend>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis mollis in nunc vel cursus.
                            Proin elementum pellentesque laoreet. Nam vitae orci ullamcorper, luctus justo ac, dapibus ipsum.
                            Nam laoreet, sem in luctus dapibus, tellus enim luctus ex, nec aliquet enim nulla sit amet lectus.
                            In hac habitasse platea dictumst. Maecenas lectus massa, semper nec lacinia ac, mollis vel leo.
                            Nulla vestibulum volutpat sapien quis viverra. Etiam vitae elementum sapien, sed finibus odio.
                            Sed sed commodo neque.
                        </p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
</body>
</html>