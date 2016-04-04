<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="../style.css" />
    <style>
			.container{
				width:95%;
			}
    </style>
	<title>Video</title>
</head>

<body>
	<div >

    <div class="row mainContainer">
        <div class="col-sm-2">
						<?php include '../menu.php';?>
        </div>

        <div class="col-sm-10">
            <div  class="container">
							<br>
                <h1>Video</h1>

									<div class="embed-responsive embed-responsive-4by3" style="margin:10px; text-align:center;">
									<video style="max-height: 480px; max-width:640px; margin:0 auto;" class="embed-responsive-item" controls poster>
											<source src="media/video.mp4" width="640" height="480" type="video/mp4">
											Your browser does not support html video tag.
									</video>
									</div>
            </div>
				</div>
    </div>
	</div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../script.js"></script>
		<script >setActive(8)</script>
</body>

</html>
