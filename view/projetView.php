<div class="container">
    <div class="col-12 m-auto row">


<!-- Create multi card -->
<?php
foreach ($products as $key => $value) { ?>

    <div class="card">
        <img class="card-img-top" src="<?= $value['src'] ?>" alt="Avatar" class="image">
        <div class="overlay">
            <div class="title-card"><?= $value['projet_name'] ?></div>
            <div class="text-card"><?= $value['content'] ?></div>
        </div>
    </div>
    <?php } ?> 

    </div>
</div>
