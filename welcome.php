<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Home</title>
</head>
<body>
        <?php include 'navbar.php' ?>
        <!----<?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>--->

</body>
</html>