<?php
session_start();
$passwordgenerata = $_SESSION["password"];


include __DIR__ . '/header.php';

?>

<div class="container text-center my-5">
    <h1>La tua password è : </h1>
    <h1>
        <?php echo $passwordgenerata ?>
    </h1>
    <a href="lougout.php" class="btn btn-primary mt-5">Ritorna alla home </a>
</div>

</body>

</html>