    <?php
    include_once __DIR__ . '/movie.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP-OOP-01</title>
    </head>
    <body>
    <main>
    <?php
    $sonic = new Movie('sonic',2020,'azione fantascienza commedia avventura', 20);

    $avatar = new Movie('avatar',2009,'azione fantascienza avventura', 15);

    // display
    echo "Prezzo scontato di $sonic->title al 10%:
    <del>€ $sonic->price</del>
    € {$sonic->calcDiscount(10)}<br>";

    echo "Prezzo scontato di: $avatar->title al 10%:
    <del>€ $avatar->price</del>
    € {$avatar->calcDiscount(10)}<br>";
    
    ?>
    </main>  
    </body>
    </html>
