<? snippet('header') ?>

  <main>
    <article>
      <div class="column full">
        <h1><?= $page->title() ?></h1>
        <?= $page->text()->kirbytext() ?>
      </div>
    </article>
  </main>
  
<? snippet('footer') ?>
