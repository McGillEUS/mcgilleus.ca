<?php

function mixed_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['mixed_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Mixed Theme Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  
   $form['mixed_settings']['general_settings']['mixed_boxed'] = array(
    '#type' => 'checkbox',
    '#title' => t('Boxed Layout?'),
    '#default_value' => theme_get_setting('mixed_boxed', 'mixed'),
    '#description' => t("Check for yes!"),
  );
  
   $form['mixed_settings']['general_settings']['header'] = array(
    '#type' => 'select',
    '#title' => t('Header Version'),
    '#options' => array(1 => 1, 2 => 2, 3 => 3),
    '#default_value' => theme_get_setting('header'),
  );
  

  $form['mixed_settings']['general_settings']['theme_color_config']['theme_color_palette'] = array(
    '#type' => 'select',
    '#title' => t('Choose a color palette'),
    '#default_value' => theme_get_setting('theme_color_palette'),
    '#options' => array(
      'default' => t('Default'),
      'blue2' => t('Blue 2'),
      'red' => t('Red'),
      'orange' => t('Orange'),
      'orange-light' => t('Orange Light'),
	  'green-light' => t('Green Light'),
      'cyan' => t('Cyan'),
      'brown' => t('Brown'),
	  'purple' => t('Purple'),
	  'yellow' => t('Yellow'),
    ),
  );


  $form['mixed_settings']['general_settings']['theme_pattern_config']['theme_bg_pattern'] = array(
    '#type' => 'select',
    '#title' => t('Choose a background pattern'),
    '#default_value' => theme_get_setting('theme_bg_pattern'),
    '#options' => array(
      'none' => t('None'),
      'patt1' => t('Pattern-1'),
      'patt2' => t('Pattern-2'),
      'patt3' => t('Pattern-3'),
      'patt4' => t('Pattern-4'),
      'patt5' => t('Pattern-5'),
    ),
  );


}
