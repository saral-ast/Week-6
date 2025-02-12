<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative</title>
</head>
<body>


 
<ul>
            <?php foreach($filterBooks as $book): ?>
            <li>
                 <a href="<?=$book['purchaseUrl'] ?>">
                        <?= $book ['name']?>  (<?=$book['releaseYear']?>) - <?= $book['author'] ?>
                 </a>
                

            </li>
            <?php endforeach; ?>
        </ul>
    </h3>

</body>
</html>