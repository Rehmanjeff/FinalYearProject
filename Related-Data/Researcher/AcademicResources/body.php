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
                <input type="submit" name="submitNews" class="btn btn-success btn-lg"/>    
            </div>
            
            
        </div>
    </div>
    
</form>
<form action="" method="POST">
    <?php

            include("Related-Data/Admin/News/viewActiveNewsDB.php");
    ?>
</form>

<?php include 'Related-DAta/Admin/News/phpScript.php'; ?>