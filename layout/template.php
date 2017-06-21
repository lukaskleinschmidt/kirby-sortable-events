<div class="sortable-layout">
  <nav class="sortable-layout__navigation">
    <div class="sortable-layout__icon" title="<?= l('pages.show.template') . ': ' . i18n($layout->blueprint()->title()); ?>">
      <?= $layout->icon(); ?>
    </div>
    <div class="sortable-layout__title" title="<?= $layout->datetime('d.m.Y'); ?> um <?= $layout->datetime('H:i'); ?>">
      <?= $layout->datetime('d.m.Y'); ?> um <?= $layout->datetime('H:i'); ?>
      <?= $layout->counter(); ?>
    </div>
    <?= $layout->action('edit'); ?>
    <?= $layout->action('delete'); ?>
    <?= $layout->action('toggle'); ?>
  </nav>
</div>
