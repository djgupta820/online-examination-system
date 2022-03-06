<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sidepanel.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <?php 
        include("header.php");
        include("sidepanel.php") ;
    ?>
    <div style="margin-left:20px;"> <h1>Home</h1> </div>
    <div class="main">
        <a href="courses.php"> <div class="box"> <img src="img/graduation.png" alt=""> Courses </div> </a>
        <a href="previous-exams.php"> <div class="box"> <img src="img/arrow.png" alt=""> Previous Exams </div> </a>
        <a href="schedule-exam.php"> <div class="box"> <img src="img/test.png" alt=""> Schedule Exam </div> </a>
    </div>
</body>
</html>