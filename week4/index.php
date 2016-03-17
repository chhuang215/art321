<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="../style.css" />
    <style>
        .img{
            height: 300px;
            width: 600px;
        }

        a{
            color: greenyellow
        }

        a:hover{
            color: lightyellow;
        }

        .p{
            background:rgba(100,100,200,0.45);
        }
    </style>
	<title>Design Net Art Piece</title>
</head>

<body>
	<div >

    <div class="row mainContainer">
        <div class="col-sm-2">
						<?php include '../menu.php';?>
        </div>

        <div class="col-sm-10">
            <div style=" width:95%;background:rgba(0,100,0,0.5);" class="container">
                <h2>IDEA: Marquees Texts of a Webpage</h2>
                <br>
                <div class="row">
                    <div class="col-xs-6"><img class="img img-responsive" src="img/sketch_ca_example.jpg" alt="ca"></div>
                    <div class="col-xs-6"><img class="img img-responsive" src="img/sketch_se_example.gif" alt="se"></div>
                </div>
                <br>
                <div class="p" >
                    <p>
                        This net art piece basically randomly retrieve a news web address and collect any words, phrases, video, and audio inside the page.

                    </p>
                    <p>
                        Texts will scroll on right direction <a href="http://www.quackit.com/html/html_editors/scratchpad/preview.cfm?example=/css/codes/marquees/scrolling_text" target="_blank">like this</a> and form a country flag depends on the url contry code (.ca and .se as shown above). There will not be a flag as a background as shown in the sketch. Instead, the texts will scroll and form a flag with the corresponding shape and colour.

                    </p>

                    <p>
                        If there are videos, a video will play semi-transparently on the back of the texts.<br>
                        If there are audios, an audio will be played as well.
                    </p>

                    <p>
                        After several minutes, it will randomly retrieve another webpage and repeat.
                    </p>
                </div>

                <div class="p">
                    Texts, audio, and video will be retrieve through network communications. HTTP requests to be specific. <br>
                    Not all texts will be retrieved necessary since some pages have too much texts and the marquees will only be visible for short period of time until the next page is being loaded.

                </div>

            </div>

        </div>
    </div>
	</div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../script.js"></script>
		<script >setActive(4)</script>
</body>

</html>
