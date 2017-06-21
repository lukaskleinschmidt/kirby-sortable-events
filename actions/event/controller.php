<?php

class EventActionController extends LukasKleinschmidt\Sortable\Controllers\Action {

  /**
   * Add a entry
   */
  public function add() {

    $self   = $this;
    $parent = $this->field()->origin();

    if($parent->ui()->create() === false) {
      throw new Kirby\Panel\Exceptions\PermissionsException();
    }

    $form = $this->form('event', array($parent, $this->model(), $this->field()), function($form) use($parent, $self) {

      try {

        $form->validate();

        if(!$form->isValid()) {
          throw new Exception($self->field()->l('field.sortable.add.error.template'));
        }

        $data = $form->serialize();
        $template = $data['template'];

        $page = $parent->children()->create($self->uid($template), $template, array(
          'datetime' => $data['datetime'],
          'quantity' => $data['quantity'],
          'quantityExternal' => $data['quantityexternal'],
        ));

        $page->sort($parent->children()->visible()->count());

        $self->update($self->field()->entries()->pluck('uid'));
        $self->notify(':)');
        $self->redirect($self->model());
        // $this->redirect($page, 'edit');

      } catch(Exception $e) {
        $form->alert($e->getMessage());
      }

    });

    return $this->modal('event', compact('form'));

  }

}
