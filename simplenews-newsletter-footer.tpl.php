<?php

/**
 * @file
 * Default theme implementation to format the simplenews newsletter footer.
 *
 * Copy this file in your theme directory to create a custom themed footer.
 * Rename it to simplenews-newsletter-footer--[tid].tpl.php to override it for a
 * newsletter using the newsletter term's id.
 *
 * @todo Update the available variables.
 * Available variables:
 * - $build: Array as expected by render()
 * - $build['#node']: The $node object
 * - $language: language code
 * - $key: email key [node|test]
 * - $format: newsletter format [plain|html]
 * - $unsubscribe_text: unsubscribe text
 * - $test_message: test message warning message
 * - $simplenews_theme: path to the configured simplenews theme
 *
 * Available tokens:
 * - [simplenews-subscriber:unsubscribe-url]: unsubscribe url to be used as link
 *
 * Other available tokens can be found on the node edit form when token.module
 * is installed.
 *
 * @see template_preprocess_simplenews_newsletter_footer()
 */

/****

## NOTE : This file must also exist in your administration theme if you are sending from the administration panel.

***/


?>
<?php if (!$opt_out_hidden): ?>
  <?php if ($format == 'html'): ?>
<p>--</p>

<p>Like what we do? Help fund us at https://www.pirateparty.org.uk/donation - we rely entirely on donations to make what we do possible! </p>

<p>For more information on the Pirate Party UK, please visit our website at https://www.pirateparty.org.uk.  If you wish to receive regular press statements from the Party (or no longer wish to receive them) please email the Press Office at press@pirateparty.org.uk, or unsubscribe below.  The Pirate Party UK is a political party registered at Studio 202, Islington Mill, James Street, Salford, M3 5HW. </p>

<p>Use the following link to unsubscribe: [simplenews-subscriber:unsubscribe-url]</p>
<?php else: ?>
--

Like what we do? Help fund us at https://www.pirateparty.org.uk/donation - we rely entirely on donations to make what we do possible!

For more information on the Pirate Party UK, please visit our website at https://www.pirateparty.org.uk.  If you wish to receive regular press statements from the Party (or no longer wish to receive them) please email the Press Office at press@pirateparty.org.uk or you can unsubscribe using the link below. The Pirate Party UK is a political party registered at Studio 202, Islington Mill, James Street, Salford, M3 5HW. 

Use the following link to unsubscribe: [simplenews-subscriber:unsubscribe-url]
  <?php endif ?>
<?php endif; ?>
<?php if ($key == 'test'): ?>
// This is a test email. It was only sent to test contacts. 
If you received it in error, please contact the IT team at 
webteam@pirateparty.org.uk. //
<?php endif ?>
