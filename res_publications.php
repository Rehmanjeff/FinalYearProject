<div class="col-md-5">
    <h4>Add More Publications</h4>
    <?php include('Related-Data/Researcher/Publications/phpScript.php') ?>
    
    <ul class="nav nav-pills nav-justified">
        <li class="active">
            <a data-toggle="pill" href="#conf">Conference Paper</a>
        </li>
        
        <li>
            <a data-toggle="pill" href="#menu1">Journal Paper</a>
        </li>
    </ul>
    
    <?php include 'Related-Data/Researcher/Publications/addPublication.php'; ?>
                        
</div>

<div class="col-md-7">
    <?php include 'Related-Data/Researcher/Publications/showPublication.php'; ?>
</div>
