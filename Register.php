<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('headerScript.php');?>
        <title>Log In | PCT Research Group</title>
    </head>
    <body>
        
        <div class="container" >
            <?php include('login_bar.php');?>
            <div class="row" style="margin-top: 150px">
                
                <form action="" role="form" method="POST">
                    <div class="col-md-6">
                        
                    </div>
                    
                    <div class="col-md-6 col-md-push-1" style="background-color: #b3d4fc">
                        <div style="background-color: black; margin:10px;" class="col-md-12">
                            <img src="img/Registered.png"/>
                        </div>
                        <h3>Request our Administrator???</h3>
                            
                        <div class="msg">* All Fileds are required</div>
                        <div class="col-md-12 text-field" >
                            <input type="text" class="form-control" name="name" id="InputName" placeholder="Enter Name" required="required" />
                        </div>
                        <div class="col-md-12 text-field">
                            <input type="email" class="form-control" id="InputEmailFirst" name="email" placeholder="Enter Email" required="required" />
                        </div>
                        <div class="col-md-12 text-field">
                            <input type="password" class="form-control" id="InputEmailSecond" name="password" placeholder="Password" required>
                        </div>
                        <div class="col-md-12 text-field">
                            <input type="password" class="form-control" id="InputEmailSecond" name="confirmPassword" placeholder="Confirm Password" required>
                        </div>
                        <div class="col-md-12 text-field">
                            <select class="form-control" name="type">
                                <option>Why to Join PCT?</option>
                                <option value="1">I Am a Teacher</option>
                                <option value="2">I Am a Researcher</option>
                                <option value="3">I Am a Both</option>
                            </select> 
                        </div>
                        <input type="submit" name="submit" id="submit" value="Send Request" class="btn btn-info pull-right" style="margin-top:50px;">
                    </div>
                </form>
                <?php
                    if(isset($_POST["submit"])){
                        $link=  mysqli_connect('localhost', 'root', '', 'pctresearchgroup');
                        $sql="INSERT INTO request (name,email,password,type, response) VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["type"]."','N')";
                        mysqli_query($link, $sql);
                    }
                ?>
            </div>
        </div>
    </body>
</html>