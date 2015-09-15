<!DOCTYPE html>
    
<html lang="en">
    <head>
        <?php include('headerScript.php');?>
        <title>Personal Info | Researcher</title>
    </head>
    <body>
        <?php include('navResearcher.php');?>
        <div class="container">
            <br/><br/><br/><br/><br/><br/>
            <div class="row">
                <div class="col-md-4">
                    <h1 >vector for dp</h1>

                </div>
                <div class="col-md-6" style="border:solid #444; background-color: #9acfea;">
                    <h1 >Personal Information</h1>
                    <div class="row" >
                        <h3>Atta Muhammad Zahid</h3>
                        <span>Account Type: Teacher</span><br>
                        <span>Joined Since: 12/08/2015</span>
                        
                        <br><a href=""><input type="submit" value="Edit" class="btn btn-success" style="float:right"/></a>
                        
                    </div>
                    <div class="row">
                        <h3>My Objective</h3>
                        aksdfjklasdjfklajsdkfljasdlkfjsadklfjsadf
                        
                        <br><a href=""><input type="submit" value="Edit" class="btn btn-success " style="float:right"></a>
                        
                    </div>
                    <div class="row">
                       <a href="welcome.php"><input type="submit" value='<< Welcome' class='btn btn-success' /></a>
                       <a href="qualification.php"><input type="submit"  value='My Qualification>>' class='btn btn-success' /></a> 
                    </div>
                </div>
                
                <div class="col-md-2">
                    <h1 >Profile Photo</h1>
                    <input type="file" name="dp" class="btn btn-success">
                    <div style="width:150px; height:200px; border:solid">
                        <div style="width:100%; height:100%; border:dotted #4cae4c; alignment-adjust: central">
                            <br/><br/><br/>
                            <input type="submit" value="Upload" class="btn btn-primary" style="background-position: center">
                        </div>
                    </div>
                    
                </div>

            </div>
                
        </div>
        
    </body>
</html>