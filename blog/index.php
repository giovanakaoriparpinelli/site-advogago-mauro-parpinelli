<?php
require __DIR__ . "/posts-data.php";
$title = "Blog Jurídico";
$description = "Artigos sobre Cível, Família, Imobiliário, Consumidor e Direito Criminal, escritos pelo Dr. Mauro Jr Parpinelli — advocacia em Cornélio Procópio/PR.";
$active = "blog";
include __DIR__ . "/../partials/header.php";
?>

<section class="section--tight section">
  <div class="container" data-reveal>
    <span class="eyebrow">Blog</span>
    <h1>Artigos jurídicos</h1>
    <p class="lede">Conteúdo informativo sobre temas comuns do dia a dia — para entender melhor seus direitos antes mesmo de precisar de um advogado.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid grid--3">
      <?php foreach ($posts as $p): ?>
        <a class="card post-card" data-reveal href="/blog/<?php echo $p['slug']; ?>.php">
          <span class="post-card__meta"><?php echo $p['tag']; ?> · <?php echo formatPostDate($p['date']); ?></span>
          <h3><?php echo $p['title']; ?></h3>
          <p class="post-card__excerpt"><?php echo $p['excerpt']; ?></p>
          <span class="card__link">Ler artigo →</span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . "/../partials/footer.php"; ?>
