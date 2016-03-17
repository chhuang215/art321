<!DOCTYPE html>
<html>

<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css" />

	<title>ART 321</title>
</head>

<body>


	<div class="menu col-sm-2">

		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="./">HOME</a></li>
			<li><a href="week2">week2</a></li>
			<li><a href="week3">week3</a></li>
			<li><a href="week4">week4</a></li>
			<li><a href="#">week5</a></li>
			<li><a href="#">week6</a></li>
			<li><a href="#">week7</a></li>
			<li><a href="#">week8</a></li>
			<li><a href="#">week9</a></li>
			<li><a href="#">week10</a></li>	
		</ul>
	</div>

	<div style="margin: 40px; padding-left:100px;display: inline-block; clear:both;">
		<h2>Chih-Hsuan Huang</h2>
		<h2>Art 321</h2>
		<h3>Winter 2016</h3>
        <br>
        <br>
        <p>For Professor James Parker:</p>
        <p>Please click the button below for confirmation that you have successfully accessed this website</p>
        
        <form action="" method="post">
            <input class="btn btn-primary" type="submit" value="Confirm" />
            <input type="hidden" name="button_pressed" value="1" />
        </form>

        <?php

        if(isset($_POST['button_pressed']))
        {
            $to      = 'gemhuang2151992@gmail.com';
            $subject = 'Website Accessed';
            $message = 'Prof. Parker has accessed the website';
            $headers = 'From: gemhuang2151992@gmail.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);

            echo 'Email Sent! Thank you.';
        }

        ?>
	</div>


</body>
</html>
