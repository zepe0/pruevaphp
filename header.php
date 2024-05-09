<header>
    <img src="fakelogo.jpg">
    <?php

    $_SESSION["login"] === 1 ? print "<div class='headName'>" . $_SESSION["user"] . " <form action='logout.php' method='POST'>  <button name='logout'>Logout</button></form></div>" : ""

        ?>


</header>