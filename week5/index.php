<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css" />
    <style>
        .container{
            width:93%;
            padding-top:50px;
            padding-bottom:50px;
            margin-top:10px;
            background:rgba(0,0,100,0.35);
        }

        a{
            color:lightskyblue;
        }

        a:hover{
            color:skyblue;
        }

    </style>
	<title>Animation</title>
</head>

<body>
	<div >
    <div class="row mainContainer">
        <div class="col-sm-2">
					<?php include '../menu.php';?>
        </div>

        <div class="col-sm-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="row">
                                <div class="col-sm-12 col-xs-5">
                                    <h1>Kick!</h1>
                                    <span>by Chih-Hsuan Huang</span>
                                </div>
                                <div class="col-sm-12 col-xs-7">
                                    <h3>Software/Tools used</h3>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="http://www.synfig.org/" target="_blank">Synfig Studio</a>
                                            (animation)
                                        </li>
                                        <li>
                                            <a href="http://windows.microsoft.com/en-us/windows/movie-maker" target="_blank">Windows Movie Maker</a> (video editing)
                                        </li>
                                        <li>
                                            <a href="http://www.audacityteam.org/" target="_blank">Audacity</a>
                                            (audio editing)
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>

                    <div class="col-sm-8 col-xs-12">
                        <video style="width:97%" controls poster>
                            <source src="media/kick.mp4" type="video/mp4">
                            Your browser does not support html video tag.
                        </video>
                    </div>

                </div>

            </div> <!-- container -->
        </div>
    </div>
	</div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../script.js"></script>
		<script >setActive(5)</script>
</body>

</html>
