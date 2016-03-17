<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css" />
	<link rel="stylesheet" href="style.css" />

	<title>Radio Show</title>
</head>

<body>
	<div id="modalRef" class="modal fade" role="dialog">
  	<div class="modal-dialog">

			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				Software/Tool:<br>
				<ul>
					<li><a href="http://www.audacityteam.org/" target="_blank">Audacity</a>
					(audio editing)</li>
				</ul>

				Sound sources:<br>
				<ul>
					<li>
						<a href="https://www.youtube.com/watch?v=CPu3e5T7ENg" target="_blank">Intro music (https://www.youtube.com/watch?v=CPu3e5T7ENg)</a></br>
					</li>
					<li>
						<a href="http://www.soundsnap.com/tags/leather" target="_blank">Leather clothing (http://www.soundsnap.com/tags/leather)</a></br>
					</li>
					<li>
						Rest of the sounds sources were recorded by ourselves
					</li>
				</ul>

			</div>
		</div>
	</div> <!-- End model -->
	<div >
		<div class="row mainContainer">
        <div class="col-sm-2">
					<?php include '../menu.php';?>
        </div>
        <div class="col-sm-10" style="padding:20px;">
					<div class="container">

						<div class="title" >

							<div class="centre">
							<h1> Chickenman Radio Show </h1>
							<h4>Adam Wright</h4>
							<h4>Chih-Hsuan Huang</h4>
							<h4>Judy Liu</h4>
							</div>
							<BR/>
							<div class="row" data-spy="affix" data-offset-top="205">
								<div class="col-md-10 col-sm-12 centre" style="margin:0; padding:0">
									<audio controls>
										<source src="media/chickenman.wav" type="audio/wav">
											Your browser does not support the audio tag or is unable to play wav files.
									</audio>
								</div>
		            <div class="col-md-2 col-sm-12 centre-xs " style="margin:0; padding:0">
		            		<a class="btn btn-success btn-sm" href="media/chickenman.wav" download="Chickenman_judy_chih-hsuan_adam">
											<span class="glyphicon glyphicon-download-alt"></span> Download (wav)
										</a>
		            </div>

							</div>
						</div>
						<div id="radioScript">
							<button class="btn btn-default btn-sm btn-ref" data-toggle="modal" data-target="#modalRef">Resource<br/>References</button>

							<h5>Cast:</h5>
							<p>
							Narrator (Chih-Hsuan)<br/>
							intro person 1 (Adam)<br/>
							intro person 2 (Judy)<br/>
							chorus (Judy)<br/>
							Bentor Harbor - 'Chickenman' (Adam)<br/>
							Commissioner - Midland city police commissioner (Chih-Hsuan)<br/>
							Miss Helfinger - Commissioner's secretary (Judy)<br/>
							</p>
							<div class="scriptSection">
								<h4>INTRO</h4>
								<div id="1"><span>Narrator:</span> Now, another exciting episode in the life of the most
										fantastic crime fighter the world has ever known....</div>

								<div id='2'><span>person 1:</span> Buck buck buck buck</div>

								<div id='3'>person 2: Chicken - man</div>

								<div id='4'>Chorus: He's everywhere, he's everywhere.</div>
							</div>
							<div class="scriptSection">
								<h4>THE SHOW</h4>

								<div id='5'>Narrator: The office of the police commissioner of Midland city</div>

								<div id='6'>Commissioner:	Yes, come in.</div>

								<div id='7'>Benton:	Aaah, commissioner</div>

								<div id='8'>Commissioner:	What? O, yes - I am.</div>

								<div id='9'>Benton:	My name is Benton Harbor</div>

								<div id='10'> Narrator:	He carries in his right hand a large suitcase.</div>

								<div id='11'>Commissioner:	Put down your large suitcase, Mr. Harbor,
									and tell me	what I can do for you.</div>

								<div id='12'>Benton:		Monday through Friday, commissioner,
									I am regularly employed as a shoe salesman for a large downtown department store.</div>

								<div id='13'>Commissioner:	Yes.</div>

								<div id='14'>Benton: All of my weekends will be free.
									And therefore I will be available to you
									as the most fantastic crime fighter the world has ever known.</div>

								<div id='15'>Commissioner:	And you will be known as?</div>

								<div id='16'>Benton: I will be known as 'Chickenman.'</div>

								<div id='17'>Commissioner:	Miss Helfinger,
									please bring your notepad and pencil and come into my office immediately.</div>

								<div id='18'>Ms. Helfinger:	Yes sir.</div>

								<div id='19'>Commissioner:	Thanks you for coming so quickly. Miss Helfinger, this is Mr Benton Harbor.</div>

								<div id='20'>Benton:		Hello, Miss Harbor</div>

								<div id='21'>Ms. Helfinger:	No, I'm miss Helfinger, you're Mr Harbor.</div>

								<div id='22'>Benton:		Oh, yes. How do you do.</div>

								<div id='23'>Commissioner:	Please, take a note miss Helfinger that
									 Mr. Harbor will be available on weekends to fight crime as ...</div>

								<div id='24'>Ms. Helfinger:	Yes?</div>

								<div id='25'>Commissioner:	Chickenman.</div>

							 <div id='26'>Ms. Helfinger:	Chickenman?</div>

								<div id='27'>Benton:	Chickenman.</div>

								<div id='28'> Narrator:	Benton Harbor opens the large suitcase.</div>

								<div id='29'>Narrator:	He removes from it a strange costume covered with thousands of tiny	feathers.
									Immediately he begins climbing into it.</div>

								<div id='30'>Benton:	Does someone want to give me a hand?</div>

								<div id='31'>Ms. Helfinger:	Of course</div>

								<div id='32'>Benton: Just get the left wing. uh. Uh. there you go.</div>

								<div id='33'>Commissioner:	Miss Helfinger, we'll have to know how to get in touch with Mr Harbor</div>

								<div id='34'>Benton:	... now the right wing, um</div>

								<div id='35'>	Ms. Helfinger:	May I have your phone number, Mr. Harbor?</div>

								<div id='36'>Benton:		Of course.
													watch the feathers, please!
													My phone number is 4 ...</div>

								<div id='37'>Narrator:	Welllll! Born this day in Midland city,
									the White Winged Warrior,
									who will strike terror into the hearts of criminals everywhere.</div>

								<div id='38'>Benton:	Would somebody want to get the zipper back there please?</div>

								<div id='39'>Ms. Helfinger:	Yes, of course.</div>

								<div id='40'>Benton: Oop, watch it back there.</div>
							</div>
						</div>

					</div> <!-- End Container-->

				</div> <!-- End col-10-->

    </div>
		</div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../script.js"></script>
		<script src="script.js"></script>
		<script>setActive(6);</script>
</body>
</html>
