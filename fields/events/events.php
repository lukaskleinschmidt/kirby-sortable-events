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

}
