<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>home</title>
</head>

<body>
    <?php session_start() ?>
    <?php include_once ("header.php"); ?>

    <?php
    if ( (!isset($_COOKIE["user"]) && !isset($_COOKIE["pas"])) || $_SESSION["login"] === 0 )
        header("Location:index.php");
    ?>
    <a href="newpost.php"><button class="btn-new">Añadir nuevo post</button></a>
    <div>
        <?php include_once ("listpost.php") ?>
    </div>

    <?php include_once ("footer.php") ?>
</body>

</html>