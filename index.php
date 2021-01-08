<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php include 'data.php';
    ?>
</head>
<body>
    <div class="container" id="app">
        <header>
            <div class="logo flex">
             <img src="https://upload.wikimedia.org/wikipedia/commons/f/f2/Logoappliandrospotify.png" alt="">
            </div>
        </header>
        <div class="album flex">
            <ul class="flex">
         <?php
            for($i=0; $i<count($database); $i++) {
                $item = $database[$i]; 
            ?>
            <li>
                    <img src="<?php echo $item["poster"]; ?>" alt="cover"> <br>
                    <?php echo 'Title: ' . $item['title']; ?> <br>
                    <?php echo 'Author: ' . $item['author']; ?> <br>
                    <?php echo 'Year: ' . $item['year']; ?> <br>       
             </li> 
            <?php
            }
            ?>
        </ul>       
     </div>
    </div>
    <script src="script.js">
    </script>
</body>
</html>