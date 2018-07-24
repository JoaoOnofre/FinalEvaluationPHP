<!-- 

In this exercise you will need to use PHP to handle a request to process an Ajax form.

The form will add a new vehicle to the database and will contain the following fields:
- Make
- Model
- Year
- Colour

The form will be processed in PHP. A success or error message will be displayed
depending on the entry.

Note: you do not need to use AJAX or SQL to do this, only PHP.

 -->
 
 <?php

$errors = array();

		if(isset($addVeihcle) && $addVeihcle == true) {

			echo '<div class="col-md-6 col-md-offset-3">';
			echo '<div class="alert alert-success">New Car added with Sucess!! :D</div>';
			echo '</div><br>';
		}

		if(!empty($errors)) {
			echo '<div class="col-md-6 col-md-offset-3">';
			echo '<div class="alert alert-danger">'.implode('<br>', $errors).'</div>';
			echo '</div><br>';
		}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<title>New Vehicle</title>
</head>
<body>

    <form method="post" class="form-horizontal well well-sm">
        <legend>ADD A NEW CAR</legend>

        <div class="form-group">
            <label class="col-md-4 control-label" for="firstname">Make</label>
            <div class="col-md-8">
                <input id="make" name="make" type="text" class="form-control input-md" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="lastname">Model</label>  
            <div class="col-md-8">
                <input id="model" name="model" type="text" class="form-control input-md" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="email">Year</label>  
            <div class="col-md-8">
                <input id="year" name="year" type="number" class="form-control input-md" required>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="city">Color</label>  
            <div class="col-md-8">
                <input id="color" name="color" type="text" class="form-control input-md" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <button type="submit" class="btn btn-primary">SEND</button>
            </div>
        </div>
    </form>

</html>
