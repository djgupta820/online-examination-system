<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Profile</title>
</head>
<body>
    <?php
        include("header.php");
        include("sidepanel.php");
    ?>
    
    <div class="profile">
    <h1>Profile</h1>
        <div class="ppic">
            <img src="img/user.png" alt="profile picture">
        </div>
        <div class="data">
            <p>Name : name</p>
            <p>Username : Username</p>
        </div>
    </div>
</body>
</html>