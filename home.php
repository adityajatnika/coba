<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<?php
   session_start();
   if (!isset($_SESSION['username'])) {
       header("Location: login.php");
       exit;
   }
?>

<body>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <h3>Selamat datang, <?php echo $_SESSION['username']?></h3>
    <p>Klik <a href="logout.php">disini</a> untuk logout</p>
</body>

</html>