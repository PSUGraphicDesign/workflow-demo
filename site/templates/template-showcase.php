<? snippet('header') ?>

  <main>
    <article>
      <div class="column full">
        <h1><?= $page->title() ?></h1>
        <?= $page->description()->kirbytext() ?>
      </div>
    </article>
    <article>
      <div class="column full">
        <table>
          <thead>
            <tr>
              <td><strong>Page Name</strong></td>
              <td><strong>Template</strong></td>
            </tr>
          </thead>
          <tbody>
            <? foreach ( $page->children() as $child ) { ?>
              <tr>
                <td>
                  <a href="<?= $child->url() ?>"><?= $child->title() ?></a>
                </td>
                <td>
                  <code><?= $child->intendedTemplate() ?></code>
                </td>
              </tr>
            <? } ?>
          </tbody>
        </table>
      </div>
    </article>
  </main>

<? snippet('footer') ?>
