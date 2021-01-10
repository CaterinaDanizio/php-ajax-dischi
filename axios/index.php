<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
        <!-- Vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <!-- Axios -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    
</head>
<body>
    <div class="container" id="app">
        <header>
            <div class="logo flex">
             <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Logoappliandrospotify.png" alt="logo Spotify">
            </div>
        </header>
        <div class="album flex">
            <ul class="flex" v-for="item in database">
         
            
            <li>
                    <img :src="item.poster" alt="cover"> <br>
                    <h3> {{ item.title }}</h3>
                    <p>{{ item.author }}</p>
                    <p>{{ item.year }}</p>     
             </li> 
        </ul>       
     </div>
    </div>
    <script src="script.js">
    </script>
</body>
</html>