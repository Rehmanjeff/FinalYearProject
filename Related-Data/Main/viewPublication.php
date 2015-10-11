<!--
    SHOW JOURNAL PUBLICAITON
!-->

<?php

if(isset($_GET["year"])){
    echo '<h3>All Publications in the Year '.$_GET["year"].'</h3>';
    $cCondition=" WHERE conf_year = ".$_GET["year"];
    $jCondition=" WHERE journal_year = ".$_GET["year"];
}
else if(isset ($_GET["journal"])){
    echo '<h3>All Journal Publications</h3>';
    $cCondition=" WHERE conf_year = 1900";
    $jCondition="";
}else if(isset ($_GET["conference"])){
    echo '<h3>All Conference Publications</h3>';
    $cCondition="";
    $jCondition=" WHERE journal_year = 1900";
}
else{
    echo '<h3>All Publications</h3>';
    $cCondition="";
    $jCondition="";
}
     $sql="SELECT * FROM journalpublication".$jCondition;
    $result=  mysqli_query($link, $sql);
    while($row=  mysqli_fetch_assoc($result))
    {
        // It checks weather Impact Factor is empty or not
        if(!empty($row["journal_IF"]))
            $IF='IF#: '.$row["journal_IF"].' , ';
        else
            $IF=' ';
        // It checks weather ISSN is empty or not
        if(!empty($row["journal_ISSN"]))
            $ISSN='ISSN#: '.$row["journal_ISSN"].' , ';
        else
            $ISSN=' ';
        
        
echo '  <div class="row infoTab">
            <div class="col-md-11">
                <p>'.$row["journal_authors"].' ( '.$row["journal_year"].' ), '.$row["journal_title"].' , '.$row["journal_name"].',
                Volume #'.$row["journal_volume"].' , Issue # '.$row["journal_issue"].' '.$IF.''. $ISSN.'
                , Pages: '.$row["journal_pages"].' ,'
                . '<br/>doi#:<a href=""> '.$row["journal_doi"].'</a></p>
            </div>
        </div>';
echo '<center><img src="img/linebreak.jpg" width"100%"></center> ';
    }
    
    
$sql="SELECT * FROM conferencepublication".$cCondition;
    $result=  mysqli_query($link, $sql);
    while($row=  mysqli_fetch_assoc($result))
    {
        // It checks weather Impact Factor is empty or not
        if(!empty($row["journal_IF"]))
            $IF='IF#: '.$row["journal_IF"].' , ';
        else
            $IF=' ';
        // It checks weather ISSN is empty or not
        if(!empty($row["journal_ISSN"]))
            $ISSN='ISSN#: '.$row["journal_ISSN"].' , ';
        else
            $ISSN=' ';
        
        
echo '  <div class="row infoTab">
            <div class="col-md-11">
                <p>'.$row["conf_author"].' ( '.$row["conf_year"].' ), '.$row["conf_title"].' , '.$row["conf_name"].',
                '.$row["conf_city"].' , '.$row["conf_country"].'
                '.$row["conf_month"].' , '.$row["conf_year"].' ,' .$row["conf_page"].'</a></p>
            </div>
        </div>';
        echo '<center><img src="img/linebreak.jpg" width"100%"></center> ';
    }