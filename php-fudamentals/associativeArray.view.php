<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative</title>
</head>
<body>


 
    <!--
<h3>
    <ul>
    <?php foreach($books as $book): ?>
        <li>
             <a href="<?=$book['purchaseUrl'] ?>">
                    <?= $book['name'] ?>  (<?= $book['releaseYear'] ?>)
             </a>
        </li>
        <?php endforeach; ?>
    </ul>
</h3>
-->
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