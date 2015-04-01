<ul class="navigation">
  <? foreach ( $pages->visible() as $page ) { ?>
    <li>
      <a href="<?= $page->url() ?>"><?= $page->title()->html() ?></a>
    </li>
  <? } ?>
</ul>
