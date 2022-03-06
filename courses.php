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
    <title>Courses</title>
</head>
<body>
    <?php
        include("header.php");
        include("sidepanel.php") ;
    ?>
    <div class="all">
        <h1>Courses</h1>  
        <table class="table table-hover table-dark" style="text-align:center;">
            
            <tr bd="1px">
                <th>S. No.</th>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Actions</th>
            </tr>
            
            <?php
                for($i=0; $i<15; $i++)
                {
                    print("<tr>");
                    print("<td> $i </td>");
                    print("<td> BCA0$i </td>");
                    print("<td> BCA </td>");
                    print("<td> <button class='btn btn-outline-primary'>Edit</button> <button class='btn btn-outline-danger'>Remove</button> </td>");
                    print("</tr>");
                }
            ?>
            
        </table> 
    </div>
</body>
</html>