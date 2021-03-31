<?php

// Include config file

require_once "config.php";

// Define variables and initialize with empty values

$name = $description = $type = $did_you_know =  $state_name = $key_words = $image = "";

$name_err = $description_err = $type_err = $did_you_know_err = $state_name_err = $key_words_err = $image_err "";

// Processing form data when form is submitted

if($_SERVER["REQUEST_METHOD"] == "POST"){
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

        $type_err = "Please enter a type.";     

    } else{

        $type = $input_type;

    }


    //Validate did you know

    $input_did_you_know = trim($_POST["did_you_know"]);

    if(empty($input_did_you_know)){

        $did_you_know_err = "Please enter a did you know.";     

    } else{

        $did_you_know = $input_did_you_know;

    }



    $input_state_name = trim($_POST["state_name"]);

    if(empty($input_state_name)){

        $state_name_err = "Please enter a state name";     

    } else{

        $state_name = $input_state_name;

    }

    $input_key_words = trim($_POST["key_words"]);

    if(empty($input_key_words)){

        $key_words_err = "Please enter some key words.";     

    } else{

        $key_words = $input_key_words;

    }
    $imageName = basename($_FILES["fileToUpload"]["name"]);
    $target_dir = "images/dance_images/";

        $target_file = $target_dir . $imageName;

        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                header('location: create_dress.php?create_dress=fileRealFailed');
                $uploadOk = 0;
            }
        }

    // Check input errors before inserting in database

    if(empty($name_err) && empty($description_err) && empty($type_err) && empty($did_you_know_err) && empty($state_name_err) && empty($key_words_err) ){

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Prepare an insert statement
            $sql = "INSERT INTO dances (name, description, type, did_you_know, state_name, key_words, image_url, status) VALUES ('$name', '$description', '$type' , '$did_you_know' , '$state_name' , '$key_words', '$imageName', 'proposed')";
            // Executing and getting results

            $mysqli_result = mysqli_query($link, $sql); 
            echo $mysqli_result;
       
           // Checking results

            if($mysqli_result){

                    // Records created successfully. Redirect to listing page

                    header("location: list.php");

                    exit();

            } else {

                echo "Something went wrong. Please try again later.";

            }
        }
    }

    // Close connection - best practice 

    mysqli_close($link);

}

?>

 

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Create Record</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

    <style type="text/css">

        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }

    </style>
    <script>
     var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
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
                        <h2>Create Dance</h2>
                    </div>

                    <p>Please fill this form and submit to add employee record to the database.</p>

                    <form action="create.php" method="post" enctype="multipart/form-data">

                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">

                            <label>Dance</label>

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

                            <label>Did you know?</label>

                            <textarea name="did_you_know" class="form-control"><?php echo $did_you_know; ?></textarea>

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

                        <div class="form-group <?php echo (!empty($key_words_err)) ? 'has-error' : ''; ?>">

                            <label>Image</label>

                         <input style=width:400px type="file" onchange="loadFile(event)" name="fileToUpload" id="fileToUpload" accept="image/jpg, image/jpeg, image/png" title="Please enter an image file" value="<?php echo $fileToUpload; ?>"></input><br>
                            <img id="output" width="200" />
                         </div>
                         

                        <input type="submit" class="btn btn-primary" value="Submit">

                        <a href="index.php" class="btn btn-default">Cancel</a>

                    </form>

                </div>

            </div>        

        </div>

    </div>

</body>

</html>