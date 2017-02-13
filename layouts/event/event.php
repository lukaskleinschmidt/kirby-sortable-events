<?php

class EventLayout extends BaseLayout {

  public function lastModified() {
    return date('F j, Y, g:i a', $this->page()->modified());
  }

}
