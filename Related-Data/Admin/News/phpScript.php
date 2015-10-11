<?php
        if(isset($_GET["remove"])){
            $sql="UPDATE  news SET active = 'N' WHERE id = ".$_GET["remove"];
            mysqli_query($link, $sql);
            unset($_GET);
            die("<script>location.href = 'apNews.php' </script>");
        }
        if(isset($_GET["add"])){
            $sql="UPDATE  news SET active = 'Y' WHERE id = ".$_GET["add"];
            mysqli_query($link, $sql);
            unset($_GET);
            die("<script>location.href = 'aPNews.php' </script>");
        }
        if (isset($_POST["submitNews"])){
                $sql="INSERT INTO news (startDate,subject,description,active,inactiveDate) VALUES('".$_POST["startDate"]."','".$_POST["subject"]."','".$_POST["description"]."','Y','".$_POST["inactiveDate"]."')";
                mysqli_query($link, $sql);
            }
        if (isset($_GET["forceDelete"])){
                echo $sql="DELETE from news WHERE id = ".$_GET["forceDelete"];
                mysqli_query($link, $sql);
                die("<script>location.href = 'aPNews.php' </script>");
            }

        
    ?>
