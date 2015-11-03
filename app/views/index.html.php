<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	    
	    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	    <meta name="viewport" content="width=device-width" />
	    
	    <title><?php echo $framework['name']; ?></title>
	    
	    <link href="assets/css/bootstrap.css" rel="stylesheet" />
		<link href="assets/css/coming-sssoon.css" rel="stylesheet" />    
	    
	    <!--     Fonts     -->
	    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
	    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>	  
	</head>

	<body>
		<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">  
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
			</div><!-- /.container -->
		</nav>
		<div class="main" style="background-image: url('assets/images/default.jpg')">
			<!--    Change the image source '/assets/images/default.jpg' with your favourite image.     -->
			<div class="cover black" data-color="black"></div>
			<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->
		    <div class="container">
		        <h1 class="logo cursive">
		            <?php 
		            	echo $framework['name'];
		            ?>
		        </h1>
				<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
		        
		        <div class="content">
		            <h4 class="motto">phpNgin is a micro framework great for quick developement, APIs and customisation.</h4>
		            <?php
		            	print_r('
		            		<h4 class="motto">
			            		'.$version[0].', <br>
			            		'.$version[1].', <br>
			            		'.$version[2].'
		            		</h4>'
		            	);
		            ?>
		        </div>
		    </div>
		</div>
	</body>
   <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
   <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
</html>