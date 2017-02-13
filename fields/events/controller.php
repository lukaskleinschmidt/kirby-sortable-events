<?php

class EventsFieldController extends Kirby\Sortable\Controllers\Field {

  /**
   * Create unique uid
   *
   * @param  string $template
   * @return string
   */
  public function uid($template) {

    if(is_a($template, 'Page')) {
      $template = $template->intendedTemplate();
    }

    $prefix = $this->field()->prefix();

    if(strpos($template, $prefix) !== false) {
      $length = str::length($prefix);
      $template = str::substr($template, $length);
    }

    // add a unique hash
    $checksum = sprintf('%u', crc32($template . microtime()));
    return $template . '-' . base_convert($checksum, 10, 36);

  }

}
