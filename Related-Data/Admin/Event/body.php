<?php
    /**********************************************************************************************************************
     * This function tests active and de active event on every page refresh
     */
    $sql="SELECT * FROM event";
        $autoDelete=  mysqli_query($link, $sql);
        while($single=  mysqli_fetch_assoc($autoDelete)){
            if($single["inactiveDate"]<Date("Y-m-d")){
                $sql="UPDATE event SET active = 'N' WHERE id =".$single["id"];
                mysqli_query($link, $sql);
            }
        }
?>

<?php 
echo '<form action="" method="POST">';
        if(!isset($_GET["newEvent"])){
        echo '<div class="row">
                <a href="?newEvent"  class="btn btn-primary" >Add New Event</a>    
            </div>
            <div class="row"></div>
            <div class="row">
                    <div class="col-md-6">';
                        include("Related-Data/Admin/Event/viewInactiveEvent.php");
                       
                    echo '</div>
                    <div class="col-md-6">';
                        include("Related-Data/Admin/Event/viewActiveEvent.php");
                        
                    echo '</div>
                </div>';
        }
        else{
            include("Related-Data/Admin/Event/newEventForm.php");
        }
   
echo '</form>';
   
include 'Related-DAta/Admin/Event/phpScript.php';