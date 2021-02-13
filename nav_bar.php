<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html>
<header class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index">My Favorite</a></li>                    
                <li><a href = "#Summary">Summary</a></li>
                <li><a href = "./list.php">List</a></li>
                <li><a href = "#Preferences">Preferences</a></li>
                <li><a href = "#About">About</a></li>
                <li><a href = "#Help">Help</a></li>
                <li><a href = "#Login">Login</a></li>
            </ul>
        </div>
    </div>
</header>

<style type="text/css">
li{
  list-style-type: none;
  margin: 2vw 0;
  
  font-size: 3vh;
}

a{
  text-decoration: none;
  color: black;
  font-family: monospace;

  padding: 2vw;
}

nav{
  width: 100vw;
  background-color: white;
}

ul{
float: right;
  margin: 0;
  padding: 0;
  
  display: flex;  
}

body{
  margin: 0;
}

button{
  display: none;
}

a:hover{
  background-color: #f0e130;
}


}
</style>
</html>
