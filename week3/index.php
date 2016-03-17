<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="../style.css" />

	<title>Images</title>

    <style>
        .container{
            width:90%;
            padding:10px;
        }

        .row-content{
            padding: 20px;
            margin-top: 15px;
            margin-bottom: 63px;
            background:rgba(232,222,0,0.25);

        }
    </style>
</head>

<body>
	<div >


    <div class="row mainContainer">
        <div class="col-sm-2">
					<?php include '../menu.php';?>
        </div>

        <div class="col-sm-10 col-xs-12">
            <div class="container">
                <div class="row row-content">
                    <div class="col-sm-4 col-sm-push-8">
                        <a href="img/oreo155.jpg">
                            <img class="img-responsive" src="img/oreo155.jpg" alt="cat">
                        </a>
                    </div>

                    <div class="col-sm-8 col-sm-pull-4">
                        <h3>1. Threshold value: 155</h3>
                        <p> This threshold value is preferred becuase the main focus of the image is still visible: the cat and the window are still obvious to identify in this image.</p>
                    </div>
                </div>

                <div class="row row-content">
                    <div class="col-sm-5">
                        <a href="img/barbotan137.jpg">
                            <img class="img-responsive" src="img/barbotan137.jpg">
                        </a>
                    </div>
                    <div class="col-sm-7">
                        <h3>2. Threshold value: 137</h3>
                        <p> This threshold value is preferred becuase the paper is almost invisible and the texts are still very clear.</p>
                        <p>There is no 'best' value. Since the intensity of the corner of the paper is similar to the texts, although it is possible to have the paper completely become white background but the some texts will become white as well.</p>
                    </div>
                </div>

                <div class="row row-content">
                    <div class="row">
                        <div class="col-sm-4 col-sm-push-8">
                            <a href="img/satcomp.bmp">
                                <img class="img-responsive" src="img/satcomp.bmp" alt="satcomp">
                            </a>
                        </div>

                        <div class="col-sm-8 col-sm-pull-4">
                            <h3>3. Background grey values: RGB={<span style="color:red">33.3</span>, <span style="color:green">33.3</span>, <span style="color:blue">33.3</span>}</h3>
                            <p> Originally, RGB were {<span style="color:red">100</span>, <span style="color:green">100</span>, <span style="color:blue">100</span>}. </p>
                        </div>
                    </div>
                    <br>
                     <br>
                    <div class="row">
                        <div class="col-sm-4 col-sm-push-8">
                            <a href="img/satcomp_ntsc.bmp">
                                <img class="img-responsive" src="img/satcomp_ntsc.bmp" alt="satcomp">
                            </a>
                        </div>

                        <div class="col-sm-4">
                            <a href="img/satcomp_ntsc_value.jpg">
                                <img class="img-responsive" src="img/satcomp_ntsc_value.jpg" alt="satcomp">
                            </a>
                        </div>

                        <div class="col-sm-4 col-sm-pull-8">

                            <p>After applying proper grey value of NTSC representation, <br>we get {<span style="color:red">21.3</span> <span style="color:green">71.5</span> <span style="color:blue">7.2</span>}</p>

                        </div>
                    </div>
                    <br>
                     <br>
                    <div class="row">
                        <div class="col-sm-4 col-sm-push-8">
                            <a href="img/satcomp_good.bmp">
                                <img class="img-responsive" src="img/satcomp_good.bmp" alt="satcomp">
                            </a>
                        </div>


                        <div class="col-sm-4">
                            <a href="img/satcomp_good_value.jpg">
                                <img class="img-responsive" src="img/satcomp_good_value.jpg" alt="satcomp">
                            </a>
                        </div>


                        <div class="col-sm-4 col-sm-pull-8">

                            <p>Now that we know the pure grey representation of the original image, we now average the RGB values to the original image: <br>(21.3+71.5+7.2)/3 = 100/3 = 33.3. <br><br>After we apply RGB:{<span style="color:red">33.3</span>, <span style="color:green">33.3</span>, <span style="color:blue">33.3</span>} we get the final result as shown.</p>
                        </div>
                    </div>

                </div>

                <div class="row row-content">
                    <div class="col-sm-6">
                        <a href="img/sheet_music_enhance.jpg">
                            <img class="img-responsive" src="img/sheet_music_enhance.jpg">
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <h3>4. Enhance edges: Unsharp mask</h3>
                        <div class="col-sm-6 col-sm-pull-1" style="margin-right:0px; padding-right:0px;">
                            <img style="height;" class="img-responsive" src="img/sheet_sharp_value.jpg">
                        </div>
                        <div class="col-sm-6" style="margin:0 0; padding:0px;">

                        <p> The edges were enhanced using uncharp mask filter with the Radius:90, Amount:10, Threshold:0.</p>
                        <br>
                        <p>Although the image is overall sharpened but everything is more bold and some grey noise have become black</p>
                        <br>
                        <p>If trying to sharpen without making everything bold there will be more noises on the image</p>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div> <!--row-->
	</div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../script.js"></script>
		<script >setActive(3)</script>
</body>

</html>
