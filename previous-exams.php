<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script type="text/javascript", src="script/script.js"></script>
    <title>Previous Exams</title>
</head>
<body>
    <?php
        include("header.php");
        include("sidepanel.php");
    ?>

    <div class="all"> 
    <h1>Previous Exams</h1>
    <table class="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">S. No.</th>
                <th scope="col">Year</th>
                <th scope="col">Semester</th>
                <th scope="col">Subject</th>
                <th scope="col">Subject Code</th>
                <th scope="col">Date</th>
                <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                for($i=1; $i<15; $i++)
                {
                    print('<tr style="margin-top:20px;">');
                    print("<td scope='row'>$i</td>");
                    print('<td>3<sup>rd</sup></td>');
                    print('<td>5<sup>th</sup></td>');
                    print('<td style="min-width: 200px;">C++</td>');
                    print('<td>BCA501</td>');
                    print("<td>".date('d/m/y')."</td>");
                    print('<td>'.date("h:i:sa").'</td>');
                    print('<td>'.date("h:i:sa").'</td>');
                    print("<td> <a href='#'> Details </a> </td>");
                    print('</tr>');
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>