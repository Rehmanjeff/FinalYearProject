<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">More Details</h4>
            </div>
            <div class="modal-body">
                <p>
                <div class="row">
                    <div class="col-md-8">
                        <h3>Atta Muhammad Zahid</h3>
                        Developer
                    </div>
                    <div class="col-md-4">
                        <img src="img/male.png" width="50px;" height="50px" />
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                        Joining Date: 15-07-2015
                    </div>
                    <div class="col-md-6">
                        Subject: Delete
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                    <input type="submit" class="btn btn-success" value="Edit"/>
                </div>
                </p>
            </div>
        </div>
        
    </div>
</div>
<?php
if (isset($_POST["submitNews"])){
                $sql="INSERT INTO news (startDate,subject,description,active,inactiveDate) VALUES('".$_POST["startDate"]."','".$_POST["subject"]."','".$_POST["description"]."','Y','".$_POST["inactiveDate"]."')";
                mysqli_query($link, $sql);
            }
