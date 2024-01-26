<?php 

require_once __DIR__ . '/Movies.php';

$movies = [
    new Movies('La società della neve', 'Commedia', 'https://image.tmdb.org/t/p/w500/eOu5TmFYmLJ1bzRMWNmxWAtU7cQ.jpg', '2023-12-13'),
    new Movies('Scream 4', 'Horror', 'https://m.media-amazon.com/images/I/61nQR9fZltL._AC_UF894,1000_QL80_.jpg', '2022-10-13'),
    new Movies('Star Wars III: Revenge of Sith', 'Fantasy', 'https://i.etsystatic.com/24635155/r/il/81313d/4040350169/il_fullxfull.4040350169_mamn.jpg', '2005-10-13'),
];


?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach($movies as $movie){ ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $movie->imageUrl; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-5"><?php echo $movie->titolo; ?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Genere:</strong> <?php echo $movie->genere; ?></li>
                            <li class="list-group-item"><strong>Data Uscita:</strong> <?php echo $movie->data_pubblicazione; ?></li>
                        </ul>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </main> 
</body>
</html>