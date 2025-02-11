<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array and Associative Array</title>
</head>
<body>
    <?php
        $books = [
            'rich dad poor dad',
            'the 7 habits of highly effective people',
            'the 4 hour work week'
        ];?>
        <div>
            <ul style="font-size: 20px;">
                <?php foreach($books as $book):?>
                    <li><?=$book ?></li>
                <?php endforeach;?>    
            </ul>
        </div>
</body>
</html>