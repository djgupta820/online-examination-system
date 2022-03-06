<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sidepanel.css">
</head>
<body>
    <div class="panel">
        <div class="infotab">
            <img src="img/user.png" alt="">
            <p>Username</p>
        </div>
        <ul>
            <p>Dashboard</p>
            <li> <a href="dashboard.php"> Home </a> </li>
            <li> <a href="courses.php">Courses</a> </li>
            <li> <a href="previous-exams.php">Previous Exams</a> </li>
            <li> <a href="schedule-exam.php">Schedule Exam</a> </li>
            <p>Profile</p>
            <li> <a href="profile.php"> View Profile </a> </li>
            <li> <a href="change-password.php"> Change Password </a> </li>
            <button class="btn btn-outline-danger">Signout</button>
        </ul>
    </div>
</body>
</html>