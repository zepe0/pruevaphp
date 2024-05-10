<header>
    <img src="fakelogo.jpg">
    <?php

    $_SESSION["login"] === 1 ? print "
    <div> <button class='btn-new'><a href='home.php'>Inicio</button></a>
    <a href='newpost.php'><button class='btn-new'>Añadir nuevo post</button></a></div>
    <div class='headName'>" . $_SESSION["user"] . " 
        <form action='logout.php' method='POST'> 
        <button name='logout'>Logout</button></form>
    </div> 
    " : ""

        ?>


</header>