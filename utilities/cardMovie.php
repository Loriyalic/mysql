<div class="card col-10 mx-auto my-2">
    <!-- Product image-->
    <img class="card-img-top" src="<?= $path; ?>" alt="<?= $movie['title']; ?>" />
    <!-- Product details-->
    <div class="card-body p-4">
        <div class="text-center">
            <!-- Product name-->
            <h3 class="fw-bolder"><?= $movie['title']; ?></h3>
            <!-- Product reviews-->
            <div class="d-flex justify-content-center small text-warning mb-2">
                <?= $movie['rating']; ?> / 10 &nbsp;
                <?php getStar($movie['rating']); ?>
            </div>
            <h5>Par : <?= $movie['director']; ?></h5>
            <!-- Product price-->
            <span class="text-muted">
                Année de réalisation : <?= $movie['year_released']; ?>
            </span>
            
        </div>
        <div class="d-flex justify-content-between my-2">
            <h2>
                <span class="badge bg-primary">
                    <i class="bi bi-ticket-perforated"></i> <?= $movie['box_office']; ?>
                </span>
            </h2>
            <h2>
                <span class="badge bg-primary">
                    <i class="bi bi-cash"></i> <?= $movie['budget']; ?> $
                </span>
            </h2>
            <h2>
                <span class="badge bg-primary">
                    <i class="bi bi-flag"></i> <?= $movie['languages']; ?>
                </span>
            </h2>
            <h2>
                <span class="badge bg-primary">
                    <i class="bi bi-alarm"></i> <?= $movie['duration']; ?> min.
                </span>
            </h2>
        </div>
        <div class="d-flex justify-content-around my-3">
            <h4 class="text-muted">De : <?= $movie['distributeur']; ?></h4>
            <h4 class="text-muted">Genre : <?= $movie['genre']; ?></h4>
        </div>
        
    </div>
</div>