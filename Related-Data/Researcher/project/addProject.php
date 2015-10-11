<?php 
if(!isset($_GET["edit"])){
echo '<h3>New Project</h3>
<form action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="post">
    <div class="row">
        <input type="text" placeholder="Project Title" name="title" class="form-control">
    </div>
    <br/>
    <div class="row">
        <textarea rows="4" placeholder="Description" name="description" class="form-control"></textarea>
    </div>
    <br/>
    <div class="row">
        <input type="text" placeholder="Members" class="form-control" name="members">
    </div>
    <br/>
    
    <div class="row">
        <div class="col-md-4">
            <label>Start Date</label>
        </div>
        <div class="col-md-8">
            <input type="date" placeholder="YYYY" class="form-control" name="startDate">
        </div>
        
    </div>
    <br/>
    
    <div class="row">
        <div class="col-md-6">
            <select class="form-control" name="type">
                <option>Project Type..</option>
                <option>Funded</option>
                <option>Non Funded</option>
            </select>
        </div>
        <div class="col-md-6">
            <select class="form-control" name="progress">
                <option>Progress..</option>
                <option>In Progress</option>
                <option>Done</option>
            </select>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-9" id="message">
        
        </div>
        <div class="col-md-3">
            <button type="submit" name="addProject" class="btn btn-primary" style="float: right"><span class="glyphicon glyphicon-plus"></span>Add</button>
        </div>
    </div>
</form>';
        
}
if(isset($_GET["edit"]))
{
    $sql="SELECT * FROM projects WHERE id = ".$_GET["edit"];
    $result= mysqli_query($link, $sql);
    $row=  mysqli_fetch_assoc($result);
    if($row["type"]=='Funded'){
        $funded="Selected";
        $nonfunded="0";
    }
    else if($row["type"]=='Non Funded'){
        $nonfunded="Selected";
        $funded="0";
    }
    if($row["progress"]=='In Progress'){
        $inProgress="Selected";
        $done="0";
    }
    else if($row["progress"]=='Done'){
        $done="Selected";
        $inProgress="0";
    }
    echo '<h3>Edit A Project</h3>
<form action="" method="post">
    <div class="row">
        <input type="text" placeholder="Project Title" name="title" class="form-control" value="'.$row["title"].'">
    </div>
    <br/>
    <div class="row">
        <textarea rows="4" placeholder="Description" name="description" class="form-control">'.$row["description"].'</textarea>
    </div>
    <br/>
    <div class="row">
        <input type="text" placeholder="Members" class="form-control" name="members" value="'.$row["members"].'">
    </div>
    <br/>
    
    <div class="row">
        <div class="col-md-4">
            <label>Start Date</label>
        </div>
        <div class="col-md-8">
            <input type="date" placeholder="YYYY" class="form-control" name="startDate" value="'.$row["startDate"].'">
        </div>
        
    </div>
    <br/>
    
    <div class="row">
        <div class="col-md-6">
            <select class="form-control" name="type">
                <option>Project Type..</option>
                <option '.$funded.'>Funded</option>
                <option '.$nonfunded.'>Non Funded</option>
            </select>
        </div>
        <div class="col-md-6">
            <select class="form-control" name="progress" value="'.$row["progress"].'">
                <option>Progress..</option>
                <option '.$inProgress.'>In Progress</option>
                <option '.$done.'>Done</option>
            </select>
        </div>
    </div>
    <br/>
    <div class="row">
            <button type="submit" name="updateProject" class="btn btn-primary" style="float: right"><span class="glyphicon glyphicon-plus"></span>Update</button>
        </div>
</form>';
        
}


?>