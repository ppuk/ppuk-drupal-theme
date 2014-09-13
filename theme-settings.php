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

function pirateparty_form_system_theme_settings_alter (&$form, $form_state) {
  require(dirname(__FILE__) . '/inc/constants.php');

  $form['pirateparty_teaserlinks'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show teaserlinks on the front page?'),
    '#default_value' => theme_get_setting('pirateparty_teaserlinks'),
  );

  for ($i = 1; $i <= 4; $i++) {
    $form['teaser' . $i] = array(
      '#type' => 'fieldset',
      '#title' => t('Teaserlink ' . $i),
    );

    $form['teaser' . $i]['pirateparty_teaser' . $i . '_symbol'] = array(
      '#type' => 'select',
      '#title' => t('Symbol'),
      '#options' => $textsymbolliste_plain,
      '#default_value' => theme_get_setting('pirateparty_teaser' . $i . '_symbol'),
    );

    $form['teaser' . $i]['pirateparty_teaser' . $i . '_title'] = array(
      '#type' => 'textfield',
      '#title' => t('Title'),
      '#default_value' => theme_get_setting('pirateparty_teaser' . $i . '_title'),
    );

    $form['teaser' . $i]['pirateparty_teaser' . $i . '_subtitle'] = array(
      '#type' => 'textfield',
      '#title' => t('Subtitle'),
      '#default_value' => theme_get_setting('pirateparty_teaser' . $i . '_subtitle'),
    );

    $form['teaser' . $i]['pirateparty_teaser' . $i . '_url'] = array(
      '#type' => 'textfield',
      '#title' => t('URL'),
      '#default_value' => theme_get_setting('pirateparty_teaser' . $i . '_url'),
    );
  }

}

?>
