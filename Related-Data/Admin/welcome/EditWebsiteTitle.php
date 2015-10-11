<?php
$sql="SELECT * FROM basicdata";
    $result=  mysqli_query($link, $sql);
    $row=  mysqli_fetch_assoc($result);

echo '<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>Change Basic Website Setting:</h3>
            </div>
            <div class="modal-body">
                <p>
                <form action="" method="POST">
                    <div class="row" style="margin:20px">
                        <div class="col-md-6">
                            <label for="comment">Title of Website: </label>
                            <input type="text" class="form-control" name="webName" placeholder="Title of Website" value="'.$row["title"].'"/>
                        </div>
                        <div class="col-md-6">
                            <label for="comment">Basic Logo: </label>
                            <input type="file" class="form-control" id="usr" placeholder="Title of Website">
                        </div>

                        <label for="comment">Group: </label>
                        <textarea class="form-control" rows="5" cols="500" id="comment" name="text">'.$row["text"].'</textarea>
                         <input type="submit" class="btn btn-primary"  name="submitTitle" value="Update">

                    </div>
                </form>
                </p>
            </div>
        </div>
        
    </div>
</div>';

if(isset($_POST["submitTitle"])){
    $sql="UPDATE basicdata set title='".$_POST["webName"]."',text='".$_POST["text"]."' WHERE id = 1";
    mysqli_query($link, $sql);
    die("<script>location.href='cpanel.php'</script>");
    
}

?>

<?php
$sql="SELECT * FROM basicdata WHERE id = 2";
    $result=  mysqli_query($link, $sql);
    $row=  mysqli_fetch_assoc($result);
    

echo '<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>Change Basic Website Setting:</h3>
            </div>
            <div class="modal-body">
                <p>
                <form action="" method="POST">
                    <div class="row" style="margin:20px">
                        
                            <label for="comment">Title: </label>
                            <input type="text" class="form-control" name="webName" placeholder="Title of Website" value="'.$row["title"].'"/>
                        
                        <br/>

                        <label for="comment">Text: </label>
                        <textarea class="form-control" rows="5" cols="500" id="comment" name="text">'.$row["text"].'</textarea>
                         <input type="submit" class="btn btn-primary"  name="submitTitle" value="Update">

                    </div>
                </form>
                </p>
            </div>
        </div>
        
    </div>
</div>';

if(isset($_POST["submitTitle"])){
    $sql="UPDATE basicdata set title='".$_POST["webName"]."',text='".$_POST["text"]."' WHERE id = 2";
    mysqli_query($link, $sql);
    die("<script>location.href='cpanel.php'</script>");
    
}


echo '<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3>Add New Conetent....:</h3>
            </div>
            <div class="modal-body">
                <p>
                <form action="" method="POST">
                    <div class="row" style="margin:20px">
                        
                            <label for="comment">Title: </label>
                            <input type="text" class="form-control" name="webName" placeholder="Title of Website"/>
                        
                        <br/>

                        <label for="comment">Text: </label>
                        <textarea class="form-control" rows="5" cols="500" id="comment" name="text" placeholder="Some description here...."></textarea>
                         <input type="submit" class="btn btn-primary"  name="newContent" value="Update">

                    </div>
                </form>
                </p>
            </div>
        </div>
        
    </div>
</div>';
if(isset($_POST["newContent"])){
    $sql="INSERT INTO basicdata (title, text) VALUES ('".$_POST["webName"]."','".$_POST["text"]."');";
    mysqli_query($link, $sql);
    die("<script>location.href='cpanel.php'</script>");
    
}



?>
