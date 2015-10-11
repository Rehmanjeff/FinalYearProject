<?php
    /**********************************************************************************************************************
     * This function tests active and de active news on every page refresh
     */
    $sql="SELECT * FROM news";
        $autoDelete=  mysqli_query($link, $sql);
        while($single=  mysqli_fetch_assoc($autoDelete)){
            if($single["inactiveDate"]<Date("Y-m-d")){
                $sql="UPDATE news SET active = 'N' WHERE id =".$single["id"];
                mysqli_query($link, $sql);
            }
        }
?>
<form action="" method="POST">
    <div class="container-fluid">
        <div class="row">
            <input type="text" placeholder="Subject" class="form-control" name="subject"/>
        </div>
        <div class="row">
            <textarea cols="50" rows="3" name="description" placeholder="Add New News" class="form-control" name="description"></textarea>
        </div>
        <div class="row">
            <div class="col-md-2">
                Start Date:
            </div>
            <div class="col-md-3">
                <input type="date" name="startDate" class="form-control" value="<?php print(date("Y-m-d")); ?>"/>
            </div>
            <div class="col-md-2">
                End Date:
            </div>
            <div class="col-md-3">
                <input type="date" name="inactiveDate" class="form-control"/ >
            </div>
            <div class="col-md-2">
                <button type="submit" name="submitNews" class="btn btn-primary">Add News</button>    
            </div>
        </div>
            
    </div>
        
</form>

<?php 
echo '<form action="" method="POST">
        <div class="div">
            <div class="col-md-12">';
                include("Related-Data/Admin/News/viewNews.php");
            echo '</div>
        </div>
</form>';
   
            
include 'Related-DAta/Admin/News/phpScript.php';