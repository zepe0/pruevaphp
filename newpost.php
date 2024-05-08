<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Newpost</title>
</head>


<body>
    <?php include_once ("header.php");
     if ($_SESSION["login"] === false)
     header("Location:index.php");
     ?>
    <div>

        <form class="newpost" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="new">
            <input type="text" placeholder="Titulo" name="titel">
            <input type="file" name="file" accept="image/*">
            <button>Enviar</button>
        </form>
    </div>
    <div class="seenewpost">
        <?php

        if (isset($_REQUEST["action"])) {

            if (isset($_POST["action"]) && $_POST["action"] === "new") {

                $titel = $_POST["titel"];
                $file = $_FILES["file"];
                print $titel . $file;

            } else {
                echo "Error con el formulario";
            }
        }

        ?>
    </div>
    <?php include_once ("footer.php") ?>
</body>

</html>