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
    <title>Document</title>
</head>
<body>
    <?php
        include("header.php");
        include("sidepanel.php");
    ?>
    <div class="all"> 
    <h1>Schedule Exam</h1>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <td>S. No.</td>
                    <td>Year</td>
                    <td>Semester</td>
                    <td>Subject</td>
                    <td>Subject Code</td>
                    <td>Date</td>
                    <td>Time Allotement</td>
                    <td>Start Time</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i=1;$i<15;$i++)
                    {
                        print("<tr>");
                        print("<td scope='row'>$i</td>");
                        print('<td>3<sup>rd</sup></td>');
                        print('<td>5<sup>th</sup></td>');
                        print('<td style="min-width: 200px;">C++</td>');
                        print('<td>BCA501</td>');
                        print("<td>".date('d/m/y')."</td>");
                        print('<td>1 hour</td>');
                        print('<td>'.date("h:i:sa").'</td>');
                        print("<td> <a href='#' class='btn btn-outline-primary'> Details </a> <a href='#' class='btn btn-outline-danger'> Cancel </a></td>");
                        print('</tr>');
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>