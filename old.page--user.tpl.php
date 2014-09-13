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
 * Version:	0.9 (Hack)
 *
 * Description: User page over-ride template for the Pirate Party Drupal Theme 
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
<div class="section header">
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
    <div id="content-primary" style="width:98%;">
        <?php print $messages; ?>
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
	<?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
	<?php print render($page['content']); ?>
      </div>
      <div id="below-content" >
	<?php print render($page['below_content']); ?>
      </div> 
    </div>
    <div id="content-aside" style="width:1px;">
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
