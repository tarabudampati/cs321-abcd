<?php
// Include config file
require_once "config.php"; //h
 
// Define variables and initialize with empty values
$name = $description = $type = $did_you_know =  $state_name = $keywords = $image = ""; //h
$name_err = $description_err = $type_err = $did_you_know_err = $state_name_err = $keyword_err = $image_err = "";
 
// Processing form data when form is submitted   h
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){ //h
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name."; //h
    } else{
        $name = $input_name; //h
    }
    
    // Validate description h
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter a description."; //h
    } elseif(!filter_var($input_description, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $description_err = "Please enter a valid description."; //h
    } else{
        $description = $input_description;
    }
    
    // Validate type h
    $input_type = trim($_POST["type"]);
    if(empty($input_type)){
        $type_err = "Please enter a type.";     
    } else{ //h
        $type = $input_type;
    }

//h
    //Validate did you know h
    $input_did_you_know = trim($_POST["did_you_know"]);
    if(empty($input_did_you_know)){
        $did_you_know_err = "Please enter a did you know.";     //h
    } else{
        $did_you_know = $input_did_you_know;
    }

    $input_state_name = trim($_POST["state_name"]); //h
    if(empty($input_state_name)){
        $state_name_err = "Please enter a state name";     
    } else{
        $state_name = $input_state_name; //h
    }

    $input_keyword = trim($_POST["keywords"]); //h
    if(empty($input_state_name)){
        $keyword_err = "Please enter the keywords";     
    } else{
        $keyword = $input_keyword;
    }
// h
    $input_image = trim($_POST["image"]);
    if(empty($input_image)){
        $image = "Please enter a image"; //h 
    } else{
        $image = $input_image;
    }

   

    // Check input errors before inserting in database h
    if(empty($name_err) && empty($description_err) && empty($type_err) && empty($did_you_know_err) ){
        // Prepare an insert statement
        $sql = "INSERT INTO dances (name, description, type, did_you_know, state_name ) VALUES ('$name', '$description', '$type' , '$did_you_know' , '$state_name' , key)";
        echo $sql;
        // Executing and getting results <!-- h -->
        $mysqli_result = mysqli_query($link, $sql); 
        // Checking results
        if($mysqli_result){
                // Records created successfully. Redirect to landing page h
                header("location: index.php");
                exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
    }
    // Close connection - best practice  h
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head> <!-- h -->
    <meta charset="UTF-8">
    <title>Edit Record</title> <!-- h -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css"> 
        .wrapper{ 
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head> <!-- h -->
<body> <!-- h -->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Edit Record</h2>  <!-- h -->
                    </div>
                    <p>Please fill this form and submit to edit a dance in the database.</p>
                    <form action="update.php" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Dance</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>"> <!-- h -->
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <textarea name="description" class="form-control"><?php echo $description; ?></textarea>
                            <span class="help-block"><?php echo $description_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($type_err)) ? 'has-error' : ''; ?>"> <!-- h -->
                            <label>Dance Type</label>
                            <textarea name="type" class="form-control"><?php echo $type; ?></textarea>
                            <span class="help-block"><?php echo $type_err;?></span>
                        </div>                       
                        <div class="form-group <?php echo (!empty($did_you_know_err)) ? 'has-error' : ''; ?>">
                            <label>Did you know?</label>
                            <textarea name="did_you_know" class="form-control"><?php echo $did_you_know; ?></textarea> <!-- h -->
                            <span class="help-block"><?php echo $did_you_know_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($state_name_err)) ? 'has-error' : ''; ?>">
                            <label>State Name</label>
                            <textarea name="state_name" class="form-control"><?php echo $state_name; ?></textarea>
                            <span class="help-block"><?php echo $state_name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($keyword_err)) ? 'has-error' : ''; ?>">
                            <label>Key Words</label>
                            <textarea name="keyword_name" class="form-control"><?php echo $keyword_name; ?></textarea> <!-- h -->
                            <span class="help-block"><?php echo $keyword_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label>Image</label>
                            <textarea name="image_name" class="form-control"><?php echo $image_name; ?></textarea>
                            <span class="help-block"><?php echo $image_err;?></span>
                        </div>
                     
                        <!-- h -->
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="list.php" class="btn btn-default">Cancel</a>
                    </form>
                </div> <!-- h -->
            </div>        
        </div>
    </div>
</body>
</html>