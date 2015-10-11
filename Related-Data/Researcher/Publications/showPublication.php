<!--
    SHOW JOURNAL PUBLICAITON
!-->

<?php
echo '<h3>My Journal Publications</h3>';
$sql="SELECT * FROM journalpublication WHERE userId_FK = ".$FK;
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
            <div class="col-md-1">
                <div class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-chevron-down" style="float: right"></span></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?editJournal='.$row["journal_id"].'">Edit</a></li>
                        <li><a href="?deleteJournal='.$row["journal_id"].'">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>';
    }
    
    
    echo '<h3>My Conference Publications</h3>';
$sql="SELECT * FROM conferencepublication  WHERE userId_FK = ".$FK;
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
            <div class="col-md-1">
                <div class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-chevron-down" style="float: right"></span></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="?editConference='.$row["conf_id"].'">Edit</a></li>
                        <li><a href="?deleteConference='.$row["conf_id"].'">Delete</a></li>
                    </ul>
                </div>
            </div>
        </div>';
    }