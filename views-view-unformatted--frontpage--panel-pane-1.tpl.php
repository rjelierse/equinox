<?php
/**
 * @file Grouping template for the Activities page.
 *
 * Available variables:
 * - $title: The rendered value of the field that is being grouped on.
 * - $rows: Keyed array of items in the current group.
 *
 * @ingroup views_templates
 */

?>
<?php foreach ($rows as $id => $row): ?>
  <div class="frontpage-banner-item grid_12 alpha omega">
    <?php print $row; ?>
  </div>
<?php endforeach; ?>