<?php
$cardselect = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST["titulo"]) && !isset($_POST["action"])) {

        foreach ($_SESSION['cards'] as $key => $card) {
            if ($card->titulo === $_POST["titulo"]) {
                // Clonar el objeto antes de modificarlo para evitar modificar otros objetos ya que de otra manera se vuelve loco!!!!
                $new_card = clone $card;
                $new_card->likes++;
                $_SESSION['cards'][$key] = $new_card;
            }
        }

    }

    if (isset($_POST["titulo"]) && isset($_POST["action"]) && $_POST["action"] === "coment") {
        $cardselect = $_POST["titulo"];
    }

    if (isset($_POST["titulo"]) && isset($_POST["action"]) && $_POST["action"] === "newcoment") {
        $cardselect = $_POST["titulo"];
        $newcoment = (object) array(
            'coment' => $_SESSION["user"] . " : " . $_POST["newcoment"],
            'user' => $_SESSION["img"]
        );
        foreach ($_SESSION['cards'] as $key => $card) {
            if ($card->titulo === $_POST["titulo"]) {
                $new_card = clone $card;

                if (!is_array($new_card->comentario)) {
                    $new_card->comentario = array();
                }

                $new_card->comentario[] = $newcoment;
                $_SESSION['cards'][$key] = $new_card;
            }

        }
    }
}
?>

<section>
    <ul class='listpost'>
        <?php foreach ($_SESSION["cards"] as $card): ?>
            <li class='card'>
                <h2><?= $card->titulo ?></h2>
                <div class="subtitulo">
                    <img src='img/<?= $card->img ?>' class='imgpost'>
                    <p><?= $card->des ?></p>
                </div>
                <div class="navarCard">
                    <form method='POST'>
                        <button><i class='fa-regular fa-heart'></i></button>
                        <span><?= $card->likes ?></span>
                        <input type='hidden' name='titulo' value='<?= $card->titulo ?>'>
                    </form>
                    <form method='POST'>
                        <button><i class="fa-solid fa-comment"></i></button>
                        <input type='hidden' name='action' value='coment'>
                        <span>
                            <?= is_array($card->comentario) ? count($card->comentario) : 0 ?>
                        </span>
                        <input type='hidden' name='titulo' value='<?= $card->titulo ?>'>
                    </form>
                </div>
                <?php if ($cardselect === $card->titulo): ?>
                    <div style=" display: flex; gap: 12px">
                        <form method='POST'>
                            <input type='text' name='newcoment'>
                            <button><i class='fa-solid fa-plus'></i></button>
                            <input type='hidden' name='action' value='newcoment'>
                            <input type='hidden' name='titulo' value='<?= $card->titulo ?>'>
                        </form>
                        <form method='POST'>
                            <button><i class="fa-solid fa-x"></i></button>
                        </form>
                    </div>
                <?php endif; ?>

                <div class="comentarios">
                    <?php
                    if (isset($card->comentario)) {

                        if (is_array($card->comentario)) {
                            foreach ($card->comentario as $comentario) {

                                echo "<div class='flex'><img src='img/$comentario->user' class='imgComent'></img><p>{$comentario->coment}</p></div>";
                                echo "";
                            }
                        } else {

                            echo "<p>Error: Los comentarios no están en el formato esperado.</p>";
                        }
                    } else {

                        echo "<p>No hay comentarios para esta tarjeta.</p>";
                    }

                    ?>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</section>