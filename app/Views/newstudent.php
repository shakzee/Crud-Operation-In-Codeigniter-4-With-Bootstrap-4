<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.css')?>" type="text/css">
</head>
<body>

    <div class="container">
        <div class="row p-5">
            <div class="col-6">
                <?php
                $validation = \Config\Services::validation();
                echo $validation->listErrors();
                ?>
                <form action="<?php echo site_url('students/addstudent'); ?>" method="post">
                   <div class="form-group">
                       <label>Student Name</label>
                           <input type="text" name="std" placeholder="Student Name" class="form-control">
                           <?= csrf_field();?>
                   </div>
                    <div class="form-group">
                        <label>
                            Student Subject
                        </label>
                        <input type="text" name="subject" placeholder="Student Subject" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Add Student</button>
                    <a href="<?= site_url('/')?>" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url('bootstrap/js/bootstrap.js')?>"><</script>

</body>
</html>
