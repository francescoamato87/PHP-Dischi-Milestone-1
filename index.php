<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCHI-PHP</title>
    <!-- STYLE  -->
    <link rel="stylesheet" href="dist/css/main.css">
    <!-- GOOGLE FONT  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head>
<body>

<div id="app">
    
    <header>
        <nav class="navbar">
            <h1 class="title"> {{ appTitle }} </h1>
            <img src="./img/logo.png" alt="">
        </nav>
    </header>

    <ul class="dischi-list">
        <li class="disco" v-for="disco in dischi">
            <div class="wrap-image">
              <img :src ="disco.poster" :alt="disco.title">
            </div>
            <h3 class="title">{{disco.title}}</h3>
            <div class="author">{{disco.author}}</div>
            <div class="year">{{disco.year}}</div>
            <div class="genre">{{disco.genre}}</div>
        </li>
    </ul>

</div>


            <!-- JS  -->
<script src="./dist/js/main.js"></script>
</body>
</html>