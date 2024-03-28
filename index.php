<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web || by Rizqi Ramadhan</title>
    <link rel="shortcut icon" href="image/aci.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <style>
        nav {
            background: rgb(157,99,22);
background: radial-gradient(circle, rgba(157,99,22,1) 0%, rgba(185,133,27,1) 100%);

        }
        body {
            background-color: bisque;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-lg p-3 mb-5 bg-body rounded">
        <div class="container-fluid ">
            <a class="navbar-brand" href="#"> <img src="image/blu.png" alt="" height="80px"> <span class="h3 text-light">RIZQI</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href=".">home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="?m=profil">Profil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tutorial
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?m=server">Server</a></li>
                            <li><a class="dropdown-item" href="?m=webdev">WebDev</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="?m=jarkom">JarKom</a></li>
                            <li><a class="dropdown-item" href="?m=pi">pi</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="?m=video">video</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-2">
        <?php include_once('Rizqitkj.php');?>
    </div>
    <div class="fixed-bottom">
        <div class="card">
            <div class="card-body">
                &copy;2023-<?= date("Y")?> - Rizqi TKJ30
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>