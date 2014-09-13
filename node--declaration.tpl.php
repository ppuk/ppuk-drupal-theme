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
 * Description: Blog post node template with comment bubble and user image for the Pirate Party Drupal Theme
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

<div id="node-<?php print $node->nid; ?>" class="post <?php print $classes; ?>"<?php print $attributes; ?>>
 <?php print render($title_prefix); ?>
 <?php if (!$page): ?>
 <div class="post-title">
   <h2<?php print $title_attributes; ?>><?php print $name; ?>:<a href="<?php print $node_url; ?>"><?php print $title; ?></a>
   </h2>
 </div>
 <?php endif; ?>
 <?php print render($title_suffix); ?>
 <?php print $user_picture; ?> 
 <div class="post-entry"<?php print $content_attributes; ?>>
   <?php
     // We hide the comments and links now so that we can render them later.
     hide($content['comments']);
     hide($content['links']);
     print render($content);
   ?>
 </div>
 <div class="post-meta">
   <?php if (!empty($content['links'])): ?>
     <div class="links"><?php print render($content['links']); ?></div>
   <?php endif; ?>
 </div>
 <div class="post-comments" id="comments">
   <?php print render($content['comments']); ?>
 </div>
</div>