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
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.form-group {
  border: 2px solid black;
  font-family: "Monaco", "Lucinda Console", monospace;
}
.form-group {
  text-align: center;
}
.form-group-2 {
  border: 1px solid black;
}
 .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
</style>
</head>
<body>
    <div class="wrapper">
    <?php
               // Include header and nav bar files
               require_once "header.php";
               require_once "nav_bar.php";
            ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1><center>View Record</center></h1>
                    </div>
                    <div class="form-group">
                    <div class = "form-group-2">
                        <label>ID</label>
                    </div>
                        <p class="form-control-static"><?php echo $row['id']; ?></p>
                    </div>
                    <div class="form-group">
                    <div class = "form-group-2">
                        <label>Name</label>
                    </div>
                        <p class="form-control-static"><?php echo $row['name']; ?></p>
                    </div>
                    <div class="form-group">
                    <div class = "form-group-2">
                        <label>Description</label>
                    </div>
                        <p class="form-control-static"><?php echo $row['description']; ?></p>
                    </div>
                    <div class="form-group">
                    <div class = "form-group-2">
                        <label>Did You Know?</label>
                        </div>
                        <p class="form-control-static"><?php echo $row['did_you_know']; ?></p>
                    </div>
                    <div class="form-group">
                    <div class = "form-group-2">
                        <label>Type</label>
                        </div>
                        <p class="form-control-static"><?php echo $row['type']; ?></p>
                    </div>
                    <div class="form-group">
                    <div class = "form-group-2">
                        <label>State Name</label>
                        </div>
                        <p class="form-control-static"><?php echo $row['state_name']; ?></p>
                    </div>
                    <div class="form-group">
                    <div class = "form-group-2">
                        <label>Image URL</label>
                    </div>
                        <p class="form-control-static"><?php echo $row['image_url']; ?></p>
                    </div>
                    <p><a href="list.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
