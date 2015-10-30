<?php

/**
 * @file
 * Display Suite Projects configuration.
 */

function ds_projects() {
  return array(
    'label' => t('Projects'),
    'regions' => array(
      'one' => t('one'),
      'two' => t('two'),
      'three' => t('three'),
    ),
    // Uncomment if you want to include a CSS file for this layout (projects.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (projects.png)
    // 'image' => TRUE,
  );
}
