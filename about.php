<!DOCTYPE html>
<html lang="en">

<head>
    <title> ABCD About Us </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>

<style>
.wrapper{
            width: 1000px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }

    .image {
        width: 100px;
        height: 100px;
        padding: 0px 0px 0px 0px;
    }


    #title {
        text-align: center;
        color: darkgoldenrod;
    }

    .directions {
        text-align: center;
        padding: 20px 20px 0px 20px;
        color: darkgreen;
    }

    .description {
        padding: 0px 0px 0px 0px;
        color: darkgoldenrod;
    }

    .Name {
        color: darkgreen;
    }
</style>

<body>
<div class="wrapper">
        <div class="container-fluid">
     <?php
               // Include header and nav bar files
               require_once "header.php";
               require_once "nav_bar.php";
            ?>

    <h2 id="title">About CS321 SILC</h2>
    <div align=center>
    <img src="images/about_images/art_strip.jpg">
    </div>

    <h4 class="directions">Project ABCD was created in the 2020-2021 school year by the current SILC CS321 (PHP) class students. Each of us have contibuted to the creation of the website by completing one functionality individually. We have then pushed our updates to Github repository. We used clone, pull, push, sync functions of GitHub to download the master baseline and to integrate our changes. The project is also hosted on Blue Host at our own webaddress. Thank you and enjoy! <br> </h4>
    </div>
</body>

<script>

    //Everyonce can fill in their own information:
    //Href is for more specific bio if they want to incorportate one.

    function Student(href, name, image_src, description) {
        this.href = href;
        this.name = name;
        this.image_src = image_src;
        this.description = description;

        this.toString = function () {
            document.write("<table>");
            document.write("<tr>");
            document.write("<td><a href ='" + this.href + "' title = '" + this.name + "'><image class = 'image' src='" + this.image_src + "' width='40' height='40'></image></a></td>");
            document.write("<td>&nbsp;</td>");
            document.write("<td><h2 class = 'Name'>" + this.name + "</h2><h6 class = 'description'>" + this.description + "</h6></td>");
            document.write("</tr></table>");
        }
    }
    var anand = new Student(
      "",
      "Anand Seemakurty",
      "images/about_images/anand.jpg",
      "Anand Seemakurthy is an 8th grader in Centennial Middle School.At School, he is involved in many activities, including;Speech, and Tennis.This was his third year in Speech and won a 4th place medal in the Great Speeches category.Anand has been attending SILC since the age of 6,and he has grown as a student and person.He loves to learn about the languages, the cultural facts  and programming skills.Anand also has a passion for yoga,guitar and saxophone and has done many learned many hobbies and has a new passion for painting,horse riding,guitar lessons"
      );

      var lakshika = new Student(
      "",
      "Lakshika Reddy",
      "images/about_images/lakshika.jpg",
      "Lakshika Reddy is a freshman at Math and Science Academy. At school, she is part of Cheers for Volunteers, SWENext, Student Advisory Council, and Badminton. She has been learning Bharatanatym for the past four years, and piano for the past four years. She attends the School of India for Languages and Culture (SILC) to learn Hindi, Computer Science, and Dance. In her spare time, she enjoys reading books, drawing, painting, and traveling."

      );

      var neel = new Student(
      "",
      "Neel Shekar",
      "images/about_images/neel.jpg",
      "Neel is an 8th grader attending Lake Middle School in Woodbury. He likes playing the guitar, as well as the trombone. He participates in the CS320 SILC class in which he learns PHP."
      );
 
      var sreeja = new Student(
      "",
      "Sreeja Perakam",
      "images/about_images/sreeja.jpg",
      "Sreeja is an 8th grader at Lake Middle School. She is a straight A student and is a part of a human rights club at her school. Sreeja enjoys music, she has been playing the piano for 7 years and the violin for 2. She has been a part of the SILC community for over 7 years, and is currently learning PHP and dance. In her spare time, Sreeja likes to spend time with friends and family, listen to music + podcasts, read, and go on long bike ride"

      );

      var tanuj = new Student(
      "",
      "Tanuj Sagar",
      "images/about_images/tanuj.jpg",
      "Tanuj is an 8th grader at Lake Middle School in Woodbury Minnesota. He is part of the Eastridge Debate team and the Eastridge baseball team. Tanuj likes to play guitar and the violin. He goes to SILC to attend CS320 (PHP). "
      );

      var tara = new Student(
      "",
      "Tara Budampati",
      "images/about_images/tara.jpg",
      "Tara Budampati is an 8th grader at St.Croix Preparatory Academy. She plays volleyball, debates for her school team, attends SILC, practices carnatic music, and plays the violin and piano. In her free time, she enjoys baking, going shopping, and hanging out with friends. She has been at SILC for 3 years, and really enjoys the community there. She attends the Telugu, PHP, and dance class. Tara has made many accomplishments including winning many math awards and being presented with dance opportunities at festival of nations."

      );

      var mahesh = new Student(
      "",
      "Mahesh Sunkara (Teacher)",
      "images/about_images/mahesh.jpg",
      "Mahesh is the primary teacher for CS3 this year. He has been with SILC for last 7 years as a volunteer and teacher in Telugu and Computer Science classes.He has been working in the software industry for 20 years. Currently, he is working as a software developer in BestBuy Richfield office."

      );
    
    function printoutStudents() {
        return anand.toString() +
               lakshika.toString() +
               neel.toString() + 
               sreeja.toString() +
               tanuj.toString() +
               tara.toString() +
               mahesh.toString();
                
    }

    printoutStudents();
</script>
</body>