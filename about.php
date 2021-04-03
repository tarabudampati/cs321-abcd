<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}

include('header.php');
$page_title = 'Project ABCD > About'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> ABCD About Us </title>
</head>

<style>
    .image {
        width: 200px;
        height: 200px;
        padding: 20px 20px 20px 20px;
    }


    #title {
        text-align: center;
        color: darkgoldenrod;
    }

    #table_1 {
        border-spacing: 100px 0px;
    }

    .directions {
        text-align: center;
        padding: 20px 40px 0px 40px;
        color: darkgreen;
    }

    .description {
        padding: 0px 40px 0px 0px;
        color: darkgoldenrod;
    }

    #silc {
        width: 300;
        height: 85;
    }

    .Name {
        color: darkgreen;
    }
</style>

<body>
    <!--this is the tool bar-->

    <h2 id="title">About CS320 2 SILC</h2>

    <img src="images/about_images/art_strip.jpg">

    <h4 class="directions">Project ABCD was created in the 2020-2021 school year by the current SILC CS321 (PHP) class students. Each of us have contibuted to the creation of the website by completing one functionality individually. We have then pushed our updates to Github repository. We used clone, pull, push, sync functions of GitHub to download the master baseline and to integrate our changes. The project is also hosted on Blue Host at our own webaddress. Thank you and enjoy! <br> </h4>

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
            document.write("<table class = 'table_2'>");
            document.write("<tr>");
            document.write("<td><a href ='" + this.href + "' title = '" + this.name + "'><image class = 'image' src='" + this.image_src + "'></image></a></td>");
            document.write("<td><h2 class = 'Name'>" + this.name + "</h2><h6 class = 'description'>" + this.description + "</h6></td>");
            document.write("</tr></table>");
        }
    }



      var adi = new Student(
      "",
      "Adarsh Nayar",
      "images/about_images/sample_image.png",
      "N/A"
      );

      var anand = new Student(
      "",
      "Anand Seemakurty",
      "images/about_images/AnuradhaKumble.jpg",
      "Anand Seemakurthy is an 8th grader in Centennial Middle School.At School, he is involved in many activities, including;Speech, and Tennis.This was his third year in Speech and won a 4th place medal in the Great Speeches category.Anand has been attending SILC since the age of 6,and he has grown as a student and person.He loves to learn about the languages, the cultural facts  and programming skills.Anand also has a passion for yoga,guitar and saxophone and has done many learned many hobbies and has a new passion for painting,horse riding,guitar lessons"
      );

      var lakshika = new Student(
      "",
      "Lakshika Reddy",
      "images/about_images/ishana.jpg",
      "Lakshika Reddy is a freshman at Math and Science Academy. At school, she is part of Cheers for Volunteers, SWENext, Student Advisory Council, and Badminton. She has been learning Bharatanatym for the past four years, and piano for the past four years. She attends the School of India for Languages and Culture (SILC) to learn Hindi, Computer Science, and Dance. In her spare time, she enjoys reading books, drawing, painting, and traveling."

      );

      var neel = new Student(
      "",
      "Neel Shekar",
      "images/about_images/siva.jpg",
      "N/A"
      );
 
      var sreeja = new Student(
      "",
      "Sreeja Perakam",
      "images/about_images/deepta.jpg",
      "Sreeja is an 8th grader at Lake Middle School. She is a straight A student and is a part of a human rights club at her school. Sreeja enjoys music, she has been playing the piano for 7 years and the violin for 2. She has been a part of the SILC community for over 7 years, and is currently learning PHP and dance. In her spare time, Sreeja likes to spend time with friends and family, listen to music + podcasts, read, and go on long bike ride"

      );

      var tanuj = new Student(
      "",
      "Tanuj Sagar",
      "images/about_images/babu.jpg",
      "Tanuj is an 8th grader at Lake Middle School in Woodbury Minnesota. He is part of the Eastridge Debate team and the Eastridge baseball team. Tanuj likes to play guitar and the violin. He goes to SILC to attend CS320 (PHP). "
      );

      var tara = new Student(
      "",
      "Tara Budampati",
      "images/about_images/madhuri.jpg",
      "Tara Budampati is an 8th grader at St.Croix Preparatory Academy. She plays volleyball, debates for her school team, attends SILC, practices carnatic music, and plays the violin and piano. In her free time, she enjoys baking, going shopping, and hanging out with friends. She has been at SILC for 3 years, and really enjoys the community there. She attends the Telugu, PHP, and dance class. Tara has made many accomplishments including winning many math awards and being presented with dance opportunities at festival of nations."

      );
/*
    var mahesh = new Student(
      "",
      "Maheswara Sunkara (Co-Teacher)",
      "images/about_images/mahesh.jpg",
      "Mahesh is helping SILC CS3 this year. He has been with SILC for last 6 years as a volunteer and teacher in Telugu and Computer Science classes.He has been working in the software industry for 19 years. Currently, he is working as a software developer in BestBuy Richfield office. "
      );

      var pravallika = new Student(
      "",
      "Pravallika Sunkara",
      "images/about_images/pravallika.png",
      "Pravallika Sunkara is currently in 9th grade and goes to Eastridge High, in Woodbury MN. She is a classical and bollywood dancer. And her hobbies are art, music, and dance. Pravallika knows how to play 5 instruments, they are piano, violin, flute, ukulele, and the recorder. She has won 1st place painting 5 years in a row for the Ugadi TEAM competitions. She attends the School of India Languages and Culture (SILC) to learn PHP, and dance. She has been attending SILC for the past 6 years."
      );

      var nikhitha = new Student(
      "",
      "Nikhitha Gollamundi",
      "images/about_images/nikhitha.jpeg",
      "Nikhitha Gollamudi is a current junior at Eastview High School. She is actively involved in her school's Classic Debate team and National Honors Society. Outside of school she enjoys dancing and reading. Nikhitha has been learning Bharatanatyam for the past 10 years and has performed at several fundraisers, events, and competitions in the community. She also volunteers at her local hospital and works at Kumon, a tutoring center. "
      );

      var raja = new Student(
      "",
      "Raja Gollamundi",
      "images/about_images/raj.jpg",
      "Raja Gollamudi helped in integrating and testing the PHP project for SILC 2020 class. He has been working in the software industry for over 25 years. He is currently working as a Principal Consultant at Magenic Technologies. He has been a volunteer at School of India for Languages and Culture (SILC) and offered his services as a Telugu Teacher"
      );

      var smriti = new Student(
      "",
      "Smriti Samtani",
      "images/about_images/smriti.jpg",
      "Smriti Samtani is a sophmore at Mahtomedi High School. She has been a part of Silc for 2 years and absolutely loves it. In school, she is a part of the Swim and Dive team as a diver and participates in clubs in her spare time. One of her favorite after school activity is robotics. She loves the atmosphere and all of the amzing people she works with. Outside of school she loves to paint, take pictures, sing, dance, (basically all of the arts) but she is most passionate about drawing. Smriti also loves to ride her bike and rollerblade when she has the chance. Overall, Smriti is very lucky to have been presented with so many opportunities in her life and is grateful for all of them."
      );

      var vishnu = new Student(
      "",
      "Vishnu Vundamati",
      "images/about_images/vishnu.jpg",
      "Vishnu Vundamati is a freshman at a school in Woodbury, MN. He loves to learn about world history and be in the natural outdoors. Vishnu has been learning Carnatic Music for the past six years. He has performed twice for Indian Raga Labs, and will be performing in Cleveland, OH for the Thyagaraja Music Festival this April. Vishnu attends SILC(School of Indian Language and Culture) every Saturday and learns Hindi, Computer Science, and Tabla. Vishnu also likes to learn the piano and has been doing so for the past seven years. Vishnu has played in the Minnesota State Honors Concert five times, and hopes to one day win the Minnesota Young Artist competition. He hopes to continue playing the piano for the rest of his life. Other than piano Vishnu learns Taekwondo and achieved a black belt in 2017."
      );

      var ria = new Student(
      "",
      "Ria Koppikar",
      "images/about_images/ria.jpg",
      "Ria Koppikar is currently a sophomore at Eastview High School. At school, she is involved in many activities, including; Speech, Debate, DECA, and National Honors Society. This was her first year in DECA, and she participated in the State competition. Ria has been attending SILC since the age of 7, and she has learned and grown as a student and person. She thoroughly enjoys teaching, and this year she was an assistant Hindi teacher at SILC. Ria also has a passion for dance and does it through SILC as well. In her spare time, she enjoys spending time with family and friends, doing calligraphy, and traveling"
      );
*/
      

    
    function printoutStudents() {
        return adi.toString() + 
               anand.toString() +
               lakshika.toString() +
               neel.toString() + 
               sreeja.toString() +
               tanuj.toString() +
               tara.toString() ;
                
    }

    printoutStudents();
</script>
</body>