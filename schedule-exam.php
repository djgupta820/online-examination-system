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
    <script type="text/javascript" src="script/script.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
        include("header.php");
        include("sidepanel.php");
    ?>
    <div class="all"> 
    <h1>Schedule Exam</h1> 
        <div class="">
        <div role="alert" id="err"> </div>
            <form action="">
                <label for="course" class="col-sm-2 col-form-label">Select Course</label>
                <select name="courses" id="courses" class="form-select">
                    <option value="so">Select Option</option>
                    <option value="btech">B.Tech</option>
                    <option value="be">BE</option>
                    <option value="bca">BCA</option>
                    <option value="bsc">BSc</option>
                </select>
                <label for="sem" class="col-sm-2 col-form-label">Select Semester</label>
                <select name="sem" id="sem" class="form-select">
                    <option value="sem">Select Year</option>
                    <option value="first"> First </option>
                    <option value="second"> Second </option>
                    <option value="third"> Third </option>
                    <option value="four"> Four </option>
                    <option value="five"> Five </option>
                    <option value="six"> Six </option>
                    <option value="seven"> Seven </option>
                    <option value="eight"> Eight </option>
                </select>
               <label for="subject" class="col-sm-2 col-form-label">Subject</label>
               <input class="form-control" type="text" placeholder="input subject" id="subject">

               <label for="subjectc" class="col-sm-2 col-form-label">Subject Code</label>
               <input class="form-control" type="text" placeholder="input subject Code" id="scode">

               <label for="ext" class="col-sm-2 col-form-label">Exam Type</label>
               <select name="ext" id="ext" class="form-select">
                   <option value="sel" selected>Select Option</option>
                   <option value="sub">Subjective</option>
                   <option value="obj">Objective</option>
               </select>
               <button class="btn btn-outline-primary" style="margin-top:20px;"> Next </button>
            </form>
        </div>
    </div>
</body>
</html>