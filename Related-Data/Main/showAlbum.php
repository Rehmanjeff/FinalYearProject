
<div class="row">
        <div id="profiles_view" class="col-md">

<?php
    $sql="SELECT * FROM gallary WHERE album_FK = ".$_GET["showAlbum"];
    $result= mysqli_query($link,$sql);

    while($row=mysqli_fetch_array($result))
    {

        echo '
        <div class="col-md-6">
            <a href="gallary/'.$row['file'].'"><img src="gallary/'.$row['file'].'" width="350px" height="300px"></a>
            <span class="caption">'.$row['file'].'</span>
        </div>';

    }
?>
    </div>
</div>
            
