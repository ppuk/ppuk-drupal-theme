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
 * Description: Article Node template with comment bubble and user image for the Pirate Party Drupal Theme
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
    <h2<?php print $title_attributes; ?>><?php print $name; ?> : 
    <a href="<?php print $node_url; ?>"><?php print $title; ?></a>
    </h2>
<span class="submitted"><?php print $submitted ?>
   </span>
  </div>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <div id="marker">
    <div class="post-info">
      <div class="commentbubble">
        <a href="<?php print $node_url; ?>#comments">
	  <?php print $comment_count . '<span class="skip"> ' . format_plural($comment_count, 'comment', 'comments') . '</span>'; ?>
        </a>
      </div>
      <div class="cal-icon">
        <span class="day"><?php print format_date($created, 'custom', 'j.'); ?></span>
        <span class="month"><?php print format_date($created, 'custom', 'm.'); ?></span>
        <span class="year"><?php print format_date($created, 'custom', 'Y'); ?></span>
      </div>
    </div>
  </div>
  <div class="post-entry"<?php print $content_attributes; ?>>
    <?php
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  <?php if ($page): ?>
    <div id="signature-block">
      <h3>Author - <?php print $name; ?>
      </h3>
      <?php print $user_picture; ?>
      <?php print $user_signature; ?>
    </div>
  <?php endif; ?>
  <div class="post-meta">
    <?php if (!empty($content['links'])): ?>
      <div class="links"><?php print render($content['links']); ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="post-comments" id="comments">
    <?php print render($content['comments']); ?>
  </div>
</div>