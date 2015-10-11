<?php 

echo '<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Conference Paper</h4>
            </div>
            <div class="modal-body">
                <p>
                    
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Paper Title" class="form-control" name="title"/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="YYYY" class="form-control" name="year"/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="Month" class="form-control" name="month"/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="Pages (From - To)" class="form-control" name="page"/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" placeholder="Authors" class="form-control" name="author"/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" placeholder="Conference" class="form-control" name="conferenceName"/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="City" class="form-control" name="city"/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="Country" class="form-control" name="country"/>
                        </div>
                    </div><br/>
                    <div class="row">
                        <div class="col-md-2">
                            <input type="submit" name="addConference" class="btn btn-success btn-lg" value="Add Paper"/>    
                        </div>
                    </div>
                </form>
                </p>
            </div>
        </div>
    </div>
</div>';


//EDIT JOURNAL PUBLICATION
if(isset($_POST["updateConference"])){
    $sql="SELECT * FROM conferencepublication WHERE conf_id =".$_GET["editConference"];
    $result=  mysqli_query($link, $sql);
    $row=  mysqli_fetch_assoc($result);
echo '<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Conference Paper</h4>
            </div>
            <div class="modal-body">
                <p>
                    
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Paper Title" class="form-control" name="title" value='.$row["conf_title"].'/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="YYYY" class="form-control" name="year" value='.$row["conf_year"].'/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="Month" class="form-control" name="month" value='.$row["conf_month"].'/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="Pages (From - To)" class="form-control" name="page" value='.$row["conf_page"].'/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" placeholder="Authors" class="form-control" name="author" value='.$row["conf_author"].'/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" placeholder="Conference" class="form-control" name="conferenceName" value='.$row["conf_name"].'/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="City" class="form-control" name="city" value='.$row["conf_city"].'/>
                        </div>
                        <div class="col-md-2">
                            <input type="text" placeholder="Country" class="form-control" name="country" value='.$row["conf_country"].'/>
                        </div>
                    </div><br/>
                    <div class="row">
                        <div class="col-md-2">
                            <button type="submit" name="addConference" class="btn btn-primary">Update Paper</button>    
                        </div>
                    </div>
                </form>
                </p>
            </div>
        </div>
    </div>
</div>';
}