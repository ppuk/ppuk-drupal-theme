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
 * the current Piratenpartei wordpress theme (http://www.piratenkleider.de/) with  
 * YAML elements by Dirk Jesse
 * 
 * CC-BY 2.0 (http://creativecommons.org/licenses/by/2.0/),
*/

$textsymbolliste = array(
  'idea'  => array("0021", "!"),
  'person'  => array("263A", "☺"),
  'heart'  => array("2665", "♥"),
  'email'  => array("2709", "✉"),
  'at'  => array("0040", "@"),
  'check'  => array("2713", "✓"),
  'nocheck'  => array("2717", "✗"),
  'phone'  => array("2706", "✆"),
  'anchor'  => array("2693", "⚓"),
  'skull'  => array("2620", "☠"),
  'female'  => array("2640", "♀"),
  'male'  => array("2642", "♂"),
  'malefemale'  => array("26A5", "⚥"),
  'write'  => array("270D", "✍"),
  'wheelchair'  => array("267F", "♿"),
  'wheel'  => array("2638", "☸"),
  'note'  => array("266B", "♫"),
  'paragraph'  => array("00A7", "§"),
  'play'  => array("25B6", "▶"),
  'save'  => array("2714", "✔"),
  'spark' => array("2737", "✷"),
  'star'  => array("2605", "★"),
  'one'  => array("2460", "①"),
  'two'  => array("2461", "②"),
  'three'  => array("2462", "③"),
  'euro'  => array("20AC", "€"),
  'dollar'  => array("0024", "$"),
  'pound'  => array("00A3", "£"),
  'copyright'  => array("00A9", "©"),
);

$textsymbolliste_html = array();

foreach($textsymbolliste as $i => $value) {
  $textsymbolliste_html[$i] = '&#x'.$value[0].';';
}

$textsymbolliste_plain = array();

foreach($textsymbolliste as $i => $value) {
  $textsymbolliste_plain[$i] = $value[1];
}

?>