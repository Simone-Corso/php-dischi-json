<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-albums</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>


<div id="app">
 
    <header>
        <div class="container-fluid">
            <a href='#' class="my_img-container ms-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/512px-Spotify_logo_without_text.svg.png"
                    alt="logo" class="ms-4 mt-2" style="width: 50px; height: 50px;">
            </a>
        </div>
    </header>

  
    <main class="py-3 px-5 ">
        <div class="container-fluid px-5">
           
            <div v-if='discsInfos' class="my_cards-container d-flex flex-wrap px-5">
                <article v-for="discInfos,index in discsInfos" :key='index'
                    class='d-flex flex-column align-items-center rounded rounded-3 p-4' :title="discInfos.genre"
                    @click='showActiveDisc(index)'>
                    <div class=" my_img-container">
                        <img :src="discInfos.poster" alt="" class="w-100">
                    </div>

                    <div class="my_card-info d-flex flex-column align-items-center pt-4 pb-2 text-center">
                        <h3 class="my_title fw-bold">{{discInfos.title}}</h3>
                        <h6>{{discInfos.author}}</h6>
                        <h4 class="my_date fw-bold">{{discInfos.year}}</h4>
                    </div>
                </article>
            </div>
    </main>
</div>
</div>

<script src="js/script.js"></script>
</body>
</html>

