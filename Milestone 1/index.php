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
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    </head>
    <body>

        <header>
            <div class="container">
                <img src="./assets/dist/img/logo.png" alt="logo" />
            </div>
        </header>

        <main>

            <div class="container albums">
                <?php foreach ($albums as $album) { ?>
                    <div class="album">
                        <img src="<?php echo $album["poster"]; ?>" alt="">
                        <h3><?php echo $album["title"]; ?></h3>
                        <p class="author"><?php echo $album["author"]; ?></p>
                        <p class="year"><?php echo $album["year"]; ?></p>
                    </div>
            <?php }?>
            </div>
            
        </main>

        
    </body>
</html>