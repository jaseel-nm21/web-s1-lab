<html>
	<head>
		<title>grade</title>
	</head>
	<body>
	<h1>MARK GRADE</h1>
	<?php
		$mark=90;
		if($mark>=90){
			print "YOUR GRADE IS S";
		}
		elseif($mark>=80){
			print "YOUR GRADE IS A";
		}
		elseif($mark>=70){
			print "YOUR GRADE IS B";
		}
		elseif($mark>=60){
			print "YOUR GRADE IS C";
		}
		elseif($mark>=50){
			print "YOUR GRADE IS P";
		}
		else{
			print "FAILED";
		}
	?>
	
	</body>
</html>
	