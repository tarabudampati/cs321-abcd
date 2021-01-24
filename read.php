<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
     $param_id = trim($_GET["id"]);
    // Prepare a select statement
    $sql = "SELECT * FROM dances WHERE id = '$param_id'";
    // Executing query and getting result
    $mysqli_result = mysqli_query($link, $sql); 
    // Checking result
    if($mysqli_result){
        if(mysqli_num_rows($mysqli_result) == 1){
            /* Fetch result row as an associative array. Since the result set
            contains only one row, we don't need to use while loop */
            $row = mysqli_fetch_array($mysqli_result, MYSQLI_ASSOC);
                
            // Retrieve individual field value
            $id = $row['id'];
            $name = $row['name'];
            $description = $row['description'];
            $did_you_know = $row['did_you_know'];
            $type = $row['type'];
            $state_name = $row['state_name'];
            $image_url = $row['image_url'];
        } else{
            // URL doesn't contain valid id parameter. Redirect to error page
            header("location: error.php");
            exit();
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
 
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>ID</label>
                        <p class="form-control-static"><?php echo $row['id']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $row['name']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <p class="form-control-static"><?php echo $row['description']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Did You Know?</label>
                        <p class="form-control-static"><?php echo $row['did_you_know']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <p class="form-control-static"><?php echo $row['type']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>State Name</label>
                        <p class="form-control-static"><?php echo $row['state_name']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Image URL</label>
                        <p class="form-control-static"><?php echo $row['image_url']; ?></p>
                    </div>
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
