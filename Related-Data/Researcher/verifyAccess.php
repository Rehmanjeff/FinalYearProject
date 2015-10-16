<?php
   session_start();
   $link=  mysqli_connect('localhost', 'root', '', 'pctresearchgroup');
    if(isset($_SESSION["email"])){
        if($_SESSION["email"]!="admin"){
            $sql= "SELECT * FROM user";
            $result=  mysqli_query($link, $sql);
            $row=  mysqli_fetch_assoc($result);
            
            while($row=  mysqli_fetch_assoc($result)){
                if($_SESSION["email"]==$row["email"]){
                    if($_SESSION["password"]==$row["password"]){
                        $FK=$row["id"];
                    }
                    else{
                        die("<script>location.href = 'registration.php'</script>");
                    }
                }
            }  
        }
        else if($_SESSION["email"]=="admin"){
          die("<script>location.href = 'cpanel.php'</script>");
    }
}
    
 else{
    die("<script>location.href = 'registration.php'</script>");
}
?>