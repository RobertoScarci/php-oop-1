<?php 

require_once __DIR__ . '../Movies.php';

$horrorFilm = new Movies('La società della neve', 'Commedia', 'https://image.tmdb.org/t/p/w500/eOu5TmFYmLJ1bzRMWNmxWAtU7cQ.jpg', '2023-12-13');
$comedyFilm = new Movies('La società della neve', 'Commedia', 'https://image.tmdb.org/t/p/w500/eOu5TmFYmLJ1bzRMWNmxWAtU7cQ.jpg', '2023-12-13');

var_dump($horrorFilm)

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