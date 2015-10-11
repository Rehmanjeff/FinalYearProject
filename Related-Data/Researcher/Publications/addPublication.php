<?php

echo '<div class="tab-content">';
if(!isset($_GET["editConference"])){
    $cTitle="";
    $cYear="";
    $cMonth="";
    $cPage="";
    $cAuthor="";
    $cName="";
    $cCity="";
    $cCountry="";
    $cButton="Add Paper";
    $cBtnName="addConference";
}
else{
    $sql="SELECT * FROM conferencepublication WHERE conf_id =".$_GET["editConference"];
    $result=  mysqli_query($link, $sql);
    $conf=  mysqli_fetch_assoc($result);
    $cTitle=$conf["conf_title"];
    $cYear=$conf["conf_year"];
    $cMonth=$conf["conf_month"];
    $cPage=$conf["conf_page"];
    $cAuthor=$conf["conf_author"];
    $cName=$conf["conf_name"];
    $cCity=$conf["conf_city"];
    $cCountry=$conf["conf_country"];
    $cButton="Update Paper";
    $cBtnName="updateConference";
}
    echo '<div id="home" class="tab-pane fade in active">
        <form action="" method="POST">
            <br/>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Paper Title" class="form-control" name="title" value="'.$cTitle.'"/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" placeholder="YYYY" class="form-control" name="year" value="'.$cYear.'" />
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="Month" class="form-control" name="month" value="'.$cMonth.'"/>
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="Pages (From - To)" class="form-control" name="page" value="'.$cPage.'"/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Authors" class="form-control" name="author" value="'.$cAuthor.'"/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Conference" class="form-control" name="conferenceName" value="'.$cName.'"/>
                </div>
                
            </div><br/>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" placeholder="City" class="form-control" name="city" value="'.$cCity.'"/>
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Country" class="form-control" name="country" value="'.$cCountry.'"/>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" name="'.$cBtnName.'" class="btn btn-primary" style="float: right"><span class="glyphicon glyphicon-plus"></span>'.$cButton.'</button>     
                </div>
            </div>
        </form>
    </div>';

if(!isset($_GET["editJournal"])){
    $jTitle="";
    $jYear="";
    $jVolume="";
    $jIssue="";
    $jName="";
    $jISSN="";
    $jPage="";
    $jIF="";
    $jAuthor="";
    $jDOI="";
    $active="";
    $jButton="Add Paper";
    $jBtnName="addJournal";
}
else{
    $sql="SELECT * FROM journalpublication WHERE journal_id =".$_GET["editJournal"];
    $result=  mysqli_query($link, $sql);
    $journal=  mysqli_fetch_assoc($result);
    $jTitle=$journal["journal_title"];
    $jYear=$journal["journal_year"];
    $jVolume=$journal["journal_volume"];;
    $jIssue=$journal["journal_issue"];;
    $jName=$journal["journal_name"];;
    $jISSN=$journal["journal_ISSN"];;
    $jPage=$journal["journal_pages"];;
    $jIF=$journal["journal_IF"];;
    $jAuthor=$journal["journal_authors"];;
    $jDOI=$journal["journal_doi"];
    $active="active";
    $jButton="Update Paper";
    $jBtnName="updateJournal";
}

    echo '<div id="menu1" class="tab-pane fade '.$active.'">
        <form action="" method="POST"><br/>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Title" name="title" class="form-control" value="'.$jTitle.'"/>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" placeholder="YYYY" name="year" class="form-control" value="'.$jYear.'"/>
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="Volume" name="volume" class="form-control" value="'.$jVolume.'"/>
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="Issue" name="issue" class="form-control" value="'.$jIssue.'"/>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Name of Journal" class="form-control" name="name" value="'.$jName.'"/>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-md-4">
                    <input type="text" placeholder="ISSN#" class="form-control" name="ISSN" value="'.$jISSN.'"/>
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="Pages (from - To)" class="form-control" name="page" value="'.$jPage.'"/>
                </div>
                <div class="col-md-4">
                    <input type="text" placeholder="I.F" class="form-control" name="IF" value="'.$jIF.'"/>
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" placeholder="Name of Authors" class="form-control" name="author" value="'.$jAuthor.'"/>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" value="http://dx.doi.org/" class="form-control" name="doi" value="'.$jDOI.'"/>
                </div>
            </div><br/>
            <div class="row">
                <div class="col-md-8">
                    <label><input type="checkbox" value="Y">Is In Press?</label>
                </div>
                <button type="submit" name="'.$jBtnName.'" class="btn btn-primary" style="float: right"><span class="glyphicon glyphicon-plus"></span>'.$jButton.'</button>    
            </div>
            
        </form>
            
    </div>
</div>';
?>