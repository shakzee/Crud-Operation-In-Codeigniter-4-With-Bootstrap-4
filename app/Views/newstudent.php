<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo site_url('students/addstudent'); ?>" method="post">
		<p>Student Name
			<input type="text" name="std" placeholder="Student Name">
		</p>
		<p>Student Subject
			<input type="text" name="subject" placeholder="Student Name">
		</p>
		<button type="submit">Add Student</button>
	</form>
</body>
</html>
