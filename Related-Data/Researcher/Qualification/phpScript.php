<?php

if(isset($_POST["addQual"])){
    $sql="INSERT INTO qualification (qual_degreeName, qual_year, qual_university, qual_details, qual_hide, userId_FK)
            VALUES ('".$_POST["degreeName"]."','".$_POST["year"]."','".$_POST["university"]."','".$_POST["details"]."','N',".$FK.")";
    mysqli_query($link, $sql);
    die("<script>location.href='res_qualification.php'</script>");
}


if(isset($_POST["updateQual"])){
    $sql="UPDATE qualification SET qual_degreeName = '".$_POST["degreeName"]."' , qual_year = '".$_POST["year"]."',
        qual_university = '".$_POST["university"]."', qual_details = '".$_POST["details"]."' WHERE qual_id = ".$_GET["edit"];
    mysqli_query($link, $sql);
    die("<script>location.href='res_qualification.php'</script>");
}
    
if(isset($_GET["delete"])){
    $sql="DELETE FROM qualification WHERE qual_id = ".$_GET["delete"];
    mysqli_query($link, $sql);
    die("<script>location.href='res_qualification.php'</script>");
 }   
                         
