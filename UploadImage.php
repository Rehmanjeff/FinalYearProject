<?php
    ini_set('mysql.connect_timeout', 300);
    ini_set('default_socket_timeout', 300);
    
?>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image"><input type="submit" name="submit" value="Upload">
        </form>
        <?php
            if (isset($_POST["submit"])){
                mysqli_connect('localhost', 'root', '', 'pctresearchgroup');
                $imageName=  mysqli_real_escape_string($_FILES["image"]["name"]);
                $imageData=  mysqli_real_escape_string($_FILES["image"]["tmp_name"]);
            }
        ?>
    </body>
</html>