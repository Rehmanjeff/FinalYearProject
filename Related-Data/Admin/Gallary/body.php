<style>
 .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
</style>
<?php
$sql="SELECT * FROM event WHERE active = 'N' AND id=".$_SESSION["albumId"];
$result=  mysqli_query($link, $sql);
$row=  mysqli_fetch_assoc($result);
echo '<h3>Album Title: '.$row["event"].' on '.$row["title"];
echo '<br> was held at '.$row["venue"];
?>
<h1>Add Album Photos</h1>
<form action="uploadGallary.php" method="post" enctype="multipart/form-data">
    <div class="row">

        <div class="col-md-3">
            <input type="hidden" name="albumId" value=<?php echo '"'.$_SESSION["albumId"].'"' ?> />
            <span class="btn btn-default btn-file">Choose Photo<input type="file" name="file"></span>
            <button type="submit" name="btn-upload" class="btn btn-default btn-file"> Upload Photo </button>
        </div>
    </div>
    <div class="row">
        <?php
            if(isset($_GET['success']))
                echo 'File Uploaded Successfully...';
            else if(isset($_GET['fail']))
                echo 'Problem While File Uploading !';
            else
                echo '<br/>Try to upload any files(JPG, PNG etc...)';

            
        ?>
    </div>
</form>
<?php
include 'Related-Data/Admin/Gallary/showThumbnail.php';
