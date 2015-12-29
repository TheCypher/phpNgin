<!DOCTYPE html>
<html>
	<head>
	  <title><?php echo $framework['name']; ?></title>
	</head>
	<body>
		<center>
			<h2>
				<?php 
				  echo $framework['name'];

				  print_r('
				    <h4 class="motto">
				      '.$version[0].', <br>
				      '.$version[1].', <br>
				      '.$version[2].'
				    </h4>'
				  );
				?>			
			</h2>
		</center>
	</body>
</html>