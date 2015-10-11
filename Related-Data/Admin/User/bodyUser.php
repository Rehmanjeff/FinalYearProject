//SEARCH PANE
<div class="span12">
    <form id="custom-search-form" class="form-search form-horizontal pull-right">
        <div class="input-append span12">
            <input type="text" class="search-query mac-style" placeholder="Search User">
            <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
        </div>
    </form>
</div>

//List of Users
<table class="table table-hover"  >
        <thead>
        <th>DP</th>
        <th>Name</th>
        <th>Designation</th>
        <th>Joined</th>
        <th>Subjcts</th>
        <th>Status</th>
        </thead>
        <tbody>
<?php
    $sql="SELECT * FROM userprofile";
    $result=  mysqli_query($link, $sql);
    while($row=  mysqli_fetch_assoc($result)){
        echo '<div class="row">
    
            
            <tr>
                <td><img src="img/male.png" width="50px;" height="50px" /></td>
                <td>'.$row["profile_name"].'</td>
                <td>'.$row["profile_designation"].'</td>
                <td>1 Month</td>
                <td>0</td>
                <td><button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Details</button></td>';
                include 'Related-Data/Admin/User/detailUser.php';
            echo '</tr>
                
        
</div>';
    }
?>
    </tbody>
</table>
    
