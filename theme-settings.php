<?php
/**
 * @file theme-settings.php
 * Settings for the Equinox theme.
 *
 * @author Raymond Jelierse
 */

function equinox_settings($current_settings) {
  $default_settings = array(
      'carousel_timeout' => 10000,
      'carousel_transition_speed' => 500,
  );

  $settings = array_merge($default_settings, $current_settings);

  return array(
      'carousel' => array(
          '#type' => 'fieldset',
          '#title' => t('Carousel animation'),
          'carousel_timeout' => array(
              '#type' => 'textfield',
              '#title' => t('Slide visibility duration'),
              '#default_value' => $settings['carousel_timeout'],
              '#size' => 5,
              '#field_suffix' => 'ms',
          ),
          'carousel_transition_speed' => array(
              '#type' => 'textfield',
              '#title' => t('Slide transition duration'),
              '#default_value' => $settings['carousel_transition_speed'],
              '#size' => 5,
              '#field_suffix' => 'ms',
          ),
      ),
  );
}