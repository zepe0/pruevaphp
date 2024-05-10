<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=1.3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Newpost</title>
</head>


<body>
  
    <?php
    session_start();
    include_once ("header.php");

    if (!isset($_SESSION) || $_SESSION["login"] === false)
        header("Location:index.php");
    ?>
    <div>

        <form class="newpost" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="new">
            <input type="text" placeholder="Titulo" name="titulo">
            <input type="file" name="file" accept="image/*">
            <button>Enviar</button>
        </form>
    </div>
    <div class="seenewpost">
        <?php

        if (isset($_REQUEST["action"])) {

            if (isset($_POST["action"]) && $_POST["action"] === "new") {
                if (isset($_POST["titulo"]) && strlen($_POST["titulo"]) === 0) {
                    echo "Inserta un titulo";
                    exit;
                }


            }

            if (isset($_FILES) && $_FILES["file"]["size"] != 0) {

                $destino = "img";
                $file_name = $_FILES["file"]["name"];
                $file_tmp = $_FILES["file"]["tmp_name"];
                if (!file_exists($destino . "/" . $file_name)) {

                    if (move_uploaded_file($file_tmp, $destino . "/" . $file_name)) {
                        if (file_exists($destino . "/" . $file_name)) {
                            $titulo = $_POST["titulo"];
                            $urlImg = $destino . "/" . $file_name;
                            $_SESSION["cards"][] = (object) array(
                                'titulo' => $titulo,
                                'img' => $_FILES["file"]["name"],
                                'likes' => 0,
                                'des' => 'Este es un nuevo monstruo creado para nuestro array.',
                                'comentario' => $titulo . ': ¡Hola a todos!'
                            );

                            echo "Archivo subido correctamente y se encuentra en el directorio.";
                        } else {
                            $error = error_get_last();
                            echo "Error: " . $error["message"];
                        }
                    } else {
                        $error = error_get_last();
                        echo "Error al subir el archivo: " . $error["message"];
                    }
                } else {
                    echo "el archivo ya existe ";


                }
            } else {
                echo "Seleciona una imagen ";
            }

        }

        ?>
    </div>
    <?php include_once ("footer.php") ?>
</body>

</html>