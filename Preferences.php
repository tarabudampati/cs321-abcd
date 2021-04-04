<?php
$cookie_row = "row_count";
$cookie_rvalue = "5";

$cookie_display= "dances_count";
$cookie_dvalue= "10";

$cookie_favdance= "fav_dance";
$cookie_fvalue= "Kuchpudi";

if(isset($_COOKIE[$cookie_row])) {
    
    $cookie_rvalue = $_COOKIE[$cookie_row];
}
if(isset($_COOKIE[$cookie_display])) {
    
    $cookie_dvalue = $_COOKIE[$cookie_display];
}
if(isset($_COOKIE[$cookie_favdance])) {
    
    $cookie_fvalue = $_COOKIE[$cookie_favdance];
}
$row_err = $display_err = $favdance_err = " ";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$input_row = trim($_POST['row_count']);
    if(empty($input_row)){
        $row_err = "Please enter the number of rows you want to show on display.";
    } else{
       $cookie_rvalue = $input_row;
    }
    $input_display = trim($_POST['dances_count']);
    if(empty($input_display)){
        $display_err = "Please enter the number of dances you want to be displayed.";
    } else{
        $cookie_dvalue = $input_display;
    }
    $input_favdance = trim($_POST['fav_dance']);
    if(empty($input_favdance)){
        $favdance_err = "Please enter your a valid Indian dance.";
    } else{
        $cookie_fvalue = $input_favdance;
    }
} 
setcookie($cookie_row, $cookie_rvalue, time()+(60 * 60), "/");
setcookie($cookie_display, $cookie_dvalue, time()+(60 * 60),"/");
setcookie($cookie_favdance,$cookie_fvalue,time()+(60 * 60),"/"); 
?>

<html>
    <head>
    <meta charset="UTF-8">
    <title>Project ABCD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 25px;
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
            <h4 id = "title">Update Preferences</h4>
        <form action="preferences.php" method="post">
      <table style="width:600px">
      <tbody>
      <tr>
      <th style = "width:300px"></th>
      <th> Current Value</th>
      <th>Update Value</th> 
        </tr>
        <tr>
        <td style = "width:300px">Number of Dances per Row:</td>
        </td>
        <td>
        <input disabled type = "int" maxlenght = "2"  size="13" value=<?php echo $cookie_rvalue?> title="Current Value">
        </td>
        <td>
        <input required type="int" name = "row_count" maxlenght="2" size = "13" value = <?php echo $cookie_rvalue ?> title = "Enter a Number!">
        </td>
        <tr>
        <td style = "width:300px">Number of Dances to Display:</td>
        </td>
        <td>
        <input disabled type = "int" maxlenght = "3" size="13" value=<?php echo $cookie_dvalue ?> title="Current Value">  
        </td>
        <td>
        <input required type = "int" maxlenght = "3" name="dances_count" maxlength="3" size="13" value= <?php echo $cookie_dvalue ?> title="Enter in another number">
        </td>
        </tr>
        <tr>
        <td style = "width:300px">Name of Favorite Dance:</td>
        <td>
        <input disabled type = "text" maxlenght = "10" size="13" value=<?php echo $cookie_fvalue ?> title="Current Value">       
        </td>
       <td>
       <input required type = "text" maxlenght = "10" name="fav_dance" maxlength="20" size="13" value=<?php echo $cookie_fvalue ?>  title="Enter in another number">   
        </td>
        </tr>
        </tbody>
        </table>
        <br>
        <button type = "submit" name = "submit" class="btn btn-primary btn-md align-items-center">Set Cookie</button>
        </form>
        </div>
        </div>
        </body>
<style type = "text/css">
h4{
    text-align: center;
    color: rgb(224, 172, 9);
    font-family: Arial, Helvetica, sans-serif;
}
td {
    font-family: Arial, Helvetica, sans-serif;
}
th{
    font-family: Arial, Helvetica, sans-serif;
}
button{
    background-color: rgb(224, 172, 9);
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-family: Arial, Helvetica, sans-serif;
}
input{
    border: 2px solid black;
    border-radius: 4px;
}
</style>                       
</html>