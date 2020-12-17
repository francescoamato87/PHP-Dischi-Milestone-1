<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISCHI-PHP</title>
    <link rel="stylesheet" href="dist/css/main.css">
</head>
<body>

<div id="app">
    
    <header>
         <h1> {{ appTitle }} </h1>
    </header>

    <ul>
        <li v-for="disco in dischi">
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