<?php
$config = [
    'base_url' => ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '192.168.0.47')
        ? 'https://192.168.0.47/bcorchard/'
        : 'https://bcorchard.intelligrp.com/'
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BC Orchard</title>
    <!-- <meta name="description" content="@yield('meta_description', 'KINGSMAN')"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <base href="<?php echo $config['base_url']; ?>">
    <!-- <base href="http://192.168.0.47/BCOrchard/"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/Generic/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/Generic/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/Generic/favicon/favicon-16X16.png') }}">
    <link rel="manifest" href="{{ asset('img/Generic/favicon/site.webmanifest') }}"> -->
    <script src="" defer></script>
</head>

<header>
    <nav class="navbar navbar-expand-lg bg-transparent position-absolute w-100">
        <div class="custom-container container d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="img/home/logo.png" alt="logo" class="logo">
            </a>
            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex justify-content-start w-100 gap-3">
                    <li class="nav-item">
                        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Coconut Water</a></li>
                            <li><a class="dropdown-item" href="#">100% Pure Juice</a></li>
                            <li><a class="dropdown-item" href="#">Arrow Tree Snacks</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Our Purpose</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Store Location</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

</html>