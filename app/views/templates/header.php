<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link href="<?= BASEURL; ?>/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL; ?>/bootstrap-icons-1.10.3/bootstrap-icons.css">
    <!-- <link href="/fontawesome-free-6.2.1-web/css/fontawesome.css" rel="stylesheet">
    <link href="/fontawesome-free-6.2.1-web/css/brands.css" rel="stylesheet">
    <link href="/fontawesome-free-6.2.1-web/css/solid.css" rel="stylesheet">
    <link href="/fontawesome-free-6.2.1-web/css/v5-font-face.css" rel="stylesheet"> -->
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL ?>">PHP MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= BASEURL ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL ?>/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL ?>/mahasiswa">Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>