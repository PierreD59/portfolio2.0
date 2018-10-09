<div class="container mt-3 mb-5">
    <div class="col-12 m-auto row">

<!-- Create multi card -->
<?php
foreach ($products as $key => $value) { ?>
    <div class="col-12 col-sm-12 col-md-6 col-lg-5 p-0 card">
        <a href="products.php?&id=<?= $key ?>"><img class="card-img-top" src="<?= $value['src'] ?>" alt="Card image cap"/>
        <div class="col-sm-10 col-md-6 col-lg-12 card-body">
            <p class="card-text"> <?= $value['projet_name'] ?></p>
        </div></a>
    </div>
<?php } ?>
    </div>
</div>
