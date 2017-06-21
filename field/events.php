<?php

class EventsField extends SortableField {

  // public $variant = 'events';
  public $layout = 'event';
  public $parent = 'events';

  public function entries() {
    $entries = parent::entries();
    return $entries->sortBy('datetime');
  }

  public function result() {
    return null;
  }

}
