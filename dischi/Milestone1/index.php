<?php

include __DIR__ . '/../api/data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Vue dischi</title>
</head>

<body>
    <header>
        <div>
            <img class="logo p-2" src="../img/spotify.png" alt="Logo Spotify" />
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($database as $data) : ?>
                    <div class="cols">
                        <div class="form mt-5">
                            <div>
                                <img src="<?php echo $data['poster'] ?>" alt="Poster" class="img-fluid">
                            </div>
                            <div class="text-center">
                                <h4 class="mt-3 text-white"><?php echo $data['title'] ?></h4>
                                <p class="text-muted"><?php echo $data['author'] ?></p>
                                <p class="text-muted"><?php echo $data['year'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>

</body>

</html>