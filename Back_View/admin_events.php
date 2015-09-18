
<br>
<button type="button" class="btn btn-info btn-primary" data-toggle="modal" data-target="#myModal">ADD Events</button>
<br>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Events Update</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="usr">Title:</label>
                    <input type="text" class="form-control" id="usr">
                </div><br>

                <div class="form-group">
                    <label for="comment">Description: </label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                <div class='col-md-6' style="float: left;">
                    <div class="form-group">
                        <label class="control-label" for="exampleInputEmail">Pick Date:</label>
                        <div class="">
                            <input name="DATEFROM" id="dateFrom" type="date" class="form-control" />
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function () {

                            $('#dateFrom').datepicker({
                                format: "dd/mm/yyyy",
                                orientation: "top"
                            });
                        });
                    </script>
                </div>
                <div class="form-group">
                    <label for="usr">Venue: </label>
                    <input type="text" class="form-control" id="usr">
                </div><br>
                <div class="form-group">
                    <label for="usr">Sponsor: </label>
                    <input type="text" class="form-control" id="usr">
                </div><br>
                <br><br><br><br>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" data-dismiss="modal">Close</button>
                <button class="btn btn-success" type="submit" data-dismiss="modal">Submit</button>
            </div>

            <?php
            if (isset($_POST["submitNews"])){
                $sql="INSERT INTO news (date,subject,description,active,inactiveDate) VALUES('".Date("Y/m/d")."','".$_POST["subject"]."','".$_POST["description"]."','Y','".$_POST["inactiveDate"]."')";
                mysqli_query($link, $sql);
            }
            ?>
        </div>

    </div>
</div>

<?php
if (isset($_POST["submitNews"]))
{
    $sql="INSERT INTO news (date,subject,description,active,inactiveDate) VALUES('".Date("Y/m/d")."','".$_POST["subject"]."','".$_POST["description"]."','Y','".$_POST["inactiveDate"]."')";
    mysqli_query($link, $sql);
}
?>

<br>

<div class="col-md-3">
    <strong>Show by type:</strong><br>

    <select name="year" class="form-control">
        <option>Year</option>
        <option>2015</option>
        <option>2016</option>
        <option>2017</option>
    </select>
    <br>

    <strong>Show by type:</strong><br>
    <form action="" method="POST">
        <select name="formFilter" class="form-control" onchange="this.form.submit()">

            <option value="" >Please Select.....</option>
            <option value="A" <?php if(isset($_POST['formFilter']) && $_POST['formFilter'] == 'A')
                echo ' selected="selected"'; ?>>Active</option>
            <option value="D" <?php if(isset($_POST['formFilter']) && $_POST['formFilter']=='D')
                echo 'selected="selected"'?>>De-Activated</option>
        </select>
    </form>
</div>

<div class="col-md-9">
    <form action="" method="POST">
        <?php
        if(isset($_POST["formFilter"])){
            if($_POST["formFilter"]=='A' or $_POST["formFilter"]=='' ){
                $sql="SELECT * FROM news";
                $result=  mysqli_query($link, $sql);
                while($row=  mysqli_fetch_assoc($result)){
                    if($row["active"]=='Y' AND Date("Y-m-d") <= $row["inactiveDate"]){
                        echo '<div id="newsPane"">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <i><b style="color:red">'.$row["startDate"].'</i></b>
                                                </div>
                                                <div class="col-md-4">
                                                    In Activate on:'.$row["inactiveDate"].'
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="?remove='.$row["id"].'" style="color:red">Remove</span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <u><b>'.$row["subject"].'</b></u>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" style="margin:20px">
                                                    <strong>News: </strong>'.$row["description"].'
                                                </div>
                                            </div>
                                    </div>';
                    }
                }
            }
            if($_POST["formFilter"]=='D'){
                $sql="SELECT * FROM news";
                $result=  mysqli_query($link, $sql);
                while($row=  mysqli_fetch_assoc($result)){
                    if($row["active"]=='N'){
                        echo '<div id="newsPane"">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <i><b style="color:red">'.$row["startDate"].'</i></b>
                                                </div>
                                                <div class="col-md-4">
                                                    In Activate on:'.$row["inactiveDate"].'
                                                </div>
                                                <div class="col-md-2">
                                                    <a href="?remove='.$row["id"].'" style="color:red">Remove</span></a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <u><b>'.$row["subject"].'</b></u>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" style="margin:20px">
                                                    <strong>Events: </strong>'.$row["description"].'
                                                </div>
                                            </div>
                                    </div>';
                    }
                }
            }

        }
        ?>
    </form>
    <?php
    if(isset($_GET["remove"])){
        $sql="UPDATE  news SET active = 'N' WHERE id = ".$_GET["remove"];
        mysqli_query($link, $sql);
        unset($_GET);
        die("<script>location.href = 'apNews.php' </script>");
    }
    if(isset($_GET["add"])){
        $sql="UPDATE  news SET active = 'Y' WHERE id = ".$_GET["add"];
        mysqli_query($link, $sql);
        unset($_GET);
        die("<script>location.href = 'aPNews.php' </script>");
    }
    ?>
</div>