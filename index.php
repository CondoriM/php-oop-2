<?php

require_once __DIR__.'/db.php';

include __DIR__ . '/layout/head.php';

?>

<main>
    <div class="container my-5">

        <?php include_once __DIR__.'/partials/products.php' ?>

    </div>
</main>

<?php

include __DIR__ . '/layout/foot.php';