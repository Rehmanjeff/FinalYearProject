<html>
<head>
    <?php include("headerScript.php");?>
</head>

<body>
    <header>
        <?php include('header.php'); ?>
    </header>

    <div class="container" id="main_tpvs">
        <div class="col-md">
            <div class="row">
            <br>
            <div id="first_row">
                <div class="col-md-2">
                    <img src="http://www.w3schools.com/bootstrap/cinqueterre.jpg" class="img-circle" alt="Cinque Terre">
                </div>
                <div class="col-md-2">
                    <div id="teacher_name_position_website">
                        <form role="form">
                            <div class="form-group">
                                <label>Name:&nbsp;</label><name>abcdef</name>
                            </div>
                            <div class="form-group">
                                <label>Position:&nbsp;</label><position>Professor</position>
                            </div>
                            <div class="form-group">
                                <label>Profile:&nbsp;</label><profile>Professor</profile>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="contact_info">
                        <h4>Contact Information</h4>

                        <div id="contact_name">
                            <form role="form">
                                <div class="form-group">
                                    <label>Email Address:&nbsp;</label><name>abcdef</name>
                                </div>
                                <div class="form-group">
                                    <label>Phone :&nbsp;</label><position>Professor</position>
                                </div>
                                <div class="form-group">
                                    <label>Fax :&nbsp;</label><profile>Professor</profile>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <br>
                <div class="col-md-3" id="subjects">
                    <h3>Subjects</h3>
                    <div id="subject_add">
                        <?php include ('Back_View/subject_add.php');?>
                    </div>
                    <div id="subject_display">
                        <ol>
                            <li><a href="#">Software Engineering</a></li>
                            <li><a href="#">Artificial Intelligence</a></li>
                            <li><a href="#">Mobile Application</a></li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-6" id="teacher_lecture">
                    <h3>Lecture Contents</h3>
                    <ul>
                        <li>Lecture 1</li>
                        <li>Lecture 2</li>
                        <li>Lecture 3</li>
                        <li>Lecture 2</li>
                        <li>Lecture 3</li>
                    </ul>
                </div>
                <div class="col-md-3" id="teacher_timings">
                    <h3>Timing</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>