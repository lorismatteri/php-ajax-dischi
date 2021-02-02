<?php
    /* include __DIR__ . './assets/partials/data.php'; */


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dischi</title>
        <!-- CSS -->
        <link rel="stylesheet" href="./assets/dist/css/style.css">
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
        <!-- Vue CDN -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <!--  AXIOS CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"
            integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ=="
            crossorigin="anonymous"></script>
    </head>
    <body>

        <header>
            <div class="container">
                <img src="./assets/dist/img/logo.png" alt="logo" />
            </div>
        </header>

        <main>

            <div id="app" class="container albums">
                
                <div class="album" v-for="album in albumList">
                    <img :src="album.poster" alt="">
                    <h3>{{album.title}}</h3>
                    <p>{{album.author}}</p>
                    <p>{{album.year}}</p>
                </div>
            
            </div>
            
        </main>

        

        <script src="./assets/src/main.js"></script>
    </body>
</html>