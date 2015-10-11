<?php
        if(isset($_GET["remove"])){
            $sql="UPDATE  announcement SET active = 'N' WHERE id = ".$_GET["remove"];
            mysqli_query($link, $sql);
            unset($_GET);
            die("<script>location.href = 'academicresources.php' </script>");
        }
        if(isset($_GET["add"])){
            $sql="UPDATE  announcement SET active = 'Y' WHERE id = ".$_GET["add"];
            mysqli_query($link, $sql);
            unset($_GET);
            die("<script>location.href = 'academicresources.php' </script>");
        }
        if (isset($_POST["announce"])){
                $sql="INSERT INTO announcement (startDate,subject,description,active,inactiveDate,subjectId_FK) VALUES('".$_POST["startDate"]."','".$_POST["subject"]."','".$_POST["description"]."','Y','".$_POST["inactiveDate"]."','".$_GET["subject"]."')";
                mysqli_query($link, $sql);
                die("<script>location.href='academicresources.php'</script>");
            }
        if (isset($_POST["announceCommon"])){
                $sql="SELECT subject_id FROM subject WHERE userId_FK = ".$FK;
                $result=  mysqli_query($link, $sql);
                while($row=  mysqli_fetch_assoc($result)){
                    $sql="INSERT INTO announcement (startDate,subject,description,active,inactiveDate,subjectId_FK) VALUES('".$_POST["startDate"]."','".$_POST["subject"]."','".$_POST["description"]."','Y','".$_POST["inactiveDate"]."','".$row["subject_id"]."')";
                    mysqli_query($link, $sql);
                }
                die("<script>location.href='academicresources.php'</script>");
            }

        
    ?>
