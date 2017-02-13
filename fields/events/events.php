<?php

class EventsField extends SortableField {

  public $prefix = null;
  public $parent = 'events';
  public $layout = 'event';
  public $variant = 'events';

  static public $assets = array(
    'js' => array(
      'events.js',
    ),
    'css' => array(
      'events.css',
    ),
  );

  public function content() {
    
    // Needs to be changed because events is a default jQuery function
    return parent::content()->attr('data-custom-field', '_' . $this->type());

  }

}
