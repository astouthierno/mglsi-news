<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Actualités Polytechniciennes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="bg-dark text-white p-3">
    <div class="container">
        <h1 class="text-center">ACTUALITÉS POLYTECHNICIENNES</h1>
        <nav class="nav justify-content-center mt-3">
            <a class="nav-link text-white" href="index.php">Accueil</a>
            <?php foreach ($categories as $cat): ?>
                <a class="nav-link text-white" href="index.php?cat=<?= $cat['id'] ?>"><?= $cat['libelle'] ?></a>
            <?php endforeach; ?>
        </nav>
    </div>
</header>
<main>
