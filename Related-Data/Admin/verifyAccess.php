<?php
   session_start();
   $link=  mysqli_connect('localhost', 'root', '', 'pctresearchgroup');
if(isset($_SESSION["email"])){
  $sql= "SELECT * FROM user WHERE id = 1";
    $result=  mysqli_query($link, $sql);
    while($row=  mysqli_fetch_assoc($result)){
        if($_SESSION["email"]===$row["email"]){
            if($_SESSION["password"]===$row["password"]){
            }
            else{
                die("<script>location.href = 'cpanel.php'</script>");
            }
        }
        else{
            die("<script>location.href = 'registration.php'</script>");
        }
        
    }  
}
else{
    die("<script>location.href = 'registration.php'</script>");
}
?>