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

$counter = 1;
?>
<?php if (!empty($title)): ?>
  <h3 class="views-group-title"><?php print $title; ?></h3>
<?php endif; ?>

<?php foreach ($rows as $id => $row): ?>
  <div class="views-row-item grid_6 <?php print (($counter % 2) === 1) ? 'alpha' : ((($counter % 2) === 0) ? 'omega' : ''); ?>">
    <?php print $row; ?>
  </div>
  <?php $counter++; ?>
<?php endforeach; ?>