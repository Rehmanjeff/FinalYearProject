<?php 
if(!isset($_GET["edit"])){
    echo'<h3>Add More Qualification</h3>
        <form action="" method="POST">
            <div class="row">
                <input type="text" placeholder="Degree Title" name="degreeName" class="form-control" required="">
            </div>
            <br/>
            
            <div class="row">
                <input type="text" placeholder="YYYY" name="year" class="form-control" maxlength="4">
            </div>
            <br/>
            
            <div class="row">
                <input type="text" placeholder="University / Institute" name="university" class="form-control">
            </div>
            <br/>
            
            <div class="row">
                <textarea rows="4" placeholder="Please Brief some of your Memoreis Here!!" name="details" class="form-control"></textarea>
            </div>
            <br/>
            
            <div class="row">
                <button type="submit" name="addQual" class="btn btn-primary" style="float: right"><span class="glyphicon glyphicon-plus" ></span>Add Qualification</button>
            </div>
        </form>

                    ';
}


    if(isset($_GET["edit"])){
        $sql ="SELECT * FROM qualification WHERE qual_id = ".$_GET["edit"];
        $result = mysqli_query($link, $sql);
        $row =  mysqli_fetch_assoc($result);
        echo '<h3>Update Qualification</h3>
            <form action="" method="POST">
                <div class="row">
                    <input type="text" placeholder="Degree Title" value="'.$row["qual_degreeName"].'" name="degreeName" class="form-control" required="">
                </div>
                <br/>
                <div class="row">
                    <input type="text" placeholder="YYYY" name="year" class="form-control" value="'.$row["qual_year"].'">
                </div>
                <br/>
                <div class="row">
                    <input type="text" placeholder="University / Institute" name="university" class="form-control" value="'.$row["qual_university"].'">
                </div>
                <br/>
                <div class="row">
                    <textarea rows="4" placeholder="Please Brief some of your Memoreis Here!!" name="details" class="form-control">'.$row["qual_details"].'</textarea>
                </div>
                <br/>
                <div class="row">
                    <button type="submit" name="updateQual" class="btn btn-primary" style="float: right"><span class="glyphicon glyphicon-plus" ></span>Update Qualification</button>
                </div>
            </form>
            ';
        
    }   
?>

