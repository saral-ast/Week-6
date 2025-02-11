<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laracast</title>
</head>
<body>
    <?php 
       $book = "rich dad poor dad";
       $read = true;
    $greetings="";
        if($read){
            $greetings .= " Read the $book";
        }else{
            $greetings .= " Don't read the $book";
        }
    ?>
     
     <h1>
        <?php
            echo "$greetings World";
         ?>
     </h1>
</body>
</html>