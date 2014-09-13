<?php 

/*
 *
 * Project:	PiratePartyUK Drupal Theme (NWP 2014)
 * 
 *
 * Authors: 	Andy Halsall <a.halsall@pirateparty.org.uk>
 *		Peter Descard 
 *		Pirate Party UK
 * Date:	2014-02-24
 * Version:	0.9
 *
 * Description: Theme settings template for the Pirate Party Drupal Theme
 *		Allows the setting of the front page teaserlinks in the theme settings
 *		TODO: Consider moving all the teaserlinks either into or out of the theme settings.
 *
 *
 * Acknowledgements:
 *
 * Based on and developed from Piratenkleider - Wolfgang Wiese (xwolf)
 * the current Piratenpartei wordpress theme (http://www.piratenkleider.de/)
 *
*/

function pirateparty_preprocess_page(&$variables) {
  $men = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
  $variables['main_menu_expanded'] = $men;
}

function pirateparty_menu_tree__main_menu($variables) {
  return '<ul id="menu-mainmenu" class="menu">' . $variables['tree'] . '</ul>';
}

function pirateparty_menu_link__main_menu(array $variables) {
  $element = $variables['element'];
  $sub_menu = '';
  if ($element['#below']) {
    $sub_menu = drupal_render($element['#below']);
  }
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li>' . $output . $sub_menu . "</li>\n";
}

function pirateparty_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $breadcrumb[] = '<span class="current">'. drupal_get_title() .'</span>';
  if (!empty($breadcrumb)) {
    $output = '<h2 class="skip">' . t('You are here') . '</h2>';
    $output .= '<div class="breadcrumb">' . implode(' / ', $breadcrumb) . '</div>';
    return $output;
  }
}

function pirateparty_preprocess_node(&$vars, $hook) {
  $account = user_load($vars['uid']);
  $vars['user_signature'] = '';
  if (isset($account->signature, $account->signature_format)) {
    $vars['user_signature'] = check_markup($account->signature, $account->signature_format);
    $vars['submitted'] =  t('Written by !username on !datetime',
        array(
        '!username' => $vars['name'],
        '!datetime' => $vars['date'],
        ));
  }
}

function pirateparty_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); 
    $form['search_block_form']['#title_display'] = 'invisible'; 
    $form['search_block_form']['#size'] = 40; 
    $form['search_block_form']['#default_value'] = t('Search'); 
    $form['actions']['#attributes']['class'][] = 'element-invisible';
    $form['actions']['submit']['#value'] = t('GO!');
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Search';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Search') {this.value = '';}";
    $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Search'){ alert('Please enter a search'); return false; }";
    $form['search_block_form']['#attributes']['placeholder'] = t('Search');
  }
}

function pirateparty_process_page(&$vars){
$alias = explode('/',drupal_get_path_alias(request_uri()));
  if($alias[1]== "campaigns") {
    $vars['theme_hook_suggestions'][] = 'page__campaigns'; }
  if($alias[1]== "policy") {
    $vars['theme_hook_suggestions'][] = 'page__policy'; } 
  if($alias[1]== "leaders-office") {
    $vars['theme_hook_suggestions'][] = 'page__leaders'; }
 if($alias[1]== "press") {
    $vars['theme_hook_suggestions'][] = 'page__press'; } 
  }

function pirateparty_preprocess_field(&$variables, $hook) {
if(($variables['element']['#field_type'] == 'text_long' || $variables['element']['#field_type'] == 'text_with_summary') && $variables['element']['#items'][0]['format'] == null) {
$variables['items'][0]['#markup'] = nl2br($variables['items'][0]['#markup']);
}
}
