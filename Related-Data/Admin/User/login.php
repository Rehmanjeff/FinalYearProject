<?php
if(isset($_POST["login"])){
    
                        $link=  mysqli_connect('localhost', 'root', '', 'pctresearchgroup');
    $sql= "SELECT * FROM user WHERE id = 1";
    $result =  mysqli_query($link, $sql);
    while($row=  mysqli_fetch_assoc($result)){
        if($_POST["email"]==$row["email"]){
            if($_POST["password"]==$row["password"]){
                $_SESSION["email"]=$_POST["email"];
                $_SESSION["password"]=$_POST["password"];
                die("<script>location.href = 'cpanel.php'</script>");
            }
        }
    }
}