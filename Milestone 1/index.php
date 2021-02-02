<?php
    include __DIR__ . './assets/partials/data.php';

    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dischi</title>
        <link rel="stylesheet" href="./assets/dist/css/style.css">
    </head>
    <body>

        <header>
            <div class="container">
                <img src="./assets/dist/img/logo.png" alt="logo" />
            </div>
        </header>

        <main>
            <?php foreach ($albums as $album) {
                echo $album["title"] . "<br>";
                echo $album["author"] . "<br>";
                echo $album["genre"] . "<br>";
                echo $album["year"] . "<br>";
            }?>
        </main>

        
    </body>
</html>