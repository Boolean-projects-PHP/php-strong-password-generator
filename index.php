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


        <div class="container d-flex flex-column align-items-center my-4 pb-4 px-4 rounded-3"
            style=" border: 1px solid black; background-color: #0079FF">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>

            <div class="bg-black text-light w-100 px-4 rounded-3">
                <div class="mt-3">
                    <p>Lunghezza password:</p>
                    <input class=" mb-2 w-25" type="text" name="number">
                    <p class="mt-1">Password generata:</p>
                    <div class="w-50 my-2 p-3" style="border: 1px solid white;">
                        <?php echo generaStringaRandom($stringlenght); ?>
                    </div>
                </div>
                <div class="mb-3 d-flex flex-column align-items-start">

                    <p>Consenti ripetizioni di uno o più caratteri:</p>
                    <div><input type="radio" name="" id=""><span class="px-1">Sì</span></div>
                    <div><input type="radio" name="" id=""><span class="px-1">No</span></div>

                </div>
                <div class="mb-3">
                    <button type="button" class="btn btn-primary">Genera</button>
                    <button type="button" class="btn btn-light">Annulla</button>
                </div>
            </div>




        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>