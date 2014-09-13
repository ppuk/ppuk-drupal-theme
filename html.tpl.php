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
 * Description: Standard html template for the Pirate Party Drupal Theme
 *
 *
 *
 * Acknowledgements:
 *
 * Based on and developed from Piratenkleider - Wolfgang Wiese (xwolf)
 * the current Piratenpartei wordpress theme (http://www.piratenkleider.de/)
 *
*/

?>

<!DOCTYPE html>
    <head profile="https://www.w3.org/1999/xhtml/vocab">
    <meta charset="utf-8"/>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="B3OokA652E7B8LBTTBhxFEx7ZbpYhkrXazQTG4dCcJ4" />
    <link rel="apple-touch-icon" href="<?php print base_path() . drupal_get_path('theme', 'pirateparty'); ?>/apple-touch-icon.png">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body class="<?php print $classes; ?>" <?php print $attributes; ?>>
    <?php print $page_top; ?>
    <?php print $page; ?>
    <?php print $page_bottom; ?>
  </body>
</html>
