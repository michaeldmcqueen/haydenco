<?php

/**
 * @file
 * Display Suite Projects configuration.
 */

function ds_custom_two_col() {
  return array(
    'label' => t('Two Col'),
    'regions' => array(
      'one' => t('one'),
      'two' => t('two'),
    ),
    // Uncomment if you want to include a CSS file for this layout (projects.css)
    // 'css' => TRUE,
    // Uncomment if you want to include a preview for this layout (projects.png)
    // 'image' => TRUE,
  );
}
