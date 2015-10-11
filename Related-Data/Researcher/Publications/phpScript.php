<?php
/*****************************************************************************************************************************
 *                                              JOURNAL PAPER STARTS HERE
 ****************************************************************************************************************************/
/*****************************************************************************************************************************
 * ADDING JOURNAL PAPER
 */
if(isset($_POST["addJournal"])){
    $sql="INSERT INTO journalpublication (journal_title, journal_year, journal_volume, journal_issue, journal_name, journal_inPress,journal_ISSN, journal_IF, journal_pages, journal_authors, journal_doi, userId_FK)"
    . "VALUES ('".$_POST["title"]."','".$_POST["year"]."','".$_POST["volume"]."'"
            . ",'".$_POST["issue"]."','".$_POST["name"]."' ,'Y'"
            . ",'".$_POST["ISSN"]."','".$_POST["IF"]."','".$_POST["page"]."'"
            . ",'".$_POST["author"]."','".$_POST["doi"]."','".$FK."');";
            mysqli_query($link, $sql);
            die("<script>location.href='res_publications.php'</script>");
}
/*****************************************************************************************************************************
 * UPDATE JOURNAL PAPER
 */
if(isset($_POST["updateJournal"])){
     $sql="UPDATE journalpublication SET journal_title='".$_POST["title"]."', journal_year='".$_POST["year"]."'"
    . ", journal_volume='".$_POST["volume"]."', journal_issue='".$_POST["issue"]."', journal_name='".$_POST["name"]."'"
    . ", journal_inPress='Y',journal_ISSN='".$_POST["ISSN"]."', journal_IF='".$_POST["IF"]."'"
    . ", journal_pages='".$_POST["page"]."', journal_authors='".$_POST["author"]."', journal_doi='".$_POST["doi"]."', userId_FK='".$FK."'";
    mysqli_query($link, $sql);
    
}

/*****************************************************************************************************************************
 * DELETING JOURNAL PAPER
 */

if(isset($_GET["deleteJournal"])){
    $sql="DELETE FROM journalpublication WHERE journal_id = ".$_GET["deleteJournal"];
    mysqli_query($link, $sql);
    die("<script>location.href='res_publications.php'</script>");
}



/*****************************************************************************************************************************
 *                                              CONFERENCE PAPER STARTS HERE
 ****************************************************************************************************************************/
/*****************************************************************************************************************************
 * ADDING NEW CONFERNECE PAPER
 */

if(isset($_POST["addConference"])){
    $sql="INSERT INTO conferencepublication (conf_title, conf_year, conf_month, conf_page, conf_author, conf_name, conf_city, conf_country,userId_FK)"
    . "VALUES ('".$_POST["title"]."','".$_POST["year"]."','".$_POST["month"]."'"
            . ",'".$_POST["page"]."','".$_POST["author"]."'"
            . ",'".$_POST["conferenceName"]."','".$_POST["city"]."','".$_POST["country"]."','".$FK."');";

            mysqli_query($link, $sql);
            die("<script>location.href='res_publications.php'</script>");
}
/*****************************************************************************************************************************
 * UPDATE CONFERENCE PAPER
 */
if(isset($_POST["updateConference"])){
    $sql="UPDATE conferencepublication SET conf_title = '".$_POST["title"]."', conf_year='".$_POST["year"]."', "
    . "conf_month = '".$_POST["month"]."', conf_page='".$_POST["page"]."', conf_author='".$_POST["author"]."',"
    . " conf_name='".$_POST["conferenceName"]."', conf_city='".$_POST["city"]."', conf_country='".$_POST["country"]."',userId_FK='".$FK."'";
    mysqli_query($link, $sql);
    die("<script>location.href='res_publications.php'</script>");
}

/*****************************************************************************************************************************
 * DELETING CONFERENCE PAPER
 */
if(isset($_GET["deleteConference"])){
    $sql="DELETE FROM conferencepublication WHERE conf_id = ".$_GET["deleteConference"];
    mysqli_query($link, $sql);
    die("<script>location.href='res_publications.php'</script>");
}
