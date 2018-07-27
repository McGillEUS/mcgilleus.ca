<?php
global $theme_root ;
$theme_root = base_path() . drupal_get_path('theme', 'mixed');

function  mixed_js_alter(&$javascript) {
  // Collect the scripts we want in to remain in the header scope.
  $header_scripts = array(
    'sites/all/libraries/modernizr/modernizr.min.js',
  );

  // Change the default scope of all other scripts to footer.
  // We assume if the script is scoped to header it was done so by default.
  foreach ($javascript as $key => &$script) {
    if ($script['scope'] == 'header' && !in_array($script['data'], $header_scripts)) {
      $script['scope'] = 'footer';
    }
  }
}

function mixed_css_alter(&$css) {
		unset($css[drupal_get_path('module', 'system') . '/system.menus.css']);
		unset($css[drupal_get_path('module', 'system') . '/system.theme.css']);
}

function mixed_breadcrumb($variables) {

  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {

   $output = '<h2 class="element-invisible">' . t('You are here') . '</h2>';

	$breadcrumb[] = drupal_get_title();
    $output .= '<div class="breadcrumb"><span>You Are Here:</span><span>  '  . implode('  /  ', $breadcrumb) . '</span> </div>';
    return $output;
 }
}
function mixed_button($variables) {

  $element = $variables['element'];
  $element['#attributes']['type'] = 'submit';
  element_set_attributes($element, array('id', 'name', 'value'));

  $element['#attributes']['class'][] = 'wpcf7-submit default form-' . $element['#button_type'];
  if (!empty($element['#attributes']['disabled'])) {
    $element['#attributes']['class'][] = 'form-button-disabled';
  }

  return '<input' . drupal_attributes($element['#attributes']) . ' />';
}

function mixed_menu_local_tasks(&$vars) {
		$output = '';
	
		if (!empty($vars['primary'])) {
			$vars['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
			$vars['primary']['#prefix'] .= '<ul class="nav nav-tabs primary">';
			$vars['primary']['#suffix'] = '</ul>';
			$output .= drupal_render($vars['primary']);
		}
	
		return $output;
	}


function mixed_preprocess_html(&$vars) {
 // $path = drupal_get_path('theme', 'mixed');
 // drupal_add_js($path . '/js/jquery.srcipts.min.js', array('scope' => 'head_scripts', 'weight' => -1, 'preprocess' => FALSE));  

  $bgklasa = theme_get_setting('theme_bg_pattern');
  $vars['classes_array'][] = drupal_html_class($bgklasa);
  
  // The Color Palette.
  $file = theme_get_setting('theme_color_palette');
  drupal_add_css(path_to_theme() . '/css/skins/' . $file . '.css');
    
}
function mixed_process_html(&$vars) {
  $vars['head_scripts'] = drupal_get_js('head_scripts');
}
function mixed_preprocess_button(&$vars) {
  $vars['element']['#attributes']['class'][] = 'button medium-btn';
  
}
function mixed_form_alter(&$form, &$form_state, $form_id) {
	
	if ($form_id == 'search_block_form') {
	unset($form['search_block_form']['#title']);
	$form['search_block_form']['#title_display'] = 'invisible';
	$form_default = t('Type and hit enter...');
	$form['search_block_form']['#default_value'] = $form_default;

	$form['actions']['submit']['#attributes']['value'][] = '';

	$form['search_block_form']['#attributes'] = array('onblur' => "if (this.value == '') {this.value = '{$form_default}';}", 'onfocus' => "if (this.value == '{$form_default}') {this.value = '';}" );
	}  

}

function  mixed_form_contact_site_form_alter(&$form, &$form_state) {
  drupal_set_title(' Contact ');
}
function mixed_theme() {
return array(
'contact_site_form' => array(
'render element' => 'form',
'template' => 'contact-site-form',
'path' => drupal_get_path('theme', 'mixed').'/templates',
),
);
}
function mixed_preprocess_contact_site_form(&$variables)
{
	//an example of setting up an extra variable, you can also put this directly in the template
	$variables['info'] = 'Please fill in the fields below to contact us';
	//this is the contents of the form
	$variables['contact'] = drupal_render_children($variables['form']);
 
}