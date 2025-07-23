<?php include 'view/layout.php'; ?>
<div class="container mt-4">
    <h2 class="mb-4">Les dernières actualités</h2>

    <?php if (empty($articles)): ?>
        <div class="alert alert-warning">Aucun article trouvé.</div>
    <?php else: ?>
        <div class="row">
            <?php foreach ($articles as $article): ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?= $article['titre'] ?></h5>
                            <p class="card-text"><?= substr($article['contenu'], 0, 150) ?>...</p>
                        </div>
                        <div class="card-footer text-muted">
                            Publié le <?= date('d/m/Y', strtotime($article['dateCreation'])) ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
</main></body></html>
