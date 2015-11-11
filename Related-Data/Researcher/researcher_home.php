<?php include 'Related-Data/Researcher/research/queryUserInfo.php'; ?>

<div class="col-md-9">
    <?php 
    $sql="SELECT * FROM userprofile WHERE userId_FK = ".$FK;
    $result=  mysqli_query($link, $sql);
    $row=  mysqli_fetch_assoc($result);

        echo '<div class="row">
                <div class="col-md-12">
                    <div class="col-md-6" >
                        <h4>Personal Information</h4>
                        <input type="text" name="name" placeholder="Name" class="form-control" value="'.$row["profile_name"].'" required="" id="rName" maxlength="50"/>
                              <label id="lblrName"></label>
<br>
                            <input type="text" name="designation" placeholder="Designation" class="form-control" value="'.$row["profile_designation"].'" id="rDesig" maxlength="30"/>
                                <label id="lblrDesig"></label><br>
                        <span>Joined Since: 12/08/2015</span>
                    </div>
                            
                    <div class="col-md-6">
                        <div id="contact_info">
                            <h4>Contact Information</h4>
                                <div id="contact_name">
     
                            <input type="email" name="email" placeholder="E-mail" class="form-control" value="'.$row["profile_email"].'" id="rEmail" maxlength="30"/>
                                <label id="lblemail"></label>
                                <label id="emailSpan"></label><br>
                                    <input type="number" name="phone" placeholder="Enter Phone Number" class="form-control" value="'.$row["profile_phone"].'"><br>
                                    <input type="number" name="fax" placeholder="Enter Fax" class="form-control" value="'.$row["profile_fax"].'">
                                </div>
                        </div>
                    </div>            
                <div class="row">
                    <div class="col-md-12">
                        <h1>Something About You:</h1>
                        <textarea placeholder="Something about You!!!" rows="2" name="details" class="form-control" id="comments" maxlength="200">'.$row["profile_details"].'</textarea>
                    
                         <span id="commentSpan" style=""></span>
                         <label id="lblcomments"></label> 
                        
                        <div class="modal-footer" style="float:right">
                            <div class="col-md-6">
                                <input type="submit" name="updatePersonalInfo" class="btn btn-primary"/>    
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>';?>
<!--
    <div class="col-md-1">
                        <div class="dropdown">
                            <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit Profile</button>
                        </div>
                    </div>
-->
<!--
    <div class="col-md-6">
                        <h1>Contact</h1>
                        <label>Email:</label>'.$row["profile_email"].'<br/>
                        <label>Office Address:</label>'.$row["profile_address"].'<br/>
                        <label>Ph Office:</label>'.$row["profile_phone"].'<br/>
                        <label>Mobile:</label>'.$row["profile_mobile"].'
                    </div>
-->

</div>
<?php    
    if(isset($_POST["updatePersonalInfo"])){
        echo $sql="UPDATE userprofile SET profile_name='".$_POST["name"]."',  profile_designation='".$_POST["designation"]."',"
    . "profile_details='".$_POST["details"]."',profile_email='".$_POST["email"]."',profile_address='".$_POST["address"]."'"
    . ",profile_phone='".$_POST["phone"]."',profile_mobile='".$_POST["mobile"]."'"."',profile_fax='".$_POST["fax"]."'"
    . " WHERE userId_FK =".$FK;
    mysqli_query($link, $sql);
    die("<script>location.href='researcher.php'</script>");

    $sql="SELECT * FROM userprofile WHERE userId_FK = ".$FK;
    $result=  mysqli_query($link, $sql);
    $row=  mysqli_fetch_assoc($result);
}?>