<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Meetio - Just Meeting</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom Google Web Font -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- Add custom CSS here -->
    <link href="css/landing-page.css" rel="stylesheet">
	
	
	<script type='text/javascript' src='http://cdn.firebase.com/js/client/1.0.11/firebase.js'></script>
	<script type='text/javascript' src="js/jquery-1.10.2.js"></script>
	<script type='text/javascript' src='js/config.php'></script>
	<script type='text/javascript' src='js/adapter.js'></script>
	<script type='text/javascript' src='js/functions.js'></script>
	<script type='text/javascript' src='js/media.js'></script>
	<script type='text/javascript' src='js/session.js'></script>
	<script type='text/javascript' src='js/peerconnection.js'></script>
	<script type='text/javascript' src='js/application.js'></script>

</head>

<body>

<?php
include 'ga.php';
?>

<script type="text/javascript">
	
if( !window.location.search.length ){		
		window.location.search = guid();		
}

//init with guid as peer name
var g_app = new Application( guid() );

//run with session id
g_app.run( window.location.search );

$( window ).unload(function() {	
	g_app.stop();
});

</script>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<p class="navbar-brand">
				Meetio.de - Just Meeting</p>                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#about">Impressum</a>
                    </li>      
                    <li><a href="#contact">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="intro-header">

        <div class="container-full">

    <div class="row">						
					   
    <div id="local_video" class="col-md-6" >
		<video id="local_video_stream" controls  autoplay></video> 
	</div>

	<div id="remote_video" class="col-md-6"  >
		<video hidden="true" id="remote_video_stream" controls  autoplay></video> 
	</div>
	
	</div>


        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                     <p class="copyright text-muted small">Copyright &copy; shopwerkstatt ug ( haftungsbeschr&auml;nkt )</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    
    <script src="js/bootstrap.js"></script>

</body>

</html>
