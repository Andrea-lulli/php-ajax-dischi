<?php
include __DIR__ . '/../database/index.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <title>Google</title>

    <!-- link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- link mio css -->
    <link rel="stylesheet" href="../style.css">

    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <div>
            <img class="logo" src="https://www.pngplay.com/wp-content/uploads/12/Spotify-Logo-Free-PNG.png" alt="" />
        </div>
    </header>


    <!-- main -->
    <main class="conteiner d-flex ">
        <div class="col-12 d-flex box-card">
            <?php foreach ($database as $element) { ?>
            <div class="card">
                <img src="<?php echo $element['poster'] ?>" class="" alt="..." />
                <div class="card-body">
                    <p class="titolo">
                        <?php echo $element['title']; ?>
                    </p>
                    <p class="testo">
                        <?php echo $element['author']; ?>
                    </p>
                    <p class="testo">
                        <?php echo $element['year']; ?>
                    </p>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>



    <!-- script Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>

<!-- script Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>

</html>