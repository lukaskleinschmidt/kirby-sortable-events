<?php

// Make sure that the sortable plugin is loaded
$kirby->plugin('sortable');

if(!function_exists('sortable')) return;

$kirby->set('field', 'events', __DIR__ . DS . 'field');

$sortable = sortable();
$sortable->set('layout', 'event', __DIR__ . DS . 'layout');
// $sortable->set('variant', 'variants', __DIR__ . DS . 'variant');
$sortable->set('action', 'event', __DIR__ . DS . 'actions' . DS . 'event');
