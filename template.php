<?php
/**
 * @file template.php
 * This file provides theme functions to override or extend Drupal behavior.
 *
 * @author Raymond Jelierse
 */

function equinox_preprocess_page(&$variables) {
  $theme_settings = array(
      'carouselTimeout' => 10000,
      'carouselTransitionSpeed' => 500,
  );

  theme_get_setting('', TRUE);

  if (theme_get_setting('carousel_timeout') !== NULL) {
    $theme_settings['carouselTimeout'] = intval(theme_get_setting('carousel_timeout'));
  }

  if (theme_get_setting('carousel_transition_speed') !== NULL) {
    $theme_settings['carouselTransitionSpeed'] = intval(theme_get_setting('carousel_transition_speed'));
  }

  drupal_add_js(array('equinox' => $theme_settings), 'setting');
  $variables['scripts'] = drupal_get_js();
}

function equinox_preprocess_node(&$variables) {
  // Determine if we want to show an extra column next to the content
  if ($variables['teaser']) {
    $variables['sidebar'] = FALSE;
  }
  elseif (!empty($variables['terms'])) {
    $variables['sidebar'] = TRUE;
  }
  elseif (!empty($variables['links'])) {
    $variables['sidebar'] = TRUE;
  }
  elseif (!empty($variables['field_committees_rendered'])) {
    $variables['sidebar'] = TRUE;
  }
  elseif (!empty($variables['field_members_rendered'])) {
    $variables['sidebar'] = TRUE;
  }
  elseif (!empty($variables['field_logo_rendered'])) {
    $variables['sidebar'] = TRUE;
  }
  else {
    $variables['sidebar'] = FALSE;
  }
}