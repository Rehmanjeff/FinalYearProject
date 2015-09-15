<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('headerScript.php');?>
        <title>Admin Portal</title>
    </head>
    <body>
        <?php include('navTopAdmin.php');?>
        <div class="container">
            <br><br><br><br><br><br><br><br>
            <h3>New Requests</h3>
            <table class="table">
                <thead>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>
                <th>Accept</th>
                <th>Reject</th>
                </thead>
                <tbody>
                    <?php
                        $sql="SELECT * FROM request";
                        $result=  mysqli_query($link, $sql);
                        while($row=  mysqli_fetch_assoc($result)){
                            if($row["response"]=='N'){
                                if($row["type"]==1){
                                    $type="Teacher";
                                }
                                else{
                                    $type="Researcher";
                                }
                                echo '<tr>
                                    <td>'.$row["date"].'</td>
                                    <td>'.$row["name"].'</td>
                                    <td>'.$row["email"].'</td>
                                        
                                    <td>'.$type.'</td>
                                    <td><a href="?accept='.$row["id"].'">Accept</a></td>
                                    <td><a href="?reject='.$row["id"].'">Reject</a></td>
                                </tr>';
                            }
                        }
                        if(isset($_GET["reject"])){
                            echo $sql="UPDATE request SET response = 'R' WHERE id=".$_GET["reject"];
                            mysqli_query($link, $sql);
                            die("<script>location.href='request.php';</script>");
                        }    
                    ?>
                    
                </tbody>
            </table>
            <!-- REJECTED BY ADMIN -->
            <h3>Rejected Requests</h3>
            <table class="table">
                <thead>
                <th>Date</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>
                <th>Reject Date</th>
                <th>Accept</th>
                    
                </thead>
                <tbody>
                    <?php
                        $sql="SELECT * FROM request";
                        $result=  mysqli_query($link, $sql);
                        while($row=  mysqli_fetch_assoc($result)){
                            if($row["response"]=='R'){
                                if($row["type"]==1){
                                    $type="Teacher";
                                }
                                else{
                                    $type="Researcher";
                                }
                                echo '<tr>
                                    <td>'.$row["date"].'</td>
                                    <td>'.$row["name"].'</td>
                                    <td>'.$row["email"].'</td>
                                    <td>'.$row["rejectDate"].'</td>
                                    <td>'.$type.'</td>
                                    <td><a href="?accept='.$row["id"].'">Accept</a></td>
                                        
                                </tr>';
                            }
                        }
                    if(isset($_GET["accept"])){
                            $sql="UPDATE request SET response = 'A' WHERE id=".$_GET["accept"];
                            mysqli_query($link, $sql);
                            die("<script>location.href='request.php'</script>");
        
                        }            
                            
                    ?>
                        
                    
                </tbody>
            </table>
            
        </div>
            
    </body>
</html>