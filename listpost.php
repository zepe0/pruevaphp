<?php


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
                <i class='fa-regular fa-heart '> </i> 
                <span> " . $card->likes . "</span>
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