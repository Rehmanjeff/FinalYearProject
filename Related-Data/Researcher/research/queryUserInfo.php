<?php
    $sql="SELECT * FROM userprofile WHERE userId_FK = ".$FK;
    $result=  mysqli_query($link, $sql);
    $row=  mysqli_fetch_assoc($result);