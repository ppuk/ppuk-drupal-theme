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
 * Description: Leaders office page template for the Pirate Party Drupal Theme
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

<ul role="navigation" class="nav skiplinks">
  <li><a class="ym-skip" href="#nav"><?php print t('Jump to Navigation.'); ?></a></li>
  <li><a class="ym-skip" href="#main-content"><?php print t('Jump to Content.'); ?></a></li>
  <li><a class="ym-skip" href="#searchform"><?php print t('Jump to Search'); ?></a></li>
</ul>
<div class="section leadership">
  <div class="row">
    <div class="branding">
      <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" class="logo">
	<h1><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></h1>
      </a>
    </div>
    <div class="nav-top" role="navigation">
      <h2 class="skip"><?php print t('Service-Navigation'); ?></h2>
      <?php print render($page['social']); ?>
    </div>
    <div class="nav-main" role="navigation" id="nav">
	<h2 class="skip"><?php print t('Navigation'); ?></h2>
	<?php if ($main_menu): ?>
	<div class="menu-header">
	  <?php print render($main_menu_expanded); ?>
	</div>
	<?php endif; ?>
    </div>   
  </div>
</div>
<div class="section breadcrumbs">
  <div class="row">
    <div class="skin">
      <?php print $breadcrumb; ?>
    </div>
  </div>
</div>
<div class="section content " id="main-content">
  <div class="row">
    <div id="content-primary" class="content-primary">
      <div id="above_content" >
	<?php print render($page['above_content']); ?>
      </div> 
      <div style="padding: 20px 0px 0px 20px; margin-left: 10px;"><!-- change back for article image implemenation: class="content-header" -->
	<?php /* No Action links required on the user page */ ?>
        <?php print render($title_prefix); ?>
	  <h1 id="page-title">
	    <span><?php print $title ?></span>
	  </h1>
	<?php print render($title_suffix); ?>
      </div>
      <div class="skin">
	<?php if ($tabs): ?>
          <div class="tabs"><?php print render($tabs); ?>
          </div>
        <?php endif; ?>
	<?php print $messages; ?>
	<?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
	<?php print render($page['content']); ?>
      </div>
      <div id="below-content" >
	<?php print render($page['below_content']); ?>
      </div> 
    </div>
    <div id="content-aside" class="content-aside">
      <?php if ($is_front && theme_get_setting('pirateparty_teaserlinks') == 1): ?>
      <div class="teaserskin">
        <div class="teaserlinks">
	  <ul>
	    <?php
		  for ($i = 1; $i <= 4; $i++) {
		  print '<li><a href="'.theme_get_setting('pirateparty_teaser' . $i . '_url').'" class="symbol symbol-'.theme_get_setting('pirateparty_teaser' . $i . '_symbol').'">'.theme_get_setting('pirateparty_teaser' . $i . '_title').' <span>'.theme_get_setting('pirateparty_teaser' . $i . '_subtitle').'</span></a></li>';
		  }
	    ?>
	  </ul>
	</div>
      </div>
      <?php endif; ?>	
      <?php print render($page['teaserlinks']); ?>
      <?php if ($page['sidebar_first']): ?>
        <div class="skin">
          <h1 class="skip"><?php print t('More Information'); ?>
          </h1>
	  <?php print render($page['sidebar_first']); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="section pre-footer">
  <div class="row">
    <?php print render($page['pre-footer']); ?>
  </div>
</div>
<div class="section footer">
  <div class="row">
    <?php print render($page['footer']); ?>
    <?php print render($page['siteinfo']); ?>
  </div>
</div>
