
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="row contentHeader">Class Announcement</div>
            </div>
            <div class="modal-body">
                <p>
                    
                <form action="" method="post">
                    <div class="container-fluid">
                        
                        <div class="row">
                            <input type="text" placeholder="Subject" class="form-control" name="subject"/>
                        </div>
                        <br/>
                        <div class="row">
                            <textarea cols="50" rows="3" name="description" placeholder="Announcement in detail" class="form-control" name="description"></textarea>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-2">
                                Start Date:
                            </div>
                            <div class="col-md-4">
                                <input type="date" name="startDate" class="form-control" value="<?php print(date("Y-m-d")); ?>"/>
                            </div>
                            <div class="col-md-2">
                                End Date:
                            </div>
                            <div class="col-md-4">
                                <input type="date" name="inactiveDate" class="form-control"/ >
                            </div>
                        </div>
                        <br/>
                        
                        <div class="row">
                            <button type="submit" name="announce" class="btn btn-primary" style="float: right"/><span class="glyphicon glyphicon-plus"></span>Announce</button>
                        </div>
                    </div>
                </form>
                </p>
            </div>
        </div>
    </div>
</div>

