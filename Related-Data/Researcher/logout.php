<?php
if(isset($_GET["logout"])){
    session_unset(); 
    die("<script>location.href='registration.php'</script>");
    unset($_GET);
   
}

   
?>