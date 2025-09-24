<?php
class Layouts {
    public function header($conf) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Buy and Sell Cars in Kenya with Dadaeb.co">
    <meta name="author" content="Dadaeb.co">
    <title><?php echo htmlspecialchars($conf['site_title']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
<main>
<?php
    }

    public function navbar($conf) {
?>
<div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="./">Dadaeb.co</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <?php if (isset($_SESSION['user'])): ?>
                            <li class="nav-item">
                                <a class="nav-link disabled">Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?></a>
                            </li>
                        <?php endif; ?>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./">Home</a>
                        </li>

                        <?php if (isset($_SESSION['user'])): ?>
                            <?php if (!empty($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin-users.php">Admin Panel</a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="signup.php">Sign Up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="signin.php">Sign In</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search cars..." aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
<?php
    }

    public function banner($conf) {
?>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Welcome to Dadaeb.co</h1>
            <p class="col-md-8 fs-4">
                Your trusted online marketplace for buying and selling cars in Kenya. 
                Browse thousands of listings or post your vehicle for sale today.
            </p>
            <a href="#cars" class="btn btn-primary btn-lg">Browse Cars</a>
            <a href="sell.php" class="btn btn-outline-secondary btn-lg">Sell Your Car</a>
        </div>
    </div>
<?php
    }

    public function content($conf) {
?>
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Why Choose Dadaeb.co?</h2>
                <p>
                    We provide a safe and reliable platform where you can connect with buyers and sellers. 
                    Transparent pricing, verified users, and nationwide reach.
                </p>
                <a href="about.php" class="btn btn-outline-light">Learn More</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                <h2>Need Financing?</h2>
                <p>
                    Partner banks and lenders available to help you secure the car of your dreams with flexible payment options. 
                    Apply online in minutes.
                </p>
                <a href="finance.php" class="btn btn-outline-secondary">Get Financing</a>
            </div>
        </div>
    </div>
<?php
    }

    public function footer($conf) {
?>
    <footer class="pt-3 mt-4 text-body-secondary border-top text-center">
        &copy; <?php echo date('Y'); ?> Dadaeb.co – Buy & Sell Cars in Kenya
    </footer>
</div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
<?php
    }
}
