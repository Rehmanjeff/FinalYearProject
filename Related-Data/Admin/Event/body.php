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
        <h3>Add New Event</h3>
        <form action="" method="POST">
            <div class="col-md-12" style="padding:65px;">
                <div class="row">
                    <div class="col-md-3" >
                        <a data-toggle="tooltip" title="Title of Event"  >
                            <select class="form-control" name="event">
                                <option value="Seminar">Seminar</option>
                                <option value="Workshop">Workshop</option>
                            </select>
                        </a>
                    </div>
                    <div class="col-md-5">
                        <a data-toggle="tooltip" title="Held Date" ><input type="date" placeholder="Held Date" name="startDate" class="form-control"/></a>
                    </div>
                    <div class="col-md-2">
                        <a data-toggle="tooltip" title="Start Time e.g. 01pm" ><input type="text" placeholder="From" name="startTime" class="form-control"/></a>
                    </div>
                    <div class="col-md-2">
                        <a data-toggle="tooltip" title="End Time e.g. 07pm" ><input type="text" placeholder="To" name="endTime" class="form-control"/></a>
                    </div>
                </div>
                <br/>
                <div class="row">
                    <a data-toggle="tooltip" id="title" title="Title:" ><input type="text" placeholder="Venue" name="title" class="form-control"/></a>
                </div><br/>

                <div class="row">
                    <a data-toggle="tooltip" id="title" title="Venue: Describe Briefly about the place, auditorium or any other place" ><input type="text" placeholder="Venue" name="venue" class="form-control"/></a>
                </div><br/>
                <div class="row">
                    <a data-toggle="tooltip" title="Organizing Authority: The department, University or authority e.g. IEE, PCT etc" ><input type="text" placeholder="Organizing Authority" name="organizingAuthority" class="form-control"/></a>
                </div><br/>
                <div class="row">
                    <a data-toggle="tooltip" title="Organizer: Name of Person or group of person" ><input type="text" placeholder="Organizer" name="organizer" class="form-control"/></a>
                </div><br/>
                <div class="row">
                    <a data-toggle="tooltip" title="Description: 3 to 4 Lines on this topic" ><textarea rows="3" name="description" placeholder="Briefly describe about the Event" class="form-control" name="description"></textarea></a>
                </div><br/>
                <div class="row">
                    <a data-toggle="tooltip" title="Objective: " ><textarea  rows="3" name="objective" placeholder="Objective" class="form-control" name="description"></textarea></a>
                </div><br/>
                <div class="row">
                    <a data-toggle="tooltip" title="Who Should Attend: " ><textarea rows="3" name="audience" placeholder="Who Should Attend" class="form-control" name="description"></textarea></a>
                </div><br/>
                <div class="row">
                    <a data-toggle="tooltip" title="Outline: " ><textarea rows="3" name="outline" placeholder="Outline" class="form-control" name="description"></textarea></a>
                </div><br/>
                <div class="row">
                    <a data-toggle="tooltip" title="Registration & Course Fee: " ><textarea  rows="3" name="registration" placeholder="Registration & Course Fee" class="form-control" name="description"></textarea></a>
                </div><br/>
                <div class="row">
                    <div class="col-md-4">
                        <a data-toggle="tooltip" id="title" title="Contact Person Name:" ><input type="text" placeholder="Contact Person NAme" name="name" class="form-control"/></a>
                    </div>
                    <div class="col-md-4">
                        <a data-toggle="tooltip" id="title" title="Contact Person Email:" ><input type="email" placeholder="Email" name="email" class="form-control"/></a>
                    </div>
                    <div class="col-md-4">
                        <a data-toggle="tooltip" id="title" title="Ph#: e.g. 03151234567:" ><input type="text" placeholder="Ph#" name="contact" class="form-control"/></a>
                    </div>
                </div><br/>
                <div class="row">
                    <a data-toggle="tooltip" title="About the Instructor: " ><textarea  rows="3" name="aboutInstructor" placeholder="About the Instructor" class="form-control" name="description"></textarea></a>
                </div><br/>
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-5">
                        <a data-toggle="tooltip" title="Event End Date: " ><input type="date" name="inactiveDate" class="form-control"/ ></a>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" name="addEvent" class="btn btn-primary">Preview</button>    
                    </div>
                </div>
                
            </div>
        </form>
    
    <div class="col-md-6">
        <?php
        ?>
        <h3>Preview...</h3>
        
    </div>
</div>
            <div class="row"></div>
            <div class="row">
                    <div class="col-md">';
                        include("Related-Data/Admin/Event/viewInactiveEvent.php");
                       
                    echo '</div>
                    <div class="col-md">';
                        include("Related-Data/Admin/Event/viewActiveEvent.php");
                        
                    echo '</div>
                </div>';
        }
        else{
            include("Related-Data/Admin/Event/newEventForm.php");
        }
   
echo '</form>';
   
include 'Related-DAta/Admin/Event/phpScript.php';