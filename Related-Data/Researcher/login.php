<?php
if(isset($_POST["login"])){
    $sql= "SELECT * FROM user";
    $result=  mysqli_query($link, $sql);
    $row=  mysqli_fetch_assoc($result);
    while($row=  mysqli_fetch_assoc($result)){
        if($_POST["email"]==$row["email"]){
            if($_POST["password"]==$row["password"]){
                
                $_SESSION["email"]=$_POST["email"];
                $_SESSION["password"]=$_POST["password"];
                die("<script>location.href = 'researcher.php'</script>");
            }
        }
    }
}