<div class="row" style="margin-top: 150px; background-color: #a6e1ec" >
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-2">
                            <label for="news">Subject</label><br>
                            <input type="text" name="subject" maxlength="30" class="form-control" placeholder="Please Specify Topic"/>
                        </div>
                        <div class="col-md-4">
                            <label for="news">Announcement</label><br>
                            <textarea cols="50" rows="5" name="description" placeholder="Enter News" class="form-control"></textarea>
                        </div>
                        <div class="col-md-2">
                            <label for="inactiveDate">In-Active Date</label><br>
                            <input type="date" name="inactiveDate"/>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="submitNews" class="btn btn-success"/>
                        </div>
                    </div>
                </form>
            <?php
            if (isset($_POST["submitNews"])){
                $sql="INSERT INTO news (date,subject,description,active,inactiveDate) VALUES('".Date("Y/m/d")."','".$_POST["subject"]."','".$_POST["description"]."','Y','".$_POST["inactiveDate"]."')";
                mysqli_query($link, $sql);
            }
            ?>
            </div>
            <div class="row" >
                <div class="col-md-3" style="margin-top: 10px; background-color: #a6e1ec" >
                    <div class="row"  >
                        <form action="" method="POST">
                            <h3>Show By Type:</h3>
                            <select name="formFilter" class="form-control" onchange="this.form.submit()">
                                
                                <option value="" >Please Select.....</option>
                                <option value="A" <?php if(isset($_POST['formFilter']) && $_POST['formFilter'] == 'A')
                                                            echo ' selected="selected"'; ?>>Active</option>
                                <option value="D" <?php if(isset($_POST['formFilter']) && $_POST['formFilter']=='D')
                                                            echo 'selected="selected"'?>>De-Activated</option>
                            </select>
                        </form>
                    </div>
                    <div class="row"  >
                        <h3>Select By Year:</h3>
                        <select name="year" class="form-control">
                            <option>Year</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-9"  >
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
                                    echo '<div id="newsPane" style="margin-top: 10px; background-color: #f2dede">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <i><b style="color:red">'.$row["date"].'</i></b> 
                                                </div>
                                                <div class="col-md-5">
                                                    De-Activation Date:'.$row["inactiveDate"].'
                                                </div>
                                                <div class="col-md-1">
                                                    <a href="?add='.$row["id"].'" style="color:green">Add</span></a>
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
            </div>