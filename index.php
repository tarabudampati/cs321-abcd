<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    session_start();
}
require 'config.php';

?>

<html>

<head>
    <title>ABCD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>
<style>
     .wrapper{
            width: 1000px;
            margin: 0 auto;
        }

    .image {
        width: 250px;
        height: 350px;*/
        padding: 8px 8px 8px 8px;
        transition: transform .2s;
    }

    .image:hover {
        abc transform: scale(1.2)
    }

    #table_1 {
        border-spacing: 300px 0px;
    }

    #table_2 {
        margin-left: auto;
        margin-right: auto;
    }

    #silc {
        width: 300;
        height: 85;
    }

    #welcome {
        text-align: center;
    }

    #directions {
        text-align: center;
    }

    #title {
        color: black;
        text-align: center;
        font-size: 20px;
    }

    a:visited,
    a:link,
    a:active {
        text-decoration: none;
    }

    #title2 {
        text-align: center;
        color: darkgoldenrod;
    }
</style>

<body>
<div class="wrapper">
        <div class="container-fluid">

    <?php
    if (isset($_GET['preferencesUpdated'])) {
        if ($_GET["preferencesUpdated"] == "Success") {
            echo "<br><h3 align=center style='color:green'>Success! The Preferences have been updated!</h3>";
        }
    }
    ?>
    
    
    <?php

    //=============================================================================
    // Step 1: Get the row_count and dances_count from COOKIE or from defaults
    //=============================================================================
    // Hard code these defaults for now; Ideally, we can get these from the database.

    $row_count = 5;
    $dances_count = 30;
    $fav_dress = "Saree";
    $image_height = "250";
    $image_width = "200";

    // cookie name
    $row_count_cookie_name = "row_count";
    $dances_count_cookie_name = "dances_count";
    $favorite_dances_cookie_name = "favorite_dances";
    $image_height_cookie_name = "img_height";
    $image_width_cookie_name = "img_width";

    // if cookie is present, then use those values
    // if cookie is NOT present, then the defaults we set earlier will come into play
    if (isset($_COOKIE[$favorite_dances_cookie_name])) {
        $fav_dances= $_COOKIE[$favorite_dances_cookie_name];
    }

    if (isset($_COOKIE[$row_count_cookie_name])) {
        $row_count = $_COOKIE[$row_count_cookie_name];
    }

    if (isset($_COOKIE[$dances_count_cookie_name])) {
        $dances_count = $_COOKIE[$dances_count_cookie_name];
    }

    if (isset($_COOKIE[$image_height_cookie_name])) {
        $image_height = $_COOKIE[$image_height_cookie_name];
    }

    if (isset($_COOKIE[$image_width_cookie_name])) {
        $image_width = $_COOKIE[$image_width_cookie_name];
    }

    //=============================================================================
    // Step 2: Get the $pic and $name for each of the dances from the database
    // Refrence: https://www.php.net/manual/en/mysqli-result.fetch-assoc.php
    //=============================================================================

    $name_sql = "SELECT `name` FROM `dances`";
    $pic_sql = "SELECT `image_url` FROM `dances`";
    $id_sql =  "SELECT `id` FROM `dances`";
    
    $Sort_string = @$_GET['option'];

        if(empty($Sort_string)) {
            $Sort_string = 'name' ;
        }
    $name_sql = $name_sql. " ORDER BY " .$Sort_string. " ASC";
    $pic_sql = $pic_sql. " ORDER BY " .$Sort_string. " ASC";
    $id_sql = $id_sql. " ORDER BY " .$Sort_string. " ASC";


    $name_results = mysqli_query($link, $name_sql);
    $pic_results = mysqli_query($link, $pic_sql);
    $id_results = mysqli_query($link, $id_sql);

    if (mysqli_num_rows($name_results) > 0) {
        while ($row = mysqli_fetch_assoc($name_results)) {
            $dance_names[] = $row;
        }
    }

    if (mysqli_num_rows($pic_results) > 0) {
        while ($row = mysqli_fetch_assoc($pic_results)) {
            $dance_pics[] = $row;
        }
    }

    if (mysqli_num_rows($id_results) > 0) {
        while ($row = mysqli_fetch_assoc($id_results)) {
            $dance_ids[] = $row;
        }
    }
   
if ($dances_count > count($dance_ids)) {
    $dances_count = count($dance_ids);
}

    //=============================================================================
    // Step 3: Now, display the dances in loop 
    //=============================================================================


// Include header and nav bar files
require_once "header.php";
require_once "nav_bar.php";
echo ' <h2 id="directions">Select a dance to know more about it</h2><br>';
    echo "<table id = 'table_2'>
        <!--Links to each dance can be put inside the href = -->";
        echo "<tr>";
        for ($a = 0; $a < $dances_count; $a) {
            for ($b = 0; $b < $row_count; $b++) {
                if ($b >= $row_count) {
                    break;
                } else {
                    $dance = $dance_names[$a]['name'];
                    $pic = $dance_pics[$a]['image_url'];
                    $pic = "images/dance_images/" . $pic;
                    $id = $dance_ids[$a]['id'];
                    echo "
                    <td>
                        <a href = 'read.php?id=$id' title = '$dance'>
                        <img src='$pic' width='$image_width' height='$image_height'>
                            <div id = 'title'>$dance </div>
                            
                        </a>
                    </td>
                    ";    
                    $a++;  
                }
            }
            echo "</tr>";
        }
    echo "</table>";
    ?>
    </div>
</div>
</body>
</html>