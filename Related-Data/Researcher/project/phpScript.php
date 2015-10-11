<?php
if(isset($_POST["addProject"])){
    $sql="INSERT INTO projects (title, description, members, startDate, type, progress,userId_FK) VALUES"
    . "('".$_POST["title"]."','".$_POST["description"]."','".$_POST["members"]."','".$_POST["startDate"]."','".$_POST["type"]."','".$_POST["progress"]."','".$FK."');";
    mysqli_query($link, $sql);?>
    
    <?php
    
    
    
}

if(isset($_GET["delete"])){
    $sql="DELETE FROM projects WHERE id = ".$_GET["delete"];
    mysqli_query($link, $sql);
    die("<script>location.href='studentProject.php'</script>");
 }   

if(isset($_POST["updateProject"])){
    echo $sql="UPDATE projects SET title = '".$_POST["title"]."' , description = '".$_POST["description"]."'"
            . ", members= '".$_POST["members"]."', startDate = '".$_POST["startDate"]."', type = '".$_POST["type"]."'"
            . ", progress = '".$_POST["progress"]."'";
    mysqli_query($link, $sql);
    die("<script>location.href='qualification.php'</script>");
}