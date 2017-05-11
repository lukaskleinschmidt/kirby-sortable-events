<?php
// Make sure that the sortable plugin is loaded
$kirby->plugin('sortable');

if(!function_exists('sortable')) return;

$kirby->set('field', 'events', __DIR__ . DS . 'field' . DS . 'events');

$sortable = sortable();
$sortable->set('layout', 'event', __DIR__ . DS . 'layout' . DS . 'event');
$sortable->set('variant', 'events', __DIR__ . DS . 'variant' . DS . 'events');
