
/**
 * Created by PhpStorm.
 * User: Rehman_
 * Date: 9/15/2015
 * Time: 11:09 PM
 */
<html>
<head>
    <?php include('headerScript.php'); ?>
</head>
<body>

<div class="container">
    <?php include('header.php'); ?>
    <div class="row" style="padding: 250px;">
        <h3>Manage Contents: </h3>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li><a href=".home" role="tab" data-toggle="tab">Home</a></li>
            <li class="active" ><a href=".admin_news" role="tab" data-toggle="tab">News</a></li>
            <li><a href=".admin_events" role="tab" data-toggle="tab">Events</a></li>
            <li><a href=".admin_gallery" role="tab" data-toggle="tab">Gallery</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane home">
                <br>
                <div class="form-group">
                    <label for="usr">Title:</label>
                    <input type="text" class="form-control" id="usr">
                </div><br>

                <div class="form-group">
                    <label for="comment">Group: </label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div><br>

                <div class="form-group">
                    <label for="comment">Research Contribution: </label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div><br>

                <div class="form-group">
                    <label for="comment">Opportunities: </label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div><br>

                <button class="btn btn-success" type="submit" data-dismiss="modal">Submit</button>
            </div>
            <div class="tab-pane active admin_news">
            <?php include('Admin_News/admin_news.php'); ?>
            </div>
            <div class="tab-pane admin_events">
                <?php include('Admin_Events/admin_events.php'); ?>
            </div>
            <div class="tab-pane admin_gallery">Gallery</div>
        </div>


        <hr>
        </div>
    </div>
</body>

</html>
