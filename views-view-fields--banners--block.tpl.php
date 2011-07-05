<?php
/**
 * @file views-view-fields--banners--block.tpl.php
 * Template for single banner in block output.
 * 
 * @author Raymond Jelierse
 */
?>

<a href="<?php print $fields['field_url_value']->content; ?>" title="<?php print $fields['title']->content; ?>"><?php print $fields['field_banner_image_fid']->content; ?></a>