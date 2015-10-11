<div id="menu">
    <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
        <div class="container-fluid">
            <div class="row" style="margin: 30px">
                <div class="col-md-3    ">
                    <a href="researcher.php"><img src="img/Logo1.png" width="300px" height="50px;"></a>
                </div>
                <div class="col-md-8"> 
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="researcher.php">My Profile</a></li>
                        <li><a href="res_qualification.php">My Qualification</a></li>
                        <li><a href="res_publications.php">My Publications</a></li>
                        <li><a href="res_studentProject.php">Student Projects</a></li>
                        <li><a href="res_academicresources.php">Academic Resources</a></li>
                    </ul>
                </div>
                <div class="col-md-1">
                    <div style="width:50px; height:50px; border:solid">
                        <a href="?logout" data-toggle="tooltip" title="Logout"><img src="img/male.png" width="50" height="50"></a>
                    </div>
                    <?php include 'Related-Data/Researcher/logout.php'; ?>
                </div>
            </div>
        </div>
    </nav>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    });
</script>