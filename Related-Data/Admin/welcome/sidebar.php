<style>
    .sideMenue{
    background-color: black;
    
    width:100%;
    height: 500px;
    font-size: 15px;
    
    }
    .btnMenue{
        height: 40px;
        text-align: center;
        margin-bottom: 3px;
    }
    .btnMenue:hover{
        background-color: #adadad;
    }
    .btnMenue:active{
        height:35px;
        width:95%;
        margin-left: auto;
        margin-right: auto;
        margin-top:2px;
    }
    .btnMenue a{
        text-decoration: none;
    }
    .head{
        height: 50px;
        font-size: 40px;
        color:white;
    }
    .subHead{
        height: 40px;
        font-size: 20px;
        color:white;
    }
    
</style>

<div class="sideMenue" >
    <div class="head">
        Admin Panel
    </div>
    <div class="subHead">
        Home
    </div>
    <a href="cpanel.php">
        <div class="btnMenue">Home</div>
    </a>
    <a href="slider.php">
        <div class="btnMenue">Custom Slider</div>
    </a>
    <div class="subHead">
        Users
    </div>
    <a href="users.php">
        <div class="btnMenue">Users</div>
    </a>
    <a href="request.php">
        <div class="btnMenue">New Requests</div>
    </a>
    <div class="subHead">
        News
    </div>
    <a href="apNews.php">
        <div class="btnMenue">News</div>
    </a>

    <div class="subHead">
        Events
    </div>
    <a href="apNews.php">
        <div class="btnMenue">Events</div>
    </a>
</div>