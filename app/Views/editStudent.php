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
	<form action="<?php echo site_url('students/updatestudent'); ?>" method="post">
		<p>Student Name
			<input type="text" name="std" placeholder="Student Name" value="<?php echo $student[0]['s_name']?>">
		</p>
		<p>Student Subject
			<input type="text" name="subject" placeholder="Student Name" value="<?php echo $student[0]['s_subject']?>">
		</p>
		<input type="hidden" value="<?php echo $student[0]['s_id']?>" name="id">
		<button type="submit">Update Student</button>
	</form>
</body>
</html>
