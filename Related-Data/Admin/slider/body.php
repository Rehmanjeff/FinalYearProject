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
<form action="upload.php" method="post" enctype="multipart/form-data">
    <div class="row">

        <div class="col-md-3">
            <span class="btn btn-default btn-file">Choose File<input type="file" name="file"></span>
            <button type="submit" name="btn-upload" class="btn btn-default btn-file"> Upload Slide </button>
        </div>
    </div>
</form>

<?php
	if(isset($_GET['success']))
            echo 'File Uploaded Successfully...';
	else if(isset($_GET['fail']))
            echo 'Problem While File Uploading !';
        else
            echo 'Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...';

        include 'Related-Data/Admin/slider/showThumbnail.php';
