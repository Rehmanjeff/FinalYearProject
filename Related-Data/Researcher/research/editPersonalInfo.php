<?php include 'Related-Data/Researcher/research/queryUserInfo.php'; ?>
<?php
echo '<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Biography</h4>
            </div>
            <div class="modal-body">
                <p>
                <form action="" method="post" enctype="multipart/form-data" name="form">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="modal-title">My Personal Profile</h4><br/>
                        </div>
                        <div class="col-md-8">

                        </div>
                    </div>
                    
                <form action="" method="POST"> 
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label><br>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="Name" class="form-control" value="'.$row["profile_name"].'"/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Designation</label><br>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="designation" placeholder="Designation" class="form-control" value="'.$row["profile_designation"].'"/>
                        </div>
                    </div>
                    
                    <h4 class="modal-title">My Contact Information</h4><br/>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Email:</label><br>
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="E-mail" class="form-control" value="'.$row["profile_email"].'"/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Office Address</label><br>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="address" placeholder="Address" class="form-control" value="'.$row["profile_address"].'"/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Ph Office</label><br>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="phone" placeholder="Phone #" class="form-control" value="'.$row["profile_phone"].'"/>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Mobile</label><br>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="mobile" placeholder="Phone #" class="form-control" value="'.$row["profile_mobile"].'"/>
                        </div>
                    </div>
                    
                    <h4 class="modal-title">Something About You</h4><br/>
                    <textarea placeholder="Something about You!!!" rows="2" name="details" class="form-control">'.$row["profile_details"].'</textarea>
                    <div class="modal-footer" style="float:right">
                        <div class="col-md-6">
                            <input type="submit" name="updatePersonalInfo" class="btn btn-primary"/>    
                        </div>
                    </div>
                    
                    
                </form>
                
                </p>
            </div>
        </div>
        
    </div>
</div>';

if(isset($_POST["updatePersonalInfo"])){
    echo '<br/><br/><br/><br/><br/><br/><br/>'.$sql="UPDATE userprofile SET profile_name='".$_POST["name"]."', profile_designation='".$_POST["designation"]."',"
    . "profile_details='".$_POST["details"]."',profile_email='".$_POST["email"]."',profile_address='".$_POST["address"]."'"
    . ",profile_phone='".$_POST["phone"]."',profile_mobile='".$_POST["mobile"]."'"
            
    . " WHERE userId_FK =".$FK;
    mysqli_query($link, $sql);
    die("<script>location.href='researcher.php'</script>");

}
