<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects | Research Group</title>
    <?php include('headerScript.php');?>
    <link rel="stylesheet" href="css/projects.css">
</head>
<body>
    <header>
        <?php include('header.php');?>
    </header>
<div class="container">
    <div class="row">
        <div id="research_side_nav" class="col-md-3">
            <h3>Areas of Research</h3>
            <div id="projects_name">
                <ol>
                    <li>Area 1</li>
                    <li>Area 2</li>
                    <li>Area 2</li>
                    <li>Area 2</li>
                    <li>Area 2</li>
                    <li>Area 2</li>
                </ol>
            </div>
        </div>
        <div id="research_projects" class="col-md-9">
            <h3>Research and Development Projects</h3>
            <div id="inner_projects" class="col-md-9">
                <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#all_done" target="_self">All</a></li>
                        <li role="presentation"><a href="#" target="_self">Done <span class="badge">3</span></a></li>
                        <li role="presentation"><a href="#" target="_self">In Progress</a></li>
                </ul>
            </div>
        </div>
        <div id="nav_projects_outer" class="col-md-9">
            <div id="all_done" class="col-md-8">
                <div id="project_name">
                    <h3>Project Name <small>(Supervisor)</small></h3>
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
</body>
</html>