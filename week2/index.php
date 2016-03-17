<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css" />
	<link rel="stylesheet" href="style.css" />


	<title>My Webpage</title>
</head>

<body>

	    <div class="row mainContainer">
		   <div class="col-sm-2">
				 	<?php include '../menu.php';?>
	        </div>

	    	<div class=" col-sm-10 col-xs-12" style="height:100%">

	        <ul class="nav nav-pills nav-justified topmenu">
	            <li class="active"><a data-toggle="pill" href="#about">About</a></li>
	            <li><a data-toggle="pill" href="#topic">Introductory Topics</a></li>

	            <li><a data-toggle="pill" href="#misc">Misc</a></li>
	        </ul>


	        <div class="tab-content">

	            <div class="tab-pane fade in active" id="about">
	                <div class="container">
	                    <div class="row">
	                        <div class="col-sm-7 col-xs-12">
	                            <h2>Computer Science</h2>
	                            <h4 style=" font-style: italic;">the scientific and practical approach to computation and its applications</h4>
	                            <a href="https://www.cpsc.ucalgary.ca" target="_blank">U of C Computer Science Department Website</a>

	                        </div>

	                        <div class="col-sm-5 hidden-xs"><img src="img/codes.jpg" class="img-responsive"></div>

	                    </div>
	                </div>

	            </div>

	            <div class="tab-pane fade" id="topic">
	                <div class="container">
	                    <h3>Programming</h3>
	                    <div class="container">
	                        <p>These are some languages taught in serveral courses. (click to open website)</p>
	                        <div class="row">
	                            <div class="col-sm-3 col-xs-2"><a href="https://www.java.com" target="_blank">
	                                <img class="img-thumbnail img-responsive" src="img/java-logo.jpg"></a></div>
	                            <div class="col-sm-3 col-xs-2"><a href="https://www.python.org/" target="_blank">
	                                <img class="img-thumbnail img-responsive" src="img/python-logo.png"></a></div>
	                            <div class="col-sm-3 col-xs-2"><a href="https://www.haskell.org/" target="_blank">
	                                <img class="img-thumbnail img-responsive" src="img/haskell-logo.png"></a></div>
	                            <div class="col-sm-3 col-xs-2"><a href="http://www.cprogramming.com/" target="_blank">
	                                <img class="img-thumbnail img-responsive" src="img/c-logo.png"></a></div>
	                        </div>
	                    </div>

	                    <h3>Mathematics</h3>
	                    <div class="container">
	                        <div class="row">

	                            <div class="col-sm-3"> <img  class="img-responsive" src="img/math-matrices.jpg"></div>
	                            <div class="col-sm-9">
	                                <p>Basic mathematics: linear algebra and calculus.</p>
	                                <p>Discrete mathematics is essential and it applies on many practices in the field of computer science.</p>
	                            </div>
	                        </div>

	                    </div>
	                    <h3>Data Stuctures and Algorithm</h3>
	                    <div class="container">
	                        <div class="row">
	                            <div class="col-sm-6">
	                                Several basic algorithms (<a href="https://en.wikipedia.org/wiki/List_of_algorithms" target="_blank">Wikipedia link</a>)
	                                <ul>
	                                    <li>Sorting algorithms</li>
	                                    <li>Search algorithms</li>
	                                    <li>Greedy algorithm</li>
	                                    <li>Divide and conquer</li>
	                                </ul>
	                                Examples of some data structures (<a href="https://en.wikipedia.org/wiki/List_of_data_structures" target="_blank">Wikipedia link</a>)
	                                <ul>
	                                    <li>Array</li>
	                                    <li>Binary tree</li>
	                                    <li>B+ tree</li>
	                                    <li>Hash  table</li>
	                                    <li>Graph</li>
	                                    <li>...</li>
	                                </ul>

	                            </div>

	                            <div class="col-sm-6">
	                                <br>
	                                <img class="img-responsive" src="img/dijkstra.gif">
	                            </div>
	                        </div>

	                    </div>

	                </div>
	            </div>

	            <div class="tab-pane fade" id="misc">
	                <div class="container" style="text-align:center;">

	                    <h2>Resources for learning more about the materials...</h2>


	                    <h3>Online courses</h3>
	                    <h4><a href="https://www.coursera.org/browse/computer-science" target="_blank">Coursera</a></h4>
	                    <h4><a href="https://www.edx.org/course/subject/computer-science" target="_blank">edX</a></h4>
	                    <h4><a href="http://ocw.mit.edu/courses/electrical-engineering-and-computer-science/" target="_blank">MIT OCW</a></h4>

	                    <h3>Online coding tutorials</h3>
	                    <h4><a href=" https://www.codecademy.com/" target="_blank">Codecademy</a></h4>

	                </div>
	            </div>
	        </div>
	    	</div>
	    </div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../script.js"></script>
		<script >setActive(2)</script>
</body>

</html>
