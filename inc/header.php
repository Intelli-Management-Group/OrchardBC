<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : "BC Orchard"; ?></title>
    <meta name="description" content="<?php echo isset($description) ? $description : "BC Orchard"; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
</head>

<header>
    <nav class="navbar navbar-expand-md">
        <div class="custom-container container d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="index.php">
                <img src="img/home/logo.png" alt="logo" class="logo">
            </a>
            <!-- Toggle Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav d-flex justify-content-start w-100 column-gap-3">
                    <li class="nav-item">
                        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'coconut-water.php' ? 'active' : ''; ?>" href="coconut-water.php">Coconut Water</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="coconut-water.php">Coconut Water</a></li>
                            <li><a class="dropdown-item" href="#">100% Pure Juice</a></li>
                            <li><a class="dropdown-item" href="#">Arrow Tree Snacks</a></li>
                        </ul>
                    </li> -->
                    <li class="nav-item"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'find-us.php' ? 'active' : ''; ?>" href="find-us.php">Find Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

</html>