<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  <meta name="keywords" content="<?= $site->keywords()->html() ?>">
  <meta name="author" content="<?= $site->author()->html() ?>">

</head>
<body class="<?= $page->template() ?>">

  <header>
    <article>
      <div class="column full">
        <h1>
          <a href="<?= url() ?>"><?= $site->author()->html() ?></a>
        </h1>
      </div>
    </article>
    <article>
      <div class="column full">
        <? snippet('menu') ?>
      </div>
    </article>
  </header>
