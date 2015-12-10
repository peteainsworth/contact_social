<?php
/**
 * @file
 * Template file.
 *
 * @param $align: left or right.
 * @param $class: classes to apply to anchor tag.
 * @param $top: distance from the top; include unit.
  * @param $twitter_image: Contact us image path.
 * @param $twitter_title: title text.
 * @param $twitter__height: image height; include unit.
 * @param $twitter_width: image width; include unit.
 * @param $twitter_link: link path.
  * @param $twitter_image: Contact us image path.
 * @param $facebook_title: title text.
 * @param $facebook__height: image height; include unit.
 * @param $facebook_width: image width; include unit.
 * @param $facebook_link: link path.
  * @param $contact_us_image: Contact us image path.
 * @param $contact_us_title: title text.
 * @param $contact_us__height: image height; include unit.
 * @param $contact_us_width: image width; include unit.
 * @param $contact_us_link: link path.
  * @param $enabled: true or false.
 */
?>
<?php if ($enabled): ?>
<div id='contact_social' class='contact_social-<?php print $align ?>' style='top: <?php print $top ?>;'>
  <a 
  	href='<?php print $twitter_link ?>'
    class='<?php print implode(' ', $class) ?> contact-social-twitter'
    style='height: <?php print $twitter_height ?>; width: <?php print $twitter_width ?>;'
    title='<?php print $twitter_title ?>'
    rel='nofollow'>
  </a>
  <a 
  	href='<?php print $facebook_link ?>'
    class='<?php print implode(' ', $class) ?> contact-social-facebook'
    style='height: <?php print $facebook_height ?>; width: <?php print $facebook_width ?>;'
    title='<?php print $facebook_title ?>'
    rel="nofollow">
  </a>
  <a 
  	href='<?php print $contact_us_link ?>'
    class='<?php print implode(' ', $class) ?> contact-social-contact-us'
    style='height: <?php print $contact_us_height ?>; width: <?php print $contact_us_width ?>;'
    title='<?php print $contact_us_title ?>'
    rel="nofollow">
  </a>
</div>
<?php endif; ?>
