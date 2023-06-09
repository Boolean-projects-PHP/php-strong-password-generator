<?php
include_once __DIR__ . '/function.php'
    ?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">


        <div class="container">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
            <div>
                <p>Lunghezza password:</p>
                <input class=" mb-2 w-50" type="text" name="number">
                <p class="mt-1">Password generata:</p>
                <div class="w-50 mt-1 p-3" style="border: 1px solid black;">
                    <?php echo generaStringaRandom($stringlenght); ?>
                </div>
            </div>
            <div class="mb-3">
                <p>Consenti ripetizioni di uno o più caratteri:</p>
                <input type="radio" name="" id=""><span class="px-1">Sì</span>
                <input type="radio" name="" id=""><span class="px-1">No</span>
            </div>
            <div>
                <button type="button" class="btn btn-primary">Genera</button>
                <button class="px-2 button_two" type="reset">Annulla</button>
            </div>



        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>