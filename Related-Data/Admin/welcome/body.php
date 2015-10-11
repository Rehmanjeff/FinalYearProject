    
<?php 
    $sql="SELECT * FROM profilephoto WHERE userId_FK = 2";
    $result=  mysqli_query($link, $sql);
    $dp=  mysqli_fetch_assoc($result);
        
    include "Related-Data/Admin/welcome/EditWebsiteTitle.php";
    $sql="SELECT * FROM basicdata";
    $result=  mysqli_query($link, $sql); 
    echo '<div class="row">
            <div class="col-md-4" style="margin:20;">';
                if(empty($dp)){
                        echo '<img style="float: left"  hspace="20" src="img/male.png    " >';
                    }else{
                        echo '<img style="float: left" class="image-cropper" hspace="20" src="dp/'.$dp['dp_file'].'">';
                    }
                        
            echo '
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-plus" ></span>Add New Content...</button><br/><br/>';
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
                
                }
                $row=  mysqli_fetch_assoc($result);
                echo '</div>
            
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-11">
                        <h3><strong>'.$row["title"].'</strong></h3>
                    </div>
                    <div class="col-md-1">
                        <div class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-chevron-down" style="float: right"></span></b></a>
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
                
            while($row=  mysqli_fetch_assoc($result)){
        echo '  <div class="row">
                    <div class="col-md-11">  
                        <h3><strong>'.$row["title"].'</strong></h3>
                    </div>
                    <div class="col-md-1">
                        <div class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-chevron-down" style="float: right"></span></b></a>
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
    
    
    