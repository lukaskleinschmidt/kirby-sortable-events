<label class="label">
  <?= $field->label(); ?>
  <?= $field->counter(); ?>
  <?= $field->action('event'); ?>
</label>

<?php if($field->entries()->count()): ?>
  <?= $field->layouts(); ?>
<?php else: ?>
  <div class="sortable__empty">
    <?= $field->l('field.sortable.empty'); ?>
    <?= $field->action('event', ['label' => $field->l('field.sortable.add.first'), 'icon' => '', 'class' => '']); ?>
  </div>
<?php endif; ?>

<div class="sortable__navigation">
  <?= $field->action('event'); ?>
</div>
