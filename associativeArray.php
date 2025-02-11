<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative</title>
</head>
<body>
    <?php 
        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep',
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968,
                'purchaseUrl' => 'http://example.com'
            ],
            [
                'name' => 'Project Hail Mary',
                'author' => 'Andy Weir',
                'releaseYear' => 2021,
                'purchaseUrl' => 'http://example.com'
            ]
        ]; 
    ?>
    <h3>
        <ul>
            <?php foreach($books as $book): ?>
            <li>
                 <a href="<?=$book['purchaseUrl'] ?>">
                        <?= $book ['name']?>  (<?=$book['releaseYear']?>)
                 </a>
                

            </li>
            <?php endforeach; ?>
        </ul>
    </h3>
</body>
</html>