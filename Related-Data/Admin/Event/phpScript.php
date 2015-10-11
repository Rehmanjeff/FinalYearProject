<?php
        if(isset($_GET["remove"])){
            $sql="UPDATE  event SET active = 'N' WHERE id = ".$_GET["remove"];
            mysqli_query($link, $sql);
            unset($_GET);
            die("<script>location.href = 'apEvent.php' </script>");
        }
        if(isset($_GET["add"])){
            $sql="UPDATE  event SET active = 'Y' WHERE id = ".$_GET["add"];
            mysqli_query($link, $sql);
            unset($_GET);
            die("<script>location.href = 'apEvent.php' </script>");
        }
        if (isset($_POST["addEvent"])){
                echo $sql="INSERT INTO event (date, startDate,startTime, endTime, event, title,venue, speaker, organizingAuthority, organizer, description,"
                . " objective, audience, outline, registration, aboutInstructor,name, email, phNo,  active,inactiveDate)"
                . " VALUES(".Date("Y/m/d").",'".$_POST["startDate"]."','".$_POST["startTime"]."','".$_POST["endTime"]."','".$_POST["event"]."','".$_POST["title"]."',"
                . "'".$_POST["venue"]."','".$_POST["speaker"]."','".$_POST["organizingAuthority"]."','".$_POST["organizer"]."','".$_POST["description"]."'"
                . ",'".$_POST["objective"]."','".$_POST["audience"]."','".$_POST["outline"]."','".$_POST["registration"]."','".$_POST["aboutInstructor"]."',"
                        . "'".$_POST["name"]."','".$_POST["email"]."','".$_POST["phNo"]."','Y','".$_POST["inactiveDate"]."')";
                mysqli_query($link, $sql);
                die("<script>location.href = 'apEvent.php' </script>");
            }
        if (isset($_GET["forceDelete"])){
                echo $sql="DELETE from event WHERE id = ".$_GET["forceDelete"];
                mysqli_query($link, $sql);
                die("<script>location.href = 'apEvent.php' </script>");
            }
        
        
    ?>
