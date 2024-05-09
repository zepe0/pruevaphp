<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump(($_POST));
    if (isset($_POST['likes'])) {
        foreach ($_SESSION['cards'] as &$card) {
            if ($card->titulo === $_POST["titulo"]) {

                $card->likes += $likesToAdd;
                break;
            }
        }

        header("refresh: 1");
    }
}

echo "<section>
        <ul class='listpost'>";

if (isset($_SESSION["cards"]) && count($_SESSION["cards"]) != 0) {
    foreach ($_SESSION["cards"] as $card) {
        echo "<li class='card'>
                <img>
                <h2>" . $card->titulo . "</h2>
                <img src='img/" . $card->img . "' class='imgpost'>
                <p >" . $card->des . "   </p>
                <div>
                <form method='POST'><button><i class='fa-regular fa-heart '> </i> </button>
                <span name='likes'> " . $card->likes . "</span>
                <input type='hidden' name='titulo' value='" . $card->titulo . "'>
                </form>
                </div>
                <p>" . $card->comentario . "</p>
            </li>";
    }
} else {
    echo "<li class='card'>
            <img>
            <h2>Titulo</h2>
            <textarea></textarea>
            <i class='fa-regular fa-heart'></i>
        </li>
        <li class='card'>
            <img>
            <h2>Titulo</h2>
            <textarea></textarea>
            <i class='fa-regular fa-heart'></i>
        </li>
        <li class='card'>
            <img>
            <h2>Titulo</h2>
            <textarea></textarea>
            <i class='fa-regular fa-heart'></i>
        </li>";
}

echo "</ul>
    </section>";
?>