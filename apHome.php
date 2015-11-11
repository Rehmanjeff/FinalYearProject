 <?php
    $sql="SELECT * FROM basicdata";
    $result=  mysqli_query($link, $sql);
    $row=  mysqli_fetch_assoc($result);

    echo'<div class="modal fade" id="myModal" role="dialog">
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
                                        <label for="comment">
                                            Title of Website: 
                                        </label>
                                                                
                                        <input type="text" class="form-control" name="webName" placeholder="Title of Website" value="'.$row["title"].'"/>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="comment">
                                            Basic Logo: 
                                        </label>
                                            
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
            }?>

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
           
        </div>';

        if(isset($_POST["newContent"])){
            $sql="INSERT INTO basicdata (title, text) VALUES ('".$_POST["webName"]."','".$_POST["text"]."');";
            mysqli_query($link, $sql);
            die("<script>location.href='cpanel.php'</script>");
        }
        
        $sql="SELECT * FROM basicdata";
        $result=  mysqli_query($link, $sql);
    /*
    
    echo '<div class="row">
                        <div class="col-md-4" style="margin:20;">';
                        if(empty($dp)){
                        echo '<img style="float: left"  hspace="20" src="img/male.png    " >';
                        }
                        else{
                        echo '<img style="float: left" class="image-cropper" hspace="20" src="dp/'.$dp['dp_file'].'">';
                        }
                        
                        /*Working boundary*/ /*
                        
                        
                        if(!isset($_GET["edit"])){
                        echo '<input type="text" class="form-control" placeholder="Title"><br/>
                            <textarea rows="5" class="form-control" placeholder="Description here...."></textarea><br/>
                            <input type="submit" class="btn btn-primary" style="float:right" value="Update">';
                        } else if(isset($_GET["edit"])){
                        $sql="SELECT * FROM basicdata WHERE id = ".$_GET["edit"];
                        $table=  mysqli_query($link, $sql);
                        $edit=  mysqli_fetch_assoc($table);
                        echo '<input type="text" class="form-control" value="'.$edit["title"].'"><br/>
                            <textarea rows="5" class="form-control">'.$edit["text"].'</textarea><br/>
                            <input type="submit" class="btn btn-primary" style="float:right" value="Update">';
                
                        }*/
    echo '<form action="" method="POST">
            <div class="row" style="margin:20px">
                <label for="comment">Title: </label>
                    <input type="text" class="form-control" name="webName" placeholder="Title of Website"/>                
                    <br/>            
                    <label for="comment">Text: </label>
                    <textarea class="form-control" rows="5" cols="500" id="comment" name="text" placeholder="Some description here...."></textarea>           
        <br/>
                    <input type="submit" class="btn btn-primary"  name="newContent" value="Update">
            </div>
        </form>
                        
        <br/>
        <br/>';
                
        $row=  mysqli_fetch_assoc($result);
        echo '
            <div class="row">
                <div class="col-md-11">
                    <h3><strong>'.$row["title"].'</strong></h3>
                </div>
                    
                <div class="col-md-1">
                    <div class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-chevron-down" style="float: right"></span></b></a>
                        
                        <ul class="dropdown-menu">
                            <li>
                                <a href="?edit='.$row["id"].'">Edit</a>
                                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal"  style="float:right">
                                    Edit
                                </button>
                            </li>
                            <li>
                                <a href="?delete='.$row["id"].'">Delete</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                
            <div class="row">
                <p>'.$row["text"].'</p>
            </div>';
                
            while($row=  mysqli_fetch_assoc($result)){
            echo ' <div class="row">
                        <div class="col-md-11">  
                            <h3><strong>'.$row["title"].'</strong></h3>
                        </div>

                        <div class="col-md-1">
                            <div class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle">
                                    <span class="glyphicon glyphicon-chevron-down" style="float: right"></span>
                                    </b>
                                </a>
                                            
                                <ul class="dropdown-menu">
                                    <li><a href="?edit='.$row["id"].'">Edit</a></li>
                                    <li><a href="?delete='.$row["id"].'">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <p>'.$row["text"].'</p>
                    </div>';
            }
            
            if(isset($_POST["submitTitle"])){
                $sql="UPDATE basicdata set title='".$_POST["webName"]."',text='".$_POST["text"]."' WHERE id = 2";
                mysqli_query($link, $sql);
                die("<script>location.href='cpanel.php'</script>");
            }
        ?>