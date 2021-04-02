<?php
require_once "config.php";
?>
<header class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href = "./about.php">About</a></li>
                <li><a href="./my_favorite.php">My Favorite</a></li>                    
                <li><a href = "./summary.php">Summary</a></li>
                <li><a href = "./list.php">List</a></li>
                <li><a href = "./preferences.php">Preferences</a></li>
                <li><a href = "./help.php">Help</a></li>
               <!-- <li><a href = "./login.php">Login</a></li>-->
            </ul>
        </div>
    </div>
</header>

<style type="text/css">
li{
  list-style-type: none;
  font-size: 2vh;
}

a{
  text-decoration: bold;
  color: black;
  font-family: monospace;
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
