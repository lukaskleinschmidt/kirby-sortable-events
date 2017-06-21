<?php

class EventLayout extends BaseLayout {

  public function datetime($format = 'd/m/Y') {
    return $this->page()->date($format, 'datetime');
  }

}
