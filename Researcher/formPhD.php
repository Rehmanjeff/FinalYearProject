<form method="post" action="">
    <div clas="row">
        <div class="col-md-9">
            <input type="text" placeholder="PhD" class="form-control" required/>
        </div>
        <div class="col-md-3">
            <input type="text" placeholder="Year" class="form-control" required/>
        </div>
    </div>
    <br/><br/><br/>
    <div clas="row">
        <div class="col-md-9">
            <input type="text" placeholder="Supervisor" class="form-control" required/>
        </div>
        <div class="col-md-3">
            <select class="form-control">
                <option>Status...</option>
                <option value="complete">Completed</option>
                <option value="cont">Continue</option>
                <option value="na">N/A</option>
            </select>
        </div>
    </div>
    <br/><br/><br/>
    <div clas="row">
        <div class="col-md-9">
            <input type="text" placeholder="University" class="form-control" required/>
        </div>
        <div class="col-md-1">
            <input type="submit" width=100% value='Add' class='btn btn-success' name='addMPhill'/>
        </div>
        
    </div>
</form>
<form method="post" action="">
    <div class="col-md-1">
        <input type="submit" width=100% value='Skip' class='btn btn-primary' name='btnSkipPhd'/>
    </div>
</form>

