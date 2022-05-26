<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
  <?php foreach ($products as $product) : ?>
    <div class="col">
      <div class="card">
        <div class="badge bg-danger position-absolute top-0 end-0"><?= $product->prezzo; ?></div>
        <img class="img-fluid" src="<?= $product->img ?>" alt="image <?= $product->nome; ?>">
        <div class="card-body">
          <h3><?= $product->nome; ?></h3>
          <p><?= $product->tipo; ?></p>
          <p><?= $product->desc; ?></p>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>