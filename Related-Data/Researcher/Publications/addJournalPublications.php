<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Journal Paper</h4>
            </div>
            <div class="modal-body">
                <p>
                    
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Title" name="title" class="form-control"/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="YYYY" name="year" class="form-control"/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="Volume" name="volume" class="form-control" />
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="Issue" name="issue" class="form-control"/>
                        </div>
                        
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Name of Journal" class="form-control" name="name"/>
                        </div>
                        <div class="col-md-3">
                            <input type="text" placeholder="ISSN#" class="form-control" name="ISSN"/>
                        </div>
                        <div class="col-md-3">
                            <input type="text" placeholder="Pages (from - To)" class="form-control" name="page"/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" placeholder="Name of Authors" class="form-control" name="author"/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="I.F" class="form-control" name="IF"/>
                        </div>
                        <div class="col-md-2">
                            <label><input type="checkbox" value="Y">Is In Press?</label>
                        </div>
                    </div><br/>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" value="http://dx.doi.org/" class="form-control" name="doi"/>
                        </div>
                    </div>
                    <br/>
                    <div class="modal-footer">
                            <button type="submit" name="addJournal" class="btn btn-success" style="float: right"><span class="glyphicon glyphicon-plus"></span>Add Journal</button>    
                    </div>
                </form>
                
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
