<?php $link=  mysqli_connect('localhost', 'root', '', 'pctresearchgroup')?>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Research Group</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
    <script>
    $(document).ready(function(){
        var setupOfi = $('#setup-ofi-2');
        var closeableOfi = $('.more-details');
        closeableOfi.hide();
        setupOfi.on('click', function(e){
            e.preventDefault();
            if($(this).text() == "Show Details \u25BC"){
                $(this).text('Hide Details \u25b2');
            } else {
                $(this).text('Show Details \u25bc');
            }
            closeableOfi.slideToggle();
        });
    });
    </script>
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/main.css">