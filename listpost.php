<?php
include_once ("bd.php");

echo "<section>
        <ul class='listpost'>";

if (isset($_SESSION["cards"]) && count($_SESSION["cards"]) != 0) {
    foreach ($_SESSION["cards"] as $card) {
        echo "<li class='card'>
                <img>
                <h2>" . $card->titulo . "</h2>
                <img src='img/" . $card->img . "' class='imgpost'>
                <textarea >" . $card->des . "   </textarea>
                <i class='fa-regular fa-heart'> " . $card->likes . " </i>
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