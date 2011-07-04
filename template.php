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
  
  $variables['user_menu'] = theme('links', menu_navigation_links('navigation'), array('id' => 'user-links-menu', 'class' => 'links user-links'));
}

function equinox_preprocess_node(&$variables) {
  // Remove translation links from the tree. We do not want them.
  $node = $variables['node'];
  if (empty($node->links)) $node->links = array();
  foreach ($node->links as $id => $data) {
    if (substr($id, 0, 16) === 'node_translation') {
      unset($node->links[$id]);
    }
  }
  $variables['links'] = !empty($node->links) ? theme('links', $node->links, array('class' => 'links inline')) : '';

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