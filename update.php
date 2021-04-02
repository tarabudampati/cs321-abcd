<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $description = $type = $did_you_know =  $state_name = $key_words = $image = "";

$name_err = $description_err = $type_err = $did_you_know_err = $state_name_err = $key_words_err = $image_err = "";

 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter a description.";     
    } else{
        $description = $input_description;
    }
    
    // Validate type
    $input_type = trim($_POST["type"]);
    if(empty($input_type)){
        $type_err = "Please enter the type.";     
    } else{
        $type = $input_type;
    }

    // Validate did you know
    $input_did_you_know = trim($_POST["did_you_know"]);
    if(empty($input_did_you_know)){
        $did_you_know_err = "Please enter a did you know";     
    } else{
        $did_you_know = $input_did_you_know;
    }

    // Validate state name
    $input_state_name = trim($_POST["state_name"]);
    if(empty($input_state_name)){
        $state_name_err = "Please enter the state name";     
    }else{
        $state_name = $input_state_name;
    }

    // Validate key words
    $input_key_words = trim($_POST["key_words"]);
    if(empty($input_key_words)){
        $key_words_err = "Please enter the key words.";     
    }else{
        $key_words = $input_key_words;
    }


    // Validate image
    $input_image = trim($_POST["image"]);
    if(empty($input_image)){
        $image_err = "Please enter the image.";     
    }else{
        $image = $input_image;
    }

    // Check input errors before inserting in database
    if(empty($name_err) && empty($description_err) && empty($type_err) && empty($did_you_know_err) && empty($state_name_err) && empty($key_words_err) && empty($image_err)){
        // Prepare an update statement
        $sql = "UPDATE dances SET name='$name', description='$description', type='$type', did_you_know ='$did_you_know', state_name= '$state_name', key_words='$key_words', image_url='$image' WHERE id='$id'";
        // Executing and getting results
        echo $sql;
        $mysqli_result = mysqli_query($link, $sql); 
        // Checking results
        if($mysqli_result){
                // Records updated successfully. Redirect to landing page
                header("location: list.php");
                exit();
        } else{
            echo "Something went wrong. Please try again later.";
        }
    }
    
    // Close connection - best practice
    mysqli_close($link);
} else {
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM dances WHERE id = '$id'";
        // Executing and getting results
        $mysqli_result = mysqli_query($link, $sql); 
        // Checking results
        if($mysqli_result){
            if(mysqli_num_rows($mysqli_result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($mysqli_result, MYSQLI_ASSOC);
                // Retrieve individual field value
                $name = $row["name"];
                $description = $row["description"];
                $type = $row["type"];
                $did_you_know = $row["did_you_know"];
                $state_name = $row["state_name"];
                $key_words = $row["key_words"];
                $image = $row["image_url"];

            } else{
                // URL doesn't contain valid id. Redirect to error page
                header("location: error.php");
                exit();
            }
                
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }

        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
        <?php
               // Include header and nav bar files
               require_once "header.php";
               require_once "nav_bar.php";
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="update.php" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                            <label>Description</label>
                            <textarea name="description" class="form-control"><?php echo $description; ?></textarea>
                            <span class="help-block"><?php echo $description_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($type_err)) ? 'has-error' : ''; ?>">
                            <label>Dance Type</label>
                            <textarea name="type" class="form-control"><?php echo $type; ?></textarea>
                            <span class="help-block"><?php echo $type_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($did_you_know_err)) ? 'has-error' : ''; ?>">
                            <label>Did You Know?</label>
                            <input type="text" name="did_you_know" class="form-control" value="<?php echo $did_you_know; ?>">
                            <span class="help-block"><?php echo $did_you_know_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($state_name_err)) ? 'has-error' : ''; ?>">
                            <label>State Name</label>
                            <textarea name="state_name" class="form-control"><?php echo $state_name; ?></textarea>
                            <span class="help-block"><?php echo $state_name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($key_words_err)) ? 'has-error' : ''; ?>">
                            <label>Key Words</label>
                            <textarea name="key_words" class="form-control"><?php echo $key_words; ?></textarea>
                            <span class="help-block"><?php echo $key_words_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($image_err)) ? 'has-error' : ''; ?>">
                            <label>Image</label>
                            <textarea name="image" class="form-control"><?php echo $image; ?></textarea>
                            <span class="help-block"><?php echo $image_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>