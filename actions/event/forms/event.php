<?php

return function($page, $model, $field) {

  $options = [];

  foreach($page->blueprint()->pages()->template() as $template) {
    $options[$template->name()] = $template->title();
  }

  $form = new Kirby\Panel\Form(array(
    'template' => array(
      'label'    => $field->l('field.sortable.add.template.label'),
      'type'     => 'select',
      'options'  => $options,
      'default'  => key($options),
      'required' => true,
      'readonly' => count($options) == 1 ? true : false,
      'icon'     => count($options) == 1 ? $page->blueprint()->pages()->template()->first()->icon() : 'chevron-down',
    ),
    'datetime' => array(
      'label'      => 'Datum',
      'type'       => 'datetime',
      'data'       => array(
        'format'   => 'DD-MM-YYYY',
      ),
      'time'       => array(
        'format'   => 24,
        'interval' => 5,
      ),
      'required'   => true,
      'icon'       => 'calendar-o',
    ),
    'quantity' => array(
      'label'    => 'Kartenanzahl',
      'icon'     => 'ticket',
      'type'     => 'number',
      'required' => true,
      'width'    => '1/2',
    ),
    'quantityExternal' => array(
      'label'    => 'Kartenanzahl im Buchladen',
      'icon'     => 'ticket',
      'type'     => 'number',
      'required' => true,
      'default'  => 0,
      'width'    => '1/2',
    ),
  ));

  $form->cancel($model);
  $form->buttons->submit->val($field->l('field.sortable.add'));

  return $form;

};
