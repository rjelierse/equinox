<?php

/**
 * @file node.tpl.php
 *
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $picture: The authors picture of the node output from
 *   theme_user_picture().
 * - $date: Formatted creation date (use $created to reformat with
 *   format_date()).
 * - $links: Themed links like "Read more", "Add new comment", etc. output
 *   from theme_links().
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $submitted: themed submission information output from
 *   theme_node_submitted().
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $teaser: Flag for the teaser state.
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?> clearfix">

<?php if ($sidebar): ?>
  <div class="node-content-column grid_8 alpha">
<?php endif; ?>

  <?php if (!$page): ?>
    <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>

  <?php if (!empty($field_photo_rendered)): ?>
    <div class="content-photo">
      <?php print $field_photo_rendered; ?>
    </div>
  <?php endif; ?>

  <?php if ($submitted): ?>
    <span class="submitted"><?php print $submitted ?></span>
  <?php endif; ?>

  <div class="content">
    <?php print $content ?>
  </div>

<?php if ($sidebar): ?>
  </div>
  <div class="node-metadata-column grid_4 omega">
<?php endif; ?>

    <?php if (!empty($field_logo_rendered)): ?>
      <div class="node-metadata-block">
        <?php print $field_logo_rendered; ?>
      </div>
    <?php endif; ?>
    
    <?php if (!empty($field_website_rendered)): ?>
      <div class="node-metadata-block">
        <?php print $field_website_rendered; ?>
      </div>
    <?php endif; ?>

    <?php if ($terms): ?>
      <div class="node-metadata-block">
        <div class="terms terms-inline"><?php print $terms ?></div>
      </div>
    <?php endif;?>

    <?php if (!empty($field_members_rendered)): ?>
      <div class="node-metadata-block">
        <?php print $field_members_rendered; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($field_committees_rendered)): ?>
      <div class="node-metadata-block">
        <?php print $field_committees_rendered; ?>
      </div>
    <?php endif; ?>

    <?php if (!empty($links)): ?>
      <div class="node-metadata-block">
        <?php print $links; ?>
      </div>
    <?php endif; ?>
    
    <?php if ($social): ?>
      <div class="node-metadata-block node-social-buttons">
        <?php if (!empty($facebook_like_rendered)): ?>
          <div id="node-social-facebook" class="node-social-button">
            <?php print $facebook_like_rendered; ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($google_plusone_rendered)): ?>
          <div id="node-social-google" class="node-social-button">
            <?php print $google_plusone_rendered; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

<?php if ($sidebar): ?>
  </div>
<?php endif; ?>
</div>