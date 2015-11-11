<style>
.infoTab {
    background-color: #f7f7f7;
    margin: 0 0 0 0;
    padding: 20px;
}
    .infoTab::hover
    {
    }
    .newsGreen
    {
        border:1px black solid;
        border-color:green;
    }
    .newsRed
    {
        border:1px black solid;
        border-color:Red;
    }
</style>
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
        <br>
        <div class="row">
            <textarea cols="50" rows="3" name="description" placeholder="Add New News" class="form-control" name="description"></textarea>
        </div>
        <br>
        <div class="row">
            
            <div class="col-md-4">
                <input type="date" name="startDate" class="form-control" value="<?php print(date("Y-m-d")); ?>"/>
            </div>
            <div class="col-md-1">
                <ledgent> to </ledgent>
            </div>
            <div class="col-md-4">
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
            <div class="col-md">';
                include("Related-Data/Admin/News/viewActiveNewsDB.php");
            echo '</div>
            <div class="col-md">';
                include("Related-Data/Admin/News/viewInactiveNewsDB.php");    
            echo '</div>
        </div>
</form>';
   
include 'Related-DAta/Admin/News/phpScript.php';
   
            
include 'Related-DAta/Admin/News/phpScript.php';