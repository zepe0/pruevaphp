<header>
    <img src="fakelogo.jpg">
    <?php

    $_SESSION["login"] === 1 ? print "<div class='headName'>" . $_SESSION["user"] . "   <button>Logout</button></div>" : ""

        ?>


</header>