<header>
    <img src="fakelogo.jpg">
    <?php include_once ("bd.php");
    $_SESSION["login"] === 1 ? print "<div class='headName'>".$_SESSION["name"] ."</div>": null

        ?>


</header>