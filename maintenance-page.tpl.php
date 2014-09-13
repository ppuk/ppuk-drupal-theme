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
 * Version:	0.9.1
 *
 * Description: Maintenance page template for the Pirate Party Drupal Theme
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
  <head>
    <meta charset="utf-8"/>
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="<?php print base_path() . drupal_get_path('theme', 'pirateparty'); ?>/apple-touch-icon.png">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php print $styles; ?>
    <?php print $scripts; ?>
  </head>
  <body style="background-color:#000;" class="<?php print $classes; ?>" <?php print $attributes; ?>>

<ul role="navigation" class="nav skiplinks">
  <li><a class="ym-skip" href="#nav"><?php print t('Jump to Navigation.'); ?></a></li>
  <li><a class="ym-skip" href="#main-content"><?php print t('Jump to Content.'); ?></a></li>
  <li><a class="ym-skip" href="#searchform"><?php print t('Jump to Search'); ?></a></li>
</ul>
<div class="section maintenance">
  <div class="row">
    <div class="branding">
      <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" class="logo">
	<h1><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /></h1>
      </a>
    </div>
   
    
  </div>
</div>
<div class="section breadcrumbs">
  <div class="row">
    <div class="skin">
	 <p> Maintenance mode </p>
    </div>
  </div>
</div>
<div class="section content " id="main-content" style="min-height:300px;">
  <div class="row">
    <div id="content-primary" class="content-primary">
      <div style="padding: 20px 0px 0px 20px; margin-left: 10px;"><!-- change back for article image implemenation: class="content-header" -->
	<?php /* No Action links required on the user page */ ?>
        <?php print render($title_prefix); ?>
	  <h1 id="page-title">
	  </h1>
	<?php print render($title_suffix); ?>
      </div>
      <div class="skin" stye="margins:auto;">
<iframe width="853" height="480" src="//www.youtube-nocookie.com/embed/HfctfZB51Pc?list=PLrvEWQvNaiyIK6eg16YmO4h9lcD063cBu" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
    <div id="content-aside" class="content-aside">
 <br/><h1><?php print $title ?></h1>
<?php print $messages; ?>
<?php print $content; ?>
<p> So in the interim, have a look what your local branch is up to, many cities have a local Pirate Party Branch and their sites will not be in maintenance at the same time as the central party site.  If you don't have a local branch, head over to <a href="http://sheffield.pirateparty.org.uk">the Sheffield, or <a href="http://manchester.pirateparty.org.uk">Manchester</a> Branch Sites</a>, don't forget that there is a <a href="http://www.reddit.com/r/piratepartyuk">Pirate Party UK subreddit</a> on reddit.com too!</p>

<p>If that isn't to your liking you could go and take a look at what Pirate Parties around the world, like the <a href="www.piratenpartei.de">Piraten Partei</a> in Germany, or <a href="http://www.piratpartiet.se/">Piratpartiet</a> in Sweden are up to.  Alternatively the <a href="https://www.openrightsgroup.org/">Open Rights Groups</a> is involved in advocating for digital rights and well worth a look too.  Alternatively, you could enjoy the video opposite and take a look at our content on youtube.</p> 

<p>We will try to get the site back into normal working order as soon as possible. If you have an urgent issue, you can contact the <a href="mailto:webteam@pirateparty.org.uk">IT team</a> or <a href="mailto:campaigns@pirateparty.org.uk">Campaigns team</a> directly - or call us on +44 (0) 0161 987 7880 and we will try to help you out!</p>

<p>Thank you</p>

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

<h2>The Fine Print</h2>
<p>For more information on the Pirate Party UK, get in touch! If you wish to receive regular press statements from the Party (or no longer wish to receive them) please email the Press Office at press@pirateparty.org.uk.  You might also want to ead our Privacy Policy and our Terms of Use for this site. The Pirate Party UK is a political party registered at 26 Cleveland Street, Upperthorpe, Sheffield, S6 3JB.  Any and all original material on theis website may be freely distributed at will under the Creative Commons Attribution License, unless otherwise noted.</p>

  </div>
</div>

  </body>
</html>
