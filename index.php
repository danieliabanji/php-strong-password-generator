<?php
session_start();
include __DIR__ . '/functions/functions.php';
$numberPassword = $_GET["number"] ?? " ";
$repeatyes = $_GET["repeatyes"] ?? " ";
$repeatno = $_GET["repeatno"] ?? " ";
$lettere = $_GET["lettere"] ?? " ";
$numeri = $_GET["numeri"] ?? " ";
$simboli = $_GET["simboli"] ?? " ";

$_SESSION["password"] = generate($numberPassword);



include __DIR__ . '/header.php';
?>

<main>
    <div class="generator">
        <div class="container">
            <header>
                <h1>Strong Password Generator</h1>
                <h2>Genera una password sicura </h2>

            </header>
            <form action="index.php" method="GET">
                <div class="containform ">
                    <div class="container text-center">
                        <label for="number">Lunghezza password: </label>
                        <input type="number" name="number">
                        <div class="d-flex justify-content-center mb-5">
                            <div class="text">
                                <p> Consenti ripetizione di uno o più caratteri :</p>
                            </div>
                            <div class="option">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="repeatyes" id="repeatyes">
                                    <label class="form-check-label" for="repeatyes">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="repeatno" id="repeatno">
                                    <label class="form-check-label" for="repeatno">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lettere" id="lettere">
                                    <label class="form-check-label" for="lettere">
                                        Lettere Maiuscole
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="numeri" id="numeri">
                                    <label class="form-check-label" for="numeri">
                                        Numeri
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="simboli" id="simboli">
                                    <label class="form-check-label" for="simboli">
                                        Simboli
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Invia</button>
                        <button class="btn btn-secondary" type="reset">Annulla</button>
                        <?php if (!empty($numberPassword)) { ?>
                        <a href="password.php" class="btn btn-primary">Vedi password</a>


                        <?php } ?>

                    </div>
            </form>
        </div>
    </div>
    </div>
</main>
</body>

</html>