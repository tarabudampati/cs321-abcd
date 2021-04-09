<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
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
            <?php
            $state_summary_sql="select state_name, count(*) from dances group by state_name";
            $state_summary_results = mysqli_query($link, $state_summary_sql);
            if (mysqli_num_rows($state_summary_results) > 0) {
                while ($row = mysqli_fetch_assoc($state_summary_results)) {
                   $state_summary_data[] = $row;
                   print_r($row);
                }
            }
            print_r($state_summary_data);
            if(mysqli_num_rows($state_summary_results) > 0){
                echo "<table class='table table-bordered table-striped'>";
                    echo "<thead>";
                        echo "<tr>";
                            
                            echo "<th nowrap>State Name</th>";
                            echo "<th nowrap>Number of Dances</th>";
                            
                        echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    // Fetching each row from results and displaying e
                    while ($row = mysqli_fetch_assoc($state_summary_results)) {
                        echo "<tr>"; echo "test";
                            echo "<td>" . $row['state_name'] . "</td>";
                            //echo "<td>" . $row['count(*)'] . "</td>";
                            while ($row = mysqli_fetch_assoc($state_summary_results)) {
                                $state_summary_data[] = $row;
                                print_r($row);
                             }
                            
                        echo "</tr>";
                    }
                    echo "</tbody>";                            
                echo "</table>";
                // Free result set
                mysqli_free_result($state_summary_results);
            } else{
                echo "<p class='lead'><em>No records were found.</em></p>";
            }


            ?>
    </div>
</body>
</html>